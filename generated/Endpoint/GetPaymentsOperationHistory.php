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

class GetPaymentsOperationHistory extends \Em411\Allegro\Api\Runtime\Client\BaseEndpoint implements \Em411\Allegro\Api\Runtime\Client\Endpoint
{
    use \Em411\Allegro\Api\Runtime\Client\EndpointTrait;

    /**
     * Use this endpoint to get the list of the seller payment operations. Read more: <a href="../../tutorials/jak-sprawdzic-oplaty-nn9DOL5PASX#historia-operacji-platniczych" target="_blank">PL</a> / <a href="../../tutorials/how-to-check-the-fees-3An6Wame3Um#payment-operations" target="_blank">EN</a>.
     *
     * @param array{
     *    "wallet.type"?: string, //Type of the wallet: * AVAILABLE - operations available for payout. * WAITING - operations temporarily suspended for payout.
     *    "wallet.paymentOperator"?: string, //Payment operator: * PAYU - operations processed by PAYU operator. * P24 - operations processed by PRZELEWY24 operator. * AF - operations processed by Allegro Finance operator. * AF_P24 - operations processed by Allegro Finance with PRZELEWY24. * AF_PAYU - operations processed by Allegro Finance with PAYU.
     *    "payment.id"?: string, //The payment ID.
     *    "participant.login"?: string, //Login of the participant. In case of REFUND_INCREASE operation this is the login of the seller, in other cases, of the buyer.
     *    "occurredAt.gte"?: string, //The minimum date and time of operation occurrence in ISO 8601 format.
     *    "occurredAt.lte"?: string, //The maximum date and time of operation occurrence in ISO 8601 format.
     *    "group"?: array, //Group of operation types: * INCOME - CONTRIBUTION, SURCHARGE, CORRECTION, DEDUCTION_INCREASE, LOAN_DEDUCTION_INCREASE, COMPENSATION, COMPENSATION_COD_INCREASE, TOP_UP, PAYOUT_SWEEP_INCREASE, PAYOUT_SWEEP_CANCEL_INCREASE. * OUTCOME - PAYOUT, PAYOUT_CANCEL, DEDUCTION_CHARGE, LOAN_DEDUCTION_CHARGE, COMPENSATION_COD_CHARGE, PAYOUT_SWEEP_CHARGE, PAYOUT_SWEEP_CANCEL_CHARGE. * REFUND - REFUND_CHARGE, REFUND_CANCEL, REFUND_INCREASE, CORRECTION, PROVIDER_REFUND_TRANSFER_CHARGE, PROVIDER_REFUND_TRANSFER_INCREASE. * BLOCKADES - BLOCKADE, BLOCKADE_RELEASE.
     *    "marketplaceId"?: string, //The marketplace ID where operation was made. When the parameter is omitted, searches for operations with all marketplaces. Note, that there are operations not assigned to any marketplace.
     *    "currency"?: string, //Currency of the operations.
     *    "limit"?: int, //Number of returned operations.
     *    "offset"?: int, //Index of the first returned payment operation from all search results.
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
        return '/payments/payment-operations';
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
        $optionsResolver->setDefined(['wallet.type', 'wallet.paymentOperator', 'payment.id', 'participant.login', 'occurredAt.gte', 'occurredAt.lte', 'group', 'marketplaceId', 'currency', 'limit', 'offset']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['wallet.type' => 'AVAILABLE', 'limit' => 50, 'offset' => 0]);
        $optionsResolver->addAllowedTypes('wallet.type', ['string']);
        $optionsResolver->addAllowedTypes('wallet.paymentOperator', ['string']);
        $optionsResolver->addAllowedTypes('payment.id', ['string']);
        $optionsResolver->addAllowedTypes('participant.login', ['string']);
        $optionsResolver->addAllowedTypes('occurredAt.gte', ['string']);
        $optionsResolver->addAllowedTypes('occurredAt.lte', ['string']);
        $optionsResolver->addAllowedTypes('group', ['array']);
        $optionsResolver->addAllowedTypes('marketplaceId', ['string']);
        $optionsResolver->addAllowedTypes('currency', ['string']);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        $optionsResolver->addAllowedTypes('offset', ['int']);

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
        return ['group' => ['style' => 'form', 'explode' => true]];
    }

    /**
     * @return \Em411\Allegro\Api\Model\PaymentOperations|null
     *
     * @throws \Em411\Allegro\Api\Exception\GetPaymentsOperationHistoryUnauthorizedException
     * @throws \Em411\Allegro\Api\Exception\GetPaymentsOperationHistoryUnprocessableEntityException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (401 === $status) {
            throw new \Em411\Allegro\Api\Exception\GetPaymentsOperationHistoryUnauthorizedException($response);
        }
        if ((null === $contentType) === false && (200 === $status && false !== stripos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            return $serializer->deserialize($body, 'Em411\Allegro\Api\Model\PaymentOperations', 'json');
        }
        if ((null === $contentType) === false && (422 === $status && false !== stripos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            throw new \Em411\Allegro\Api\Exception\GetPaymentsOperationHistoryUnprocessableEntityException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\ErrorsHolder', 'json'), $response);
        }
    }
}
