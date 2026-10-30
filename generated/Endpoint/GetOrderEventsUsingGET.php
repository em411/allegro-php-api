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

class GetOrderEventsUsingGET extends \Em411\Allegro\Api\Runtime\Client\BaseEndpoint implements \Em411\Allegro\Api\Runtime\Client\Endpoint
{
    use \Em411\Allegro\Api\Runtime\Client\EndpointTrait;

    /**
     * Use this resource to return events that allow you to monitor actions which clients perform, i.e. making a purchase, filling in the checkout form (FOD), finishing payment process, making a surcharge. Read more: <a href="../../tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#dziennik-zdarzen" target="_blank">PL</a> / <a href="../../tutorials/process-orders-PgPMlWDr8Cv#event-log" target="_blank">EN</a>.
     *
     * @param array{
     *    "from"?: string, //You can use the event ID to retrieve subsequent chunks of events.
     *    "type"?: array, //Specify array of event types for filtering. Allowed values are:
     * `BOUGHT`: purchase without checkout form filled in
     * `FILLED_IN`: checkout form filled in but payment is not completed yet so data could still change
     * `READY_FOR_PROCESSING`: payment completed. Purchase is ready for processing
     * `BUYER_CANCELLED`: purchase was cancelled by buyer
     * `FULFILLMENT_STATUS_CHANGED`: fulfillment status changed
     * `AUTO_CANCELLED`: purchase was cancelled automatically by Allegro.
     *    "limit"?: int, //The maximum number of events returned in the response.
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
        return '/order/events';
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
        $optionsResolver->setDefined(['from', 'type', 'limit']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['limit' => 100]);
        $optionsResolver->addAllowedTypes('from', ['string']);
        $optionsResolver->addAllowedTypes('type', ['array']);
        $optionsResolver->addAllowedTypes('limit', ['int']);

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
        return ['type' => ['style' => 'form', 'explode' => true]];
    }

    /**
     * @return \Em411\Allegro\Api\Model\OrderEventsList|null
     *
     * @throws \Em411\Allegro\Api\Exception\GetOrderEventsUsingGETUnauthorizedException
     * @throws \Em411\Allegro\Api\Exception\GetOrderEventsUsingGETForbiddenException
     * @throws \Em411\Allegro\Api\Exception\GetOrderEventsUsingGETUnprocessableEntityException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ((null === $contentType) === false && (200 === $status && false !== stripos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            return $serializer->deserialize($body, 'Em411\Allegro\Api\Model\OrderEventsList', 'json');
        }
        if (401 === $status) {
            throw new \Em411\Allegro\Api\Exception\GetOrderEventsUsingGETUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Em411\Allegro\Api\Exception\GetOrderEventsUsingGETForbiddenException($response);
        }
        if (422 === $status) {
            throw new \Em411\Allegro\Api\Exception\GetOrderEventsUsingGETUnprocessableEntityException($response);
        }
    }
}
