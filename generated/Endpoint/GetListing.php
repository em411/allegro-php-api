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

class GetListing extends \Em411\Allegro\Api\Runtime\Client\BaseEndpoint implements \Em411\Allegro\Api\Runtime\Client\Endpoint
{
    use \Em411\Allegro\Api\Runtime\Client\EndpointTrait;

    /**
     * <a href="../../listing/" target="_blank">Access for verified applications only</a>. Use this resource to get a list of offers based on the provided query parameters. At least one of: phrase, seller.id or category.id is required. Additional available parameters vary depending on category.id. The parameters are defined in the filters entity.
     * Changing the marketplace, country of delivery, currency or language may impact the availability of offers and filters. Note that requests for closed offers may be limited. This resource is rate limited to 270 requests per second.
     *
     * Read more: <a href="../../tutorials/jak-wyszukiwac-przegladac-oferty-ZM9YAKAwgfk" target="_blank">PL</a> / <a href="../../tutorials/how-to-search-and-browse-offers-XxWm2ykMYHl" target="_blank">EN</a>.
     *
     * @param array $queryParameters {
     *
     * @var string $category.id The identifier of the category, where you want to search for offers.
     * @var string $phrase The search phrase. The phrase is searched in different fields of the offers depending on the value of the `searchMode` parameter.
     * @var string $seller.id The identifier of a seller, to limit the results to offers from this seller. May be provided more than once. Should not be provided when seller.login is given.
     * @var string $seller.login The login of a seller, to limit the results to offers from this seller. May be provided more than once. Should not be provided when seller.id is given.
     * @var string $marketplaceId Id of a marketplace where offers are visible.
     *Acceptable values* : `allegro-pl`, `allegro-cz`, `allegro-sk`, `allegro-hu`.
     * @var string $shipping.country Expected language of messages.
     * @var string $currency Currency of the offer prices.
     *Default value* : depends on marketplace, for allegro-pl: `PLN`, for allegro-cz: `CZK`, for allegro-sk: `EUR`.
     * Check endpoint GET /marketplaces for acceptable currency values.
     * @var string $searchMode Defines where the given phrase should be searched in. Allowed values:
     *
     * - *REGULAR* - searching for a phrase in the title,
     * - *CLOSED* - searching for a phrase in the title of closed offers. Available only for `allegro-pl` marketplace.
     * @var int    $offset Index of the first returned offer from all search results. Max offset is `600 - <limit>`.
     * @var int    $limit the maximum number of offers in a response
     * @var string $sort Search results sorting order. `+` or no prefix in the value means ascending order. `-` prefix means descending order.
     * @var string $include Specify parts of the response that should be included in the output. Allowed values are the names of top level entities and *all* as an alias to all entities. By default, all top level entities are included. Use `-` prefix to exclude an entity.
     *             Example:
     *             `include=-all&include=filters&include=sort` - returns only filters and sort entities.
     * @var bool   $fallback defines the behaviour of the search engine when no results with exact phrase match are found:
     *
     * - *true* - related (not exact) results are returned,
     * - *false* - empty results are returned
     * @var string $Dynamic filters You can filter and customize your search results to find exactly what you need by applying filters ids and their dictionary values to query according to the flowing pattern: id=value. When the filter definition looks like:
     *             ````
     *             {
     *             "id": "parameter.11323",
     *             "type": "MULTI",
     *             "name": "Stan",
     *             "values": [{
     *             "value": "11323_1",
     *             "name": "nowe",
     *             "count": 21,
     *             "selected": false
     *             },
     *             {
     *             "value": "11323_2",
     *             "name": "używane",
     *             "count": 157,
     *             "selected": false
     *             },
     *             {
     *             "value": "11323_238066",
     *             "name": "po zwrocie",
     *             "count": 1,
     *             "selected": false
     *             }
     *             ]
     *             }
     *             ````
     *             You can use 'Stan' filter to query results, i.e.:
     *             `parameter.11323=11323_1` for "nowe"
     *             `parameter.11323=11323_2` for "używane"
     *             `parameter.11323=11323_238066` for "po zwrocie".
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $Accept-Language Limits offers to the only translated to specified language. Also expected language of messages.
     *Default value* : depends on marketplace, for allegro-pl: `pl-PL`, for allegro-cz: `cs-CZ`, for allegro-sk: `sk-SK`.
     * Check endpoint GET /marketplaces for acceptable language values.
     * }
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
        return '/offers/listing';
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
        return ['bearer-token-for-user', 'bearer-token-for-application'];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['category.id', 'phrase', 'seller.id', 'seller.login', 'marketplaceId', 'shipping.country', 'currency', 'searchMode', 'offset', 'limit', 'sort', 'include', 'fallback', 'Dynamic filters']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['marketplaceId' => 'allegro-pl', 'searchMode' => 'REGULAR', 'offset' => 0, 'limit' => 60, 'sort' => 'relevance', 'fallback' => true]);
        $optionsResolver->addAllowedTypes('category.id', ['string']);
        $optionsResolver->addAllowedTypes('phrase', ['string']);
        $optionsResolver->addAllowedTypes('seller.id', ['string']);
        $optionsResolver->addAllowedTypes('seller.login', ['string']);
        $optionsResolver->addAllowedTypes('marketplaceId', ['string']);
        $optionsResolver->addAllowedTypes('shipping.country', ['string']);
        $optionsResolver->addAllowedTypes('currency', ['string']);
        $optionsResolver->addAllowedTypes('searchMode', ['string']);
        $optionsResolver->addAllowedTypes('offset', ['int']);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        $optionsResolver->addAllowedTypes('sort', ['string']);
        $optionsResolver->addAllowedTypes('include', ['string']);
        $optionsResolver->addAllowedTypes('fallback', ['bool']);
        $optionsResolver->addAllowedTypes('Dynamic filters', ['string']);

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

    /**
     * @return \Em411\Allegro\Api\Model\ListingResponse|null
     *
     * @throws \Em411\Allegro\Api\Exception\GetListingBadRequestException
     * @throws \Em411\Allegro\Api\Exception\GetListingForbiddenException
     * @throws \Em411\Allegro\Api\Exception\GetListingNotFoundException
     * @throws \Em411\Allegro\Api\Exception\GetListingNotAcceptableException
     * @throws \Em411\Allegro\Api\Exception\GetListingUnprocessableEntityException
     * @throws \Em411\Allegro\Api\Exception\GetListingTooManyRequestsException
     * @throws \Em411\Allegro\Api\Exception\GetListingInternalServerErrorException
     * @throws \Em411\Allegro\Api\Exception\GetListingBadGatewayException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ((null === $contentType) === false && (200 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            return $serializer->deserialize($body, 'Em411\Allegro\Api\Model\ListingResponse', 'json');
        }
        if ((null === $contentType) === false && (400 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            throw new \Em411\Allegro\Api\Exception\GetListingBadRequestException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\ErrorsHolder', 'json'), $response);
        }
        if ((null === $contentType) === false && (403 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            throw new \Em411\Allegro\Api\Exception\GetListingForbiddenException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\ErrorsHolder', 'json'), $response);
        }
        if ((null === $contentType) === false && (404 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            throw new \Em411\Allegro\Api\Exception\GetListingNotFoundException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\ErrorsHolder', 'json'), $response);
        }
        if ((null === $contentType) === false && (406 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            throw new \Em411\Allegro\Api\Exception\GetListingNotAcceptableException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\ErrorsHolder', 'json'), $response);
        }
        if ((null === $contentType) === false && (422 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            throw new \Em411\Allegro\Api\Exception\GetListingUnprocessableEntityException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\ErrorsHolder', 'json'), $response);
        }
        if ((null === $contentType) === false && (429 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            throw new \Em411\Allegro\Api\Exception\GetListingTooManyRequestsException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\ErrorsHolder', 'json'), $response);
        }
        if ((null === $contentType) === false && (500 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            throw new \Em411\Allegro\Api\Exception\GetListingInternalServerErrorException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\ErrorsHolder', 'json'), $response);
        }
        if ((null === $contentType) === false && (502 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            throw new \Em411\Allegro\Api\Exception\GetListingBadGatewayException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\ErrorsHolder', 'json'), $response);
        }
    }
}
