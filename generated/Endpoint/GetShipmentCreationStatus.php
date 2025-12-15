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

class GetShipmentCreationStatus extends \Em411\Allegro\Api\Runtime\Client\BaseEndpoint implements \Em411\Allegro\Api\Runtime\Client\Endpoint
{
    use \Em411\Allegro\Api\Runtime\Client\EndpointTrait;
    protected $commandId;

    /**
     * Use this resource to get shipment creation status. Read more: <a href="../../tutorials/jak-zarzadzac-przesylkami-przez-wysylam-z-allegro-LRVjK7K21sY#jak-sprawdzic-status-utworzenia-paczki" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-parcels-via-ship-with-allegro-ZM9YAyGKWTV#how-to-check-the-creation-status-of-a-shipment" target="_blank">EN</a>.
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
        return str_replace(['{commandId}'], [$this->commandId], '/shipment-management/shipments/create-commands/{commandId}');
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
     * @return \Em411\Allegro\Api\Model\CreateShipmentCommandStatusDto|null
     *
     * @throws \Em411\Allegro\Api\Exception\GetShipmentCreationStatusBadRequestException
     * @throws \Em411\Allegro\Api\Exception\GetShipmentCreationStatusUnauthorizedException
     * @throws \Em411\Allegro\Api\Exception\GetShipmentCreationStatusForbiddenException
     * @throws \Em411\Allegro\Api\Exception\GetShipmentCreationStatusNotFoundException
     * @throws \Em411\Allegro\Api\Exception\GetShipmentCreationStatusGatewayTimeoutException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ((null === $contentType) === false && (200 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            return $serializer->deserialize($body, 'Em411\Allegro\Api\Model\CreateShipmentCommandStatusDto', 'json');
        }
        if ((null === $contentType) === false && (400 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            throw new \Em411\Allegro\Api\Exception\GetShipmentCreationStatusBadRequestException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\ShipmentManagementShipmentsCreateCommandsCommandIdGetResponse400', 'json'), $response);
        }
        if ((null === $contentType) === false && (401 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            throw new \Em411\Allegro\Api\Exception\GetShipmentCreationStatusUnauthorizedException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\AuthError', 'json'), $response);
        }
        if ((null === $contentType) === false && (403 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            throw new \Em411\Allegro\Api\Exception\GetShipmentCreationStatusForbiddenException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\ShipmentManagementShipmentsCreateCommandsCommandIdGetResponse403', 'json'), $response);
        }
        if (404 === $status) {
            throw new \Em411\Allegro\Api\Exception\GetShipmentCreationStatusNotFoundException($response);
        }
        if ((null === $contentType) === false && (504 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            throw new \Em411\Allegro\Api\Exception\GetShipmentCreationStatusGatewayTimeoutException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\ShipmentManagementShipmentsCreateCommandsCommandIdGetResponse504', 'json'), $response);
        }
    }
}
