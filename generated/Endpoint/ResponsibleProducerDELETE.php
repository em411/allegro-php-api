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

class ResponsibleProducerDELETE extends \Em411\Allegro\Api\Runtime\Client\BaseEndpoint implements \Em411\Allegro\Api\Runtime\Client\Endpoint
{
    use \Em411\Allegro\Api\Runtime\Client\EndpointTrait;
    protected $id;

    /**
     * Use this resource to delete a responsible producer created by you. The responsible producer can be deleted only if it is not assigned to any offer, otherwise the request is rejected and the responsible producer is not deleted. Read more: <a href="../../tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#dane-teleadresowe-producenta" target="_blank">PL</a> / <a href="../../tutorials/account-and-user-data-management-jn9vBjqjnsw#responsible-producers-contact-information" target="_blank">EN</a>.
     *
     * @param string $id responsible producer ID
     * @param array{
     *    "Accept": string, //Acceptable representation of the response.
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     */
    public function __construct(string $id, array $headerParameters = [])
    {
        $this->id = $id;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [rawurlencode($this->id)], '/sale/responsible-producers/{id}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    public function getAuthenticationScopes(): array
    {
        return ['bearer-token-for-user'];
    }

    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['Accept', 'Accept-Language']);
        $optionsResolver->setRequired(['Accept']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('Accept', ['string']);
        $optionsResolver->addAllowedTypes('Accept-Language', ['string']);

        return $optionsResolver;
    }

    /**
     * @throws \Em411\Allegro\Api\Exception\ResponsibleProducerDELETEUnauthorizedException
     * @throws \Em411\Allegro\Api\Exception\ResponsibleProducerDELETEForbiddenException
     * @throws \Em411\Allegro\Api\Exception\ResponsibleProducerDELETENotFoundException
     * @throws \Em411\Allegro\Api\Exception\ResponsibleProducerDELETEConflictException
     * @throws \Em411\Allegro\Api\Exception\ResponsibleProducerDELETEUnprocessableEntityException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (204 === $status) {
            return null;
        }
        if ((null === $contentType) === false && (401 === $status && false !== stripos(strtolower($contentType), 'application/json'))) {
            throw new \Em411\Allegro\Api\Exception\ResponsibleProducerDELETEUnauthorizedException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\AuthError', 'json'), $response);
        }
        if ((null === $contentType) === false && (403 === $status && false !== stripos(strtolower($contentType), 'application/json'))) {
            throw new \Em411\Allegro\Api\Exception\ResponsibleProducerDELETEForbiddenException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\ErrorsHolder', 'json'), $response);
        }
        if ((null === $contentType) === false && (404 === $status && false !== stripos(strtolower($contentType), 'application/json'))) {
            throw new \Em411\Allegro\Api\Exception\ResponsibleProducerDELETENotFoundException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\ErrorsHolder', 'json'), $response);
        }
        if ((null === $contentType) === false && (409 === $status && false !== stripos(strtolower($contentType), 'application/json'))) {
            throw new \Em411\Allegro\Api\Exception\ResponsibleProducerDELETEConflictException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\ErrorsHolder', 'json'), $response);
        }
        if ((null === $contentType) === false && (422 === $status && false !== stripos(strtolower($contentType), 'application/json'))) {
            throw new \Em411\Allegro\Api\Exception\ResponsibleProducerDELETEUnprocessableEntityException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\ErrorsHolder', 'json'), $response);
        }
    }
}
