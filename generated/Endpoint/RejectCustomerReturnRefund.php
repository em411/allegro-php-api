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

class RejectCustomerReturnRefund extends \Em411\Allegro\Api\Runtime\Client\BaseEndpoint implements \Em411\Allegro\Api\Runtime\Client\Endpoint
{
    use \Em411\Allegro\Api\Runtime\Client\EndpointTrait;
    protected $customerReturnId;

    /**
     * Use this resource to reject customer return refund with provided reason. Read more: <a href="../../tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#jak-odmowic-zwrotu-wplaty" target="_blank">PL</a> / <a href="../../tutorials/process-orders-PgPMlWDr8Cv#how-to-reject-customer-return-refund" target="_blank">EN</a>.
     *
     * @param string $customerReturnId id of the customer return
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     */
    public function __construct(string $customerReturnId, ?\Em411\Allegro\Api\Model\CustomerReturnRefundRejectionRequest $requestBody = null, array $headerParameters = [])
    {
        $this->customerReturnId = $customerReturnId;
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{customerReturnId}'], [rawurlencode($this->customerReturnId)], '/order/customer-returns/{customerReturnId}/rejection');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Em411\Allegro\Api\Model\CustomerReturnRefundRejectionRequest) {
            return [['Content-Type' => ['application/vnd.allegro.beta.v1+json']], \Em411\Allegro\Api\Runtime\Client\JsonPayload::encode($serializer, $this->body)];
        }

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
     * @return \Em411\Allegro\Api\Model\CustomerReturn|null
     *
     * @throws \Em411\Allegro\Api\Exception\RejectCustomerReturnRefundBadRequestException
     * @throws \Em411\Allegro\Api\Exception\RejectCustomerReturnRefundUnauthorizedException
     * @throws \Em411\Allegro\Api\Exception\RejectCustomerReturnRefundForbiddenException
     * @throws \Em411\Allegro\Api\Exception\RejectCustomerReturnRefundNotAcceptableException
     * @throws \Em411\Allegro\Api\Exception\RejectCustomerReturnRefundUnprocessableEntityException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ((null === $contentType) === false && (200 === $status && false !== stripos(strtolower($contentType), 'application/vnd.allegro.beta.v1+json'))) {
            return $serializer->deserialize($body, 'Em411\Allegro\Api\Model\CustomerReturn', 'json');
        }
        if ((null === $contentType) === false && (400 === $status && false !== stripos(strtolower($contentType), 'application/vnd.allegro.beta.v1+json'))) {
            throw new \Em411\Allegro\Api\Exception\RejectCustomerReturnRefundBadRequestException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\ErrorsHolder', 'json'), $response);
        }
        if ((null === $contentType) === false && (401 === $status && false !== stripos(strtolower($contentType), 'application/vnd.allegro.beta.v1+json'))) {
            throw new \Em411\Allegro\Api\Exception\RejectCustomerReturnRefundUnauthorizedException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\AuthError', 'json'), $response);
        }
        if ((null === $contentType) === false && (403 === $status && false !== stripos(strtolower($contentType), 'application/vnd.allegro.beta.v1+json'))) {
            throw new \Em411\Allegro\Api\Exception\RejectCustomerReturnRefundForbiddenException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\ErrorsHolder', 'json'), $response);
        }
        if ((null === $contentType) === false && (406 === $status && false !== stripos(strtolower($contentType), 'application/vnd.allegro.beta.v1+json'))) {
            throw new \Em411\Allegro\Api\Exception\RejectCustomerReturnRefundNotAcceptableException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\ErrorsHolder', 'json'), $response);
        }
        if ((null === $contentType) === false && (422 === $status && false !== stripos(strtolower($contentType), 'application/vnd.allegro.beta.v1+json'))) {
            throw new \Em411\Allegro\Api\Exception\RejectCustomerReturnRefundUnprocessableEntityException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\ErrorsHolder', 'json'), $response);
        }
    }
}
