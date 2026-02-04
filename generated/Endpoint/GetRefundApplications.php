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

class GetRefundApplications extends \Em411\Allegro\Api\Runtime\Client\BaseEndpoint implements \Em411\Allegro\Api\Runtime\Client\Endpoint
{
    use \Em411\Allegro\Api\Runtime\Client\EndpointTrait;

    /**
     * Use this resource to get a list of refund applications based on the provided query parameters. Read more: <a href="../../tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#jak-pobrac-liste-utworzonych-wnioskow-o-rabat-transakcyjny" target="_blank">PL</a> / <a href="../../tutorials/process-orders-PgPMlWDr8Cv#how-to-retrieve-list-of-sale-commission-refunds" target="_blank">EN</a>.
     *
     * @param array $queryParameters {
     *
     * @var string $lineItem.offer.id ID of the offer associated with the refund application.
     * @var string $buyer.id Id of the buyer that made the purchase associated with the refund application.
     * @var string $status status of the refund application
     * @var int    $limit maximum number of returned refund applications in response
     * @var int    $offset Index of the first returned refund application from all search results.
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
        return '/order/refund-claims';
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
        $optionsResolver->setDefined(['lineItem.offer.id', 'buyer.id', 'status', 'limit', 'offset']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['limit' => 25, 'offset' => 0]);
        $optionsResolver->addAllowedTypes('lineItem.offer.id', ['string']);
        $optionsResolver->addAllowedTypes('buyer.id', ['string']);
        $optionsResolver->addAllowedTypes('status', ['string']);
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
     * @return \Em411\Allegro\Api\Model\OrderRefundClaimsGetResponse200|null
     *
     * @throws \Em411\Allegro\Api\Exception\GetRefundApplicationsBadRequestException
     * @throws \Em411\Allegro\Api\Exception\GetRefundApplicationsUnauthorizedException
     * @throws \Em411\Allegro\Api\Exception\GetRefundApplicationsForbiddenException
     * @throws \Em411\Allegro\Api\Exception\GetRefundApplicationsNotAcceptableException
     * @throws \Em411\Allegro\Api\Exception\GetRefundApplicationsUnprocessableEntityException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ((null === $contentType) === false && (200 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            return $serializer->deserialize($body, 'Em411\Allegro\Api\Model\OrderRefundClaimsGetResponse200', 'json');
        }
        if (400 === $status) {
            throw new \Em411\Allegro\Api\Exception\GetRefundApplicationsBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Em411\Allegro\Api\Exception\GetRefundApplicationsUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Em411\Allegro\Api\Exception\GetRefundApplicationsForbiddenException($response);
        }
        if (406 === $status) {
            throw new \Em411\Allegro\Api\Exception\GetRefundApplicationsNotAcceptableException($response);
        }
        if (422 === $status) {
            throw new \Em411\Allegro\Api\Exception\GetRefundApplicationsUnprocessableEntityException($response);
        }
    }
}
