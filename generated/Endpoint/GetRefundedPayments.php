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

class GetRefundedPayments extends \Em411\Allegro\Api\Runtime\Client\BaseEndpoint implements \Em411\Allegro\Api\Runtime\Client\Endpoint
{
    use \Em411\Allegro\Api\Runtime\Client\EndpointTrait;

    /**
     * Get a list of refunded payments. Read more: <a href="../../tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#jak-pobrac-liste-zwrotow-platnosci" target="_blank">PL</a> / <a href="../../tutorials/process-orders-PgPMlWDr8Cv#how-to-retrieve-a-list-of-refunded-payment" target="_blank">EN</a>.
     *
     * @param array{
     *    "limit"?: int, //Number of returned operations.
     *    "offset"?: int, //Index of the first returned payment operation from all search results.
     *    "id"?: string, //ID of the refund.
     *    "payment.id"?: string, //ID of the payment.
     *    "order.id"?: string, //ID of the order.
     *    "occurredAt.gte"?: string, //Minimum date and time when the refund occurred provided in ISO 8601 format.
     *    "occurredAt.lte"?: string, //Maximum date and time when the refund occurred provided in ISO 8601 format.
     *    "status"?: array, //Current status of payment refund.
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
        return '/payments/refunds';
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
        $optionsResolver->setDefined(['limit', 'offset', 'id', 'payment.id', 'order.id', 'occurredAt.gte', 'occurredAt.lte', 'status']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['limit' => 50, 'offset' => 0]);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        $optionsResolver->addAllowedTypes('offset', ['int']);
        $optionsResolver->addAllowedTypes('id', ['string']);
        $optionsResolver->addAllowedTypes('payment.id', ['string']);
        $optionsResolver->addAllowedTypes('order.id', ['string']);
        $optionsResolver->addAllowedTypes('occurredAt.gte', ['string']);
        $optionsResolver->addAllowedTypes('occurredAt.lte', ['string']);
        $optionsResolver->addAllowedTypes('status', ['array']);

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
        return ['status' => ['style' => 'form', 'explode' => true]];
    }

    /**
     * @return \Em411\Allegro\Api\Model\PaymentsRefundsGetResponse200|null
     *
     * @throws \Em411\Allegro\Api\Exception\GetRefundedPaymentsUnauthorizedException
     * @throws \Em411\Allegro\Api\Exception\GetRefundedPaymentsForbiddenException
     * @throws \Em411\Allegro\Api\Exception\GetRefundedPaymentsUnprocessableEntityException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ((null === $contentType) === false && (200 === $status && false !== stripos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            return $serializer->deserialize($body, 'Em411\Allegro\Api\Model\PaymentsRefundsGetResponse200', 'json');
        }
        if ((null === $contentType) === false && (401 === $status && false !== stripos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            throw new \Em411\Allegro\Api\Exception\GetRefundedPaymentsUnauthorizedException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\AuthError', 'json'), $response);
        }
        if ((null === $contentType) === false && (403 === $status && false !== stripos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            throw new \Em411\Allegro\Api\Exception\GetRefundedPaymentsForbiddenException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\PaymentsRefundsGetResponse403', 'json'), $response);
        }
        if ((null === $contentType) === false && (422 === $status && false !== stripos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            throw new \Em411\Allegro\Api\Exception\GetRefundedPaymentsUnprocessableEntityException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\ErrorsHolder', 'json'), $response);
        }
    }
}
