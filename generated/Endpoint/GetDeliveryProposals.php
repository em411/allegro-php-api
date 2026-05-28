<?php

declare(strict_types=1);

/*
 * This file is part of em411's Allegro PHP API project.
 *
 * (c) em411 <contact@em411.dev>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Em411\Allegro\Api\Endpoint;

class GetDeliveryProposals extends \Em411\Allegro\Api\Runtime\Client\BaseEndpoint implements \Em411\Allegro\Api\Runtime\Client\Endpoint
{
    use \Em411\Allegro\Api\Runtime\Client\EndpointTrait;
    protected $orderId;

    /**
     * Use this resource to retrieve two order characteristics. The first is a pre-populated request body for creating a shipment in SwA. The second is a list of possible delivery types for processing the order, including their limits.
     *
     * @param string $orderId order ID
     */
    public function __construct(string $orderId)
    {
        $this->orderId = $orderId;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{orderId}'], [$this->orderId], '/shipment-management/delivery-proposals/{orderId}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/vnd.allegro.public.v1+json']];
    }

    public function getAuthenticationScopes(): array
    {
        return ['bearer-token-for-user'];
    }

    /**
     * @return \Em411\Allegro\Api\Model\DeliveryProposalDto|null
     *
     * @throws \Em411\Allegro\Api\Exception\GetDeliveryProposalsUnauthorizedException
     * @throws \Em411\Allegro\Api\Exception\GetDeliveryProposalsForbiddenException
     * @throws \Em411\Allegro\Api\Exception\GetDeliveryProposalsGatewayTimeoutException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ((null === $contentType) === false && (200 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            return $serializer->deserialize($body, 'Em411\Allegro\Api\Model\DeliveryProposalDto', 'json');
        }
        if ((null === $contentType) === false && (401 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            throw new \Em411\Allegro\Api\Exception\GetDeliveryProposalsUnauthorizedException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\AuthError', 'json'), $response);
        }
        if ((null === $contentType) === false && (403 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            throw new \Em411\Allegro\Api\Exception\GetDeliveryProposalsForbiddenException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\ShipmentManagementDeliveryProposalsOrderIdGetResponse403', 'json'), $response);
        }
        if ((null === $contentType) === false && (504 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            throw new \Em411\Allegro\Api\Exception\GetDeliveryProposalsGatewayTimeoutException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\ShipmentManagementDeliveryProposalsOrderIdGetResponse504', 'json'), $response);
        }
    }
}
