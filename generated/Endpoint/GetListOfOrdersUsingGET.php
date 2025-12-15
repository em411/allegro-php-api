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
     * @param array $queryParameters {
     *
     * @var int    $offset index of first returned checkout-form from all search results
     * @var int    $limit maximum number of checkout-forms in response
     * @var string $status Specify status value that checkout-forms must have to be included in the output. Allowed values are:
     *             `BOUGHT`: purchase without checkout form filled in.
     *             `FILLED_IN`: checkout form filled in but payment is not completed yet so data could still change.
     *             `READY_FOR_PROCESSING`: payment completed. Purchase is ready for processing.
     *             `CANCELLED`: purchase cancelled by buyer.
     * @var string $fulfillment.status Specify seller status value that checkout-forms must have to be included in the output. Allowed values are:
     *             `NEW`
     *             `PROCESSING`
     *             `READY_FOR_SHIPMENT`
     *             `READY_FOR_PICKUP`
     *             `SENT`
     *             `PICKED_UP`
     *             `CANCELLED`
     *             `SUSPENDED`
     *             `RETURNED`.
     * @var string $fulfillment.provider.id Specify filter for order management provider. Allowed values are:
     *             `SELLER`: for orders managed directly by seller
     *             `ALLEGRO`: for orders managed by Allegro warehouse (One Fulfillment).
     * @var string $fulfillment.shipmentSummary.lineItemsSent Specify filter for line items sending status. Allowed values are:
     *             `NONE`: none of line items have tracking number specified
     *             `SOME`: some of line items have tracking number specified
     *             `ALL`: all of line items have tracking number specified.
     * @var string $lineItems.boughtAt.lte Latest line item bought date. The upper bound of date time range from which checkout forms will be taken.
     * @var string $lineItems.boughtAt.gte Latest line item bought date. The lower bound of date time range from which checkout forms will be taken.
     * @var string $payment.id Find checkout-forms having specified payment id.
     * @var string $surcharges.id Find checkout-forms having specified surcharge id.
     * @var string $delivery.method.id Find checkout-forms having specified delivery method id.
     * @var string $buyer.login Find checkout-forms having specified buyer login.
     * @var string $marketplace.id Find checkout-forms of orders purchased on specified marketplace.
     * @var string $updatedAt.lte Checkout form last modification date. The upper bound of date time range from which checkout forms will be taken.
     * @var string $updatedAt.gte Checkout form last modification date. The lower bound of date time range from which checkout forms will be taken.
     * @var string $sort The results' sorting order. No prefix in the value means ascending order. `-` prefix means descending order. If you don't provide the sort parameter, the list is sorted by line item boughtAt date, descending.
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $Accept-Language Expected language of messages.
     *             }
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
        if ((null === $contentType) === false && (200 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
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
