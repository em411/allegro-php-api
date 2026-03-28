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

class GetRefundDispositionsReport extends \Em411\Allegro\Api\Runtime\Client\BaseEndpoint implements \Em411\Allegro\Api\Runtime\Client\Endpoint
{
    use \Em411\Allegro\Api\Runtime\Client\EndpointTrait;

    /**
     * Use this resource to get refund dispositions for returns handled in One Fulfillment. The response contains data from the last 90 days only. The response contains both buyer returns and operational returns. When there is no matching disposition, the `report` array is empty.
     *
     * @param array $queryParameters {
     *
     * @var string $createdAt.gte Date of the return in ISO 8601 format to search by greater or equal.
     * @var string $createdAt.lte Date of the return in ISO 8601 format to search by lower or equal.
     * @var int    $limit maximum number of elements in response
     * @var int    $offset The offset of elements in the response.
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
        return '/fulfillment/returns/refund-dispositions';
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
        $optionsResolver->setDefined(['createdAt.gte', 'createdAt.lte', 'limit', 'offset']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['limit' => 100, 'offset' => 0]);
        $optionsResolver->addAllowedTypes('createdAt.gte', ['string']);
        $optionsResolver->addAllowedTypes('createdAt.lte', ['string']);
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

    /**
     * @return \Em411\Allegro\Api\Model\FulfillmentRefundDispositionsResponse|null
     *
     * @throws \Em411\Allegro\Api\Exception\GetRefundDispositionsReportUnauthorizedException
     * @throws \Em411\Allegro\Api\Exception\GetRefundDispositionsReportForbiddenException
     * @throws \Em411\Allegro\Api\Exception\GetRefundDispositionsReportNotAcceptableException
     * @throws \Em411\Allegro\Api\Exception\GetRefundDispositionsReportUnprocessableEntityException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ((null === $contentType) === false && (200 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            return $serializer->deserialize($body, 'Em411\Allegro\Api\Model\FulfillmentRefundDispositionsResponse', 'json');
        }
        if (401 === $status) {
            throw new \Em411\Allegro\Api\Exception\GetRefundDispositionsReportUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Em411\Allegro\Api\Exception\GetRefundDispositionsReportForbiddenException($response);
        }
        if ((null === $contentType) === false && (406 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            throw new \Em411\Allegro\Api\Exception\GetRefundDispositionsReportNotAcceptableException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\FulfillmentRefundDispositionsValidationErrorResponse', 'json'), $response);
        }
        if ((null === $contentType) === false && (422 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            throw new \Em411\Allegro\Api\Exception\GetRefundDispositionsReportUnprocessableEntityException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\FulfillmentRefundDispositionsValidationErrorResponse', 'json'), $response);
        }
    }
}
