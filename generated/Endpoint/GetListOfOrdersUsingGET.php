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

class GetListOfOrdersUsingGET extends \Em411\Allegro\Api\Runtime\Client\BaseEndpoint implements \Em411\Allegro\Api\Runtime\Client\Endpoint
{
    use \Em411\Allegro\Api\Runtime\Client\EndpointTrait;

    /**
     * Use this resource to get an order list. Read more: <a href="../../tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#lista-zamowien" target="_blank">PL</a> / <a href="../../tutorials/process-orders-PgPMlWDr8Cv#order-list" target="_blank">EN</a>.
     *
     * @param array{
     *    "offset"?: int, //Index of first returned checkout-form from all search results.
     *    "limit"?: int, //Maximum number of checkout-forms in response.
     *    "status"?: string, //Specify status value that checkout-forms must have to be included in the output. Allowed values are:
     * `BOUGHT`: purchase without checkout form filled in.
     * `FILLED_IN`: checkout form filled in but payment is not completed yet so data could still change.
     * `READY_FOR_PROCESSING`: payment completed. Purchase is ready for processing.
     * `CANCELLED`: purchase cancelled by buyer.
     *    "fulfillment.status"?: string, //Specify seller status value that checkout-forms must have to be included in the output. Allowed values are:
     * `NEW`
     * `PROCESSING`
     * `READY_FOR_SHIPMENT`
     * `READY_FOR_PICKUP`
     * `SENT`
     * `PICKED_UP`
     * `CANCELLED`
     * `SUSPENDED`
     * `RETURNED`.
     *    "fulfillment.provider.id"?: string, //Specify filter for order management provider. Allowed values are:
     * `SELLER`: for orders managed directly by seller
     * `ALLEGRO`: for orders managed by Allegro warehouse (One Fulfillment).
     *    "fulfillment.shipmentSummary.lineItemsSent"?: string, //Specify filter for line items sending status. Allowed values are:
     * `NONE`: none of line items have tracking number specified
     * `SOME`: some of line items have tracking number specified
     * `ALL`: all of line items have tracking number specified.
     *    "lineItems.boughtAt.lte"?: string, //Latest line item bought date. The upper bound of date time range from which checkout forms will be taken.
     *    "lineItems.boughtAt.gte"?: string, //Latest line item bought date. The lower bound of date time range from which checkout forms will be taken.
     *    "payment.id"?: string, //Find checkout-forms having specified payment id.
     *    "surcharges.id"?: string, //Find checkout-forms having specified surcharge id.
     *    "delivery.method.id"?: string, //Find checkout-forms having specified delivery method id.
     *    "buyer.login"?: string, //Find checkout-forms having specified buyer login.
     *    "marketplace.id"?: string, //Find checkout-forms of orders purchased on specified marketplace.
     *    "updatedAt.lte"?: string, //Checkout form last modification date. The upper bound of date time range from which checkout forms will be taken.
     *    "updatedAt.gte"?: string, //Checkout form last modification date. The lower bound of date time range from which checkout forms will be taken.
     *    "sort"?: string, //The results' sorting order. No prefix in the value means ascending order. `-` prefix means descending order. If you don't provide the sort parameter, the list is sorted by line item boughtAt date, descending.
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
        return '/order/checkout-forms';
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

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['offset', 'limit', 'status', 'fulfillment.status', 'fulfillment.provider.id', 'fulfillment.shipmentSummary.lineItemsSent', 'lineItems.boughtAt.lte', 'lineItems.boughtAt.gte', 'payment.id', 'surcharges.id', 'delivery.method.id', 'buyer.login', 'marketplace.id', 'updatedAt.lte', 'updatedAt.gte', 'sort']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['offset' => 0, 'limit' => 100]);
        $optionsResolver->addAllowedTypes('offset', ['int']);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        $optionsResolver->addAllowedTypes('status', ['string']);
        $optionsResolver->addAllowedTypes('fulfillment.status', ['string']);
        $optionsResolver->addAllowedTypes('fulfillment.provider.id', ['string']);
        $optionsResolver->addAllowedTypes('fulfillment.shipmentSummary.lineItemsSent', ['string']);
        $optionsResolver->addAllowedTypes('lineItems.boughtAt.lte', ['string']);
        $optionsResolver->addAllowedTypes('lineItems.boughtAt.gte', ['string']);
        $optionsResolver->addAllowedTypes('payment.id', ['string']);
        $optionsResolver->addAllowedTypes('surcharges.id', ['string']);
        $optionsResolver->addAllowedTypes('delivery.method.id', ['string']);
        $optionsResolver->addAllowedTypes('buyer.login', ['string']);
        $optionsResolver->addAllowedTypes('marketplace.id', ['string']);
        $optionsResolver->addAllowedTypes('updatedAt.lte', ['string']);
        $optionsResolver->addAllowedTypes('updatedAt.gte', ['string']);
        $optionsResolver->addAllowedTypes('sort', ['string']);

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
     * @return \Em411\Allegro\Api\Model\CheckoutForms|null
     *
     * @throws \Em411\Allegro\Api\Exception\GetListOfOrdersUsingGETBadRequestException
     * @throws \Em411\Allegro\Api\Exception\GetListOfOrdersUsingGETUnauthorizedException
     * @throws \Em411\Allegro\Api\Exception\GetListOfOrdersUsingGETNotAcceptableException
     * @throws \Em411\Allegro\Api\Exception\GetListOfOrdersUsingGETUnprocessableEntityException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ((null === $contentType) === false && (200 === $status && false !== stripos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            return $serializer->deserialize($body, 'Em411\Allegro\Api\Model\CheckoutForms', 'json');
        }
        if (400 === $status) {
            throw new \Em411\Allegro\Api\Exception\GetListOfOrdersUsingGETBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Em411\Allegro\Api\Exception\GetListOfOrdersUsingGETUnauthorizedException($response);
        }
        if (406 === $status) {
            throw new \Em411\Allegro\Api\Exception\GetListOfOrdersUsingGETNotAcceptableException($response);
        }
        if (422 === $status) {
            throw new \Em411\Allegro\Api\Exception\GetListOfOrdersUsingGETUnprocessableEntityException($response);
        }
    }
}
