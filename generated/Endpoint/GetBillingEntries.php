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

class GetBillingEntries extends \Em411\Allegro\Api\Runtime\Client\BaseEndpoint implements \Em411\Allegro\Api\Runtime\Client\Endpoint
{
    use \Em411\Allegro\Api\Runtime\Client\EndpointTrait;

    /**
     * Use this resource to get a list of billing entries. The billing entries are sorted in descending order (newest first) by the date on which they occurred. Read more: <a href="../../tutorials/jak-sprawdzic-oplaty-nn9DOL5PASX#historia-operacji-billingowych" target="_blank">PL</a> / <a href="../../tutorials/how-to-check-the-fees-3An6Wame3Um#billing-operations" target="_blank">EN</a>.
     *
     * @param array{
     *    "marketplaceId"?: string, //The marketplace ID where the operation took place. By default, this is the marketplace ID where the user is registered. **Note:** The Business marketplace is not separate - it defaults to the main marketplace for the given country.
     *    "occurredAt.gte"?: string, //Date from which billing entries are filtered. If occurredAt.lte is also set, occurredAt.gte cannot be later.
     *    "occurredAt.lte"?: string, //Date to which billing entries are filtered. If occurredAt.gte is also set, occurredAt.lte cannot be earlier.
     *    "type.id"?: array, //List of billing types by which billing entries are filtered.
     *    "offer.id"?: string, //Offer ID by which billing entries are filtered. Can be either a numeric ID or a UUID.
     *    "order.id"?: string, //Order UUID by which billing entries are filtered.
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
        return '/billing/billing-entries';
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
        $optionsResolver->setDefined(['marketplaceId', 'occurredAt.gte', 'occurredAt.lte', 'type.id', 'offer.id', 'order.id', 'limit', 'offset']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['limit' => 100, 'offset' => 0]);
        $optionsResolver->addAllowedTypes('marketplaceId', ['string']);
        $optionsResolver->addAllowedTypes('occurredAt.gte', ['string']);
        $optionsResolver->addAllowedTypes('occurredAt.lte', ['string']);
        $optionsResolver->addAllowedTypes('type.id', ['array']);
        $optionsResolver->addAllowedTypes('offer.id', ['string']);
        $optionsResolver->addAllowedTypes('order.id', ['string']);
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
        return ['type.id' => ['style' => 'form', 'explode' => true]];
    }

    /**
     * @return \Em411\Allegro\Api\Model\BillingEntries|null
     *
     * @throws \Em411\Allegro\Api\Exception\GetBillingEntriesUnauthorizedException
     * @throws \Em411\Allegro\Api\Exception\GetBillingEntriesNotAcceptableException
     * @throws \Em411\Allegro\Api\Exception\GetBillingEntriesUnprocessableEntityException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ((null === $contentType) === false && (200 === $status && false !== stripos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            return $serializer->deserialize($body, 'Em411\Allegro\Api\Model\BillingEntries', 'json');
        }
        if ((null === $contentType) === false && (401 === $status && false !== stripos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            throw new \Em411\Allegro\Api\Exception\GetBillingEntriesUnauthorizedException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\AuthError', 'json'), $response);
        }
        if ((null === $contentType) === false && (406 === $status && false !== stripos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            throw new \Em411\Allegro\Api\Exception\GetBillingEntriesNotAcceptableException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\ErrorsHolder', 'json'), $response);
        }
        if ((null === $contentType) === false && (422 === $status && false !== stripos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            throw new \Em411\Allegro\Api\Exception\GetBillingEntriesUnprocessableEntityException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\ErrorsHolder', 'json'), $response);
        }
    }
}
