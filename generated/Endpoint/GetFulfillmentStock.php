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

class GetFulfillmentStock extends \Em411\Allegro\Api\Runtime\Client\BaseEndpoint implements \Em411\Allegro\Api\Runtime\Client\Endpoint
{
    use \Em411\Allegro\Api\Runtime\Client\EndpointTrait;
    protected $accept;

    /**
     * Use this resource to get a list of the products belonging to the seller, which are in Allegro Warehouse. Read more: <a href="../../tutorials/one-fulfillment-by-allegro-0ADwgOLqWSw#jak-pobrac-aktualne-stany-magazynowe" target="_blank">PL</a> / <a href="../../tutorials/one-fulfillment-by-allegro-4R9dXyMPlc9#get-available-stock" target="_blank">EN</a>.
     *
     * @param array $queryParameters {
     *
     * @var int    $offset The offset of elements in the response. Ignored for text/csv content type.
     * @var int    $limit Maximum number of elements in response. Ignored for text/csv content type.
     * @var string $phrase filtering search results by product name
     * @var string $sort Defines how elements are sorted in response. Minus sign can be added to imply descending sort order. Ignored for text/csv content type.
     *             Possible values for the "sort" parameter:
     *             -available - sorting by quantity of available products (descending)
     *             available - sorting by quantity of available products (ascending)
     *             -unfulfillable - sorting by quantity of unfulfillable products (descending)
     *             unfulfillable - sorting by quantity of unfulfillable products (ascending)
     *             -name - sorting by product’s name (descending)
     *             name - sorting by product’s name (ascending)
     *             lastFourteenDaysSalesAverage - sorting by product last fourteen days average sales (ascending)
     *             -lastFourteenDaysSalesAverage - sorting by product last fourteen days average sales (descending)
     *             reserve - sorting by reserve.outOfStockIn field (ascending)
     *             -reserve - sorting by reserve.outOfStockIn field (descending)
     *             lastThirtyDaysSalesSum - sorting by product last month sum sales (ascending)
     *             -lastThirtyDaysSalesSum - sorting by product last month sum sales (descending)
     *             storageFee - sorting by storage fee (ascending). The order by fee status is: NOT_APPLICABLE, then CHARGED ordered by amountGross ascending.
     *             -storageFee - sorting by storage fee (descending). The order by fee status is: CHARGED ordered by amountGross descending, then NOT_APPLICABLE.
     * @var string $productId Filtering search results by fulfillment product identifier. Ignored for text/csv content type.
     * @var array  $productAvailability filtering search results by availability
     * @var string $productStatus filtering search results by status
     * @var string $asnStatus Filtering search results by ASN status. Following values are allowed: SUBMITTED - Advanced Ship Notice document has been submitted and it contains a particular product. Only the products that have ASN with products on it are returned. NOT_FOUND - Advanced Ship Notice that contains a particular product was not found. It has not been submitted, may be expired, or products have already been delivered to the warehouse. Only the products that don't have related ASN with products on it are returned.
     * @var int    $outOfStockInFrom filter by products with outOfStockIn greater than or equal
     * @var int    $outOfStockInTo Filter by products with outOfStockIn less than or equal.
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $Accept-Language Expected language of messages.
     *             }
     *
     * @param array $accept Accept content header application/vnd.allegro.public.v1+json|text/csv|application/json
     */
    public function __construct(array $queryParameters = [], array $headerParameters = [], array $accept = [])
    {
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
        $this->accept = $accept;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/fulfillment/stock';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['application/vnd.allegro.public.v1+json', 'text/csv', 'application/json']];
        }

        return $this->accept;
    }

    public function getAuthenticationScopes(): array
    {
        return ['bearer-token-for-user'];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['offset', 'limit', 'phrase', 'sort', 'productId', 'productAvailability', 'productStatus', 'asnStatus', 'outOfStockInFrom', 'outOfStockInTo']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['offset' => 0, 'limit' => 50, 'sort' => 'name']);
        $optionsResolver->addAllowedTypes('offset', ['int']);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        $optionsResolver->addAllowedTypes('phrase', ['string']);
        $optionsResolver->addAllowedTypes('sort', ['string']);
        $optionsResolver->addAllowedTypes('productId', ['string']);
        $optionsResolver->addAllowedTypes('productAvailability', ['array']);
        $optionsResolver->addAllowedTypes('productStatus', ['string']);
        $optionsResolver->addAllowedTypes('asnStatus', ['string']);
        $optionsResolver->addAllowedTypes('outOfStockInFrom', ['int']);
        $optionsResolver->addAllowedTypes('outOfStockInTo', ['int']);

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
     * @return \Em411\Allegro\Api\Model\StockProductList|null
     *
     * @throws \Em411\Allegro\Api\Exception\GetFulfillmentStockUnauthorizedException
     * @throws \Em411\Allegro\Api\Exception\GetFulfillmentStockForbiddenException
     * @throws \Em411\Allegro\Api\Exception\GetFulfillmentStockUnprocessableEntityException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ((null === $contentType) === false && (200 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            return $serializer->deserialize($body, 'Em411\Allegro\Api\Model\StockProductList', 'json');
        }
        if (401 === $status) {
            throw new \Em411\Allegro\Api\Exception\GetFulfillmentStockUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Em411\Allegro\Api\Exception\GetFulfillmentStockForbiddenException($response);
        }
        if ((null === $contentType) === false && (422 === $status && false !== mb_strpos(strtolower($contentType), 'application/json'))) {
            throw new \Em411\Allegro\Api\Exception\GetFulfillmentStockUnprocessableEntityException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\ErrorsHolder', 'json'), $response);
        }
    }
}
