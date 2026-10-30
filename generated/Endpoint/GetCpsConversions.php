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

class GetCpsConversions extends \Em411\Allegro\Api\Runtime\Client\BaseEndpoint implements \Em411\Allegro\Api\Runtime\Client\Endpoint
{
    use \Em411\Allegro\Api\Runtime\Client\EndpointTrait;

    /**
     * Use this resource to find your CPS (Cost Per Sale) conversions for specific filters. The response contains a list of CPS conversions that correspond with the specified parameters. Read more: <a href="../../tutorials/afiliacja-0A1bPnwVwUq#jak-pobrac-informacje-o-konwersji-cps" target="_blank">PL</a> / <a href="../../tutorials/affiliation-8do60yLKPIq#how-to-retrieve-cps-conversion-information" target="_blank">EN</a>.
     *
     * @param array{
     *    "orderCreatedAt.gte"?: string, //The minimum date and time of order creation in ISO 8601 format.
     *    "orderCreatedAt.lte"?: string, //The maximum date and time of order creation in ISO 8601 format.
     *    "lastModifiedAt.gte"?: string, //The minimum date and time of the latest conversion modification in ISO 8601 format.
     *    "lastModifiedAt.lte"?: string, //The maximum date and time of the latest conversion modification in ISO 8601 format.
     *    "status"?: string, //Conversion status. The allowed values are:
     * CREATED
     * REJECTED
     * CONFIRMED.
     *    "offset"?: int, //The offset of elements in the response.
     *    "limit"?: int, //Maximum number of elements in response.
     *    "includePublisherUrlParameters"?: array, //Comma-separated keys of the ‘publisherUrlParameters’ map which will be included in the response. By default the map is empty.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     */
    public function __construct(array $queryParameters = [], array $headerParameters = [])
    {
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/affiliate/conversions/cps';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/vnd.allegro.beta.v1+json']];
    }

    public function getAuthenticationScopes(): array
    {
        return ['bearer-token-for-user'];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['orderCreatedAt.gte', 'orderCreatedAt.lte', 'lastModifiedAt.gte', 'lastModifiedAt.lte', 'status', 'offset', 'limit', 'includePublisherUrlParameters']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['offset' => 0, 'limit' => 1000]);
        $optionsResolver->addAllowedTypes('orderCreatedAt.gte', ['string']);
        $optionsResolver->addAllowedTypes('orderCreatedAt.lte', ['string']);
        $optionsResolver->addAllowedTypes('lastModifiedAt.gte', ['string']);
        $optionsResolver->addAllowedTypes('lastModifiedAt.lte', ['string']);
        $optionsResolver->addAllowedTypes('status', ['string']);
        $optionsResolver->addAllowedTypes('offset', ['int']);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        $optionsResolver->addAllowedTypes('includePublisherUrlParameters', ['array']);

        return $optionsResolver;
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

    protected function getQueryStyles(): array
    {
        return ['includePublisherUrlParameters' => ['style' => 'form', 'explode' => true]];
    }

    /**
     * @return \Em411\Allegro\Api\Model\CpsConversionResponse|null
     *
     * @throws \Em411\Allegro\Api\Exception\GetCpsConversionsBadRequestException
     * @throws \Em411\Allegro\Api\Exception\GetCpsConversionsUnauthorizedException
     * @throws \Em411\Allegro\Api\Exception\GetCpsConversionsForbiddenException
     * @throws \Em411\Allegro\Api\Exception\GetCpsConversionsUnprocessableEntityException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ((null === $contentType) === false && (200 === $status && false !== stripos(strtolower($contentType), 'application/vnd.allegro.beta.v1+json'))) {
            return $serializer->deserialize($body, 'Em411\Allegro\Api\Model\CpsConversionResponse', 'json');
        }
        if (400 === $status) {
            throw new \Em411\Allegro\Api\Exception\GetCpsConversionsBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Em411\Allegro\Api\Exception\GetCpsConversionsUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Em411\Allegro\Api\Exception\GetCpsConversionsForbiddenException($response);
        }
        if ((null === $contentType) === false && (422 === $status && false !== stripos(strtolower($contentType), 'application/vnd.allegro.beta.v1+json'))) {
            throw new \Em411\Allegro\Api\Exception\GetCpsConversionsUnprocessableEntityException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\ErrorsHolder', 'json'), $response);
        }
    }
}
