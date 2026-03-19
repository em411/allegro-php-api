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

class BatchOfferModificationUsingPOST extends \Em411\Allegro\Api\Runtime\Client\BaseEndpoint implements \Em411\Allegro\Api\Runtime\Client\Endpoint
{
    use \Em411\Allegro\Api\Runtime\Client\EndpointTrait;

    /**
     * Bulk price and stock modification. Contrary to standard batch price or stock modification, it lets you modify both price and stock modification across multiple offers, or within the same offer but in a separate modification unit. <br> Change price and stock of offers. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#cena-i-liczba-przedmiotow" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#price-and-stock" target="_blank">EN</a>. <br> This resource is rate limited to 150 000 offer changes per hour or 9000 offer changes per minute - limit applies to a single user of the application.
     *
     * @param array $headerParameters {
     *
     * @var string $Accept-Language Expected language of messages.
     *             }
     */
    public function __construct(?\Em411\Allegro\Api\Model\OfferBulkChangeCommand $requestBody = null, array $headerParameters = [])
    {
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/sale/offer-bulk-modification-commands';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Em411\Allegro\Api\Model\OfferBulkChangeCommand) {
            return [['Content-Type' => ['application/vnd.allegro.beta.v1+json']], $serializer->serialize($this->body, 'json')];
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
     * @return \Em411\Allegro\Api\Model\GeneralReport|null
     *
     * @throws \Em411\Allegro\Api\Exception\BatchOfferModificationUsingPOSTBadRequestException
     * @throws \Em411\Allegro\Api\Exception\BatchOfferModificationUsingPOSTUnauthorizedException
     * @throws \Em411\Allegro\Api\Exception\BatchOfferModificationUsingPOSTConflictException
     * @throws \Em411\Allegro\Api\Exception\BatchOfferModificationUsingPOSTUnprocessableEntityException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ((null === $contentType) === false && (201 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.allegro.beta.v1+json'))) {
            return $serializer->deserialize($body, 'Em411\Allegro\Api\Model\GeneralReport', 'json');
        }
        if (400 === $status) {
            throw new \Em411\Allegro\Api\Exception\BatchOfferModificationUsingPOSTBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Em411\Allegro\Api\Exception\BatchOfferModificationUsingPOSTUnauthorizedException($response);
        }
        if (409 === $status) {
            throw new \Em411\Allegro\Api\Exception\BatchOfferModificationUsingPOSTConflictException($response);
        }
        if (422 === $status) {
            throw new \Em411\Allegro\Api\Exception\BatchOfferModificationUsingPOSTUnprocessableEntityException($response);
        }
    }
}
