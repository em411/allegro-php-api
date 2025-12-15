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

class CreatePickupStatus extends \Em411\Allegro\Api\Runtime\Client\BaseEndpoint implements \Em411\Allegro\Api\Runtime\Client\Endpoint
{
    use \Em411\Allegro\Api\Runtime\Client\EndpointTrait;
    protected $commandId;

    /**
     * Use this resource to get pickup request status. Read more: <a href="../../tutorials/jak-zarzadzac-przesylkami-przez-wysylam-z-allegro-LRVjK7K21sY#jak-sprawdzic-status-zamowienia-odbioru-paczek" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-parcels-via-ship-with-allegro-ZM9YAyGKWTV#how-to-check-shipment-pickup-request-status" target="_blank">EN</a>.
     *
     * @param string $commandId        command UUID
     * @param array  $headerParameters {
     *
     * @var string $Accept-Language Expected language of messages.
     *             }
     */
    public function __construct(string $commandId, array $headerParameters = [])
    {
        $this->commandId = $commandId;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{commandId}'], [$this->commandId], '/shipment-management/pickups/create-commands/{commandId}');
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

    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['Accept-Language']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('Accept-Language', ['string']);

        return $optionsResolver;
    }

    /**
     * @return \Em411\Allegro\Api\Model\CreatePickupCommandStatusDto|null
     *
     * @throws \Em411\Allegro\Api\Exception\CreatePickupStatusBadRequestException
     * @throws \Em411\Allegro\Api\Exception\CreatePickupStatusUnauthorizedException
     * @throws \Em411\Allegro\Api\Exception\CreatePickupStatusForbiddenException
     * @throws \Em411\Allegro\Api\Exception\CreatePickupStatusNotFoundException
     * @throws \Em411\Allegro\Api\Exception\CreatePickupStatusGatewayTimeoutException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ((null === $contentType) === false && (200 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            return $serializer->deserialize($body, 'Em411\Allegro\Api\Model\CreatePickupCommandStatusDto', 'json');
        }
        if ((null === $contentType) === false && (400 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            throw new \Em411\Allegro\Api\Exception\CreatePickupStatusBadRequestException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\ShipmentManagementPickupsCreateCommandsCommandIdGetResponse400', 'json'), $response);
        }
        if ((null === $contentType) === false && (401 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            throw new \Em411\Allegro\Api\Exception\CreatePickupStatusUnauthorizedException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\AuthError', 'json'), $response);
        }
        if ((null === $contentType) === false && (403 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            throw new \Em411\Allegro\Api\Exception\CreatePickupStatusForbiddenException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\ShipmentManagementPickupsCreateCommandsCommandIdGetResponse403', 'json'), $response);
        }
        if (404 === $status) {
            throw new \Em411\Allegro\Api\Exception\CreatePickupStatusNotFoundException($response);
        }
        if ((null === $contentType) === false && (504 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            throw new \Em411\Allegro\Api\Exception\CreatePickupStatusGatewayTimeoutException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\ShipmentManagementPickupsCreateCommandsCommandIdGetResponse504', 'json'), $response);
        }
    }
}
