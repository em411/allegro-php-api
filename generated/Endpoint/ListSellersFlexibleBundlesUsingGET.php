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

class ListSellersFlexibleBundlesUsingGET extends \Em411\Allegro\Api\Runtime\Client\BaseEndpoint implements \Em411\Allegro\Api\Runtime\Client\Endpoint
{
    use \Em411\Allegro\Api\Runtime\Client\EndpointTrait;

    /**
     * You can fetch page of seller's flexible bundles using this endpoint.
     * <br> Paging: <br> To move to next page, specify `page.id` parameter with value obtained in response from previous request. Number of offer bundles on single page can be specified using `limit` parameter.
     * <br> Filtering: <br> Offer bundles can be filtered to bundles which contain offer specified in `offer.id` parameter.
     *
     * @param array $queryParameters {
     *
     * @var int    $limit limit of bundles per page
     * @var string $offer.id Filter bundles which contains offer.
     * @var string $page.id ID of page which will be retrieved.
     *             }
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/sale/flexible-bundles';
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
        $optionsResolver->setDefined(['limit', 'offer.id', 'page.id']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['limit' => 20]);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        $optionsResolver->addAllowedTypes('offer.id', ['string']);
        $optionsResolver->addAllowedTypes('page.id', ['string']);

        return $optionsResolver;
    }

    /**
     * @return \Em411\Allegro\Api\Model\FlexibleBundlesListingDTO|null
     *
     * @throws \Em411\Allegro\Api\Exception\ListSellersFlexibleBundlesUsingGETBadRequestException
     * @throws \Em411\Allegro\Api\Exception\ListSellersFlexibleBundlesUsingGETUnauthorizedException
     * @throws \Em411\Allegro\Api\Exception\ListSellersFlexibleBundlesUsingGETForbiddenException
     * @throws \Em411\Allegro\Api\Exception\ListSellersFlexibleBundlesUsingGETUnprocessableEntityException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ((null === $contentType) === false && (200 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            return $serializer->deserialize($body, 'Em411\Allegro\Api\Model\FlexibleBundlesListingDTO', 'json');
        }
        if ((null === $contentType) === false && (400 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            throw new \Em411\Allegro\Api\Exception\ListSellersFlexibleBundlesUsingGETBadRequestException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\ErrorsHolder', 'json'), $response);
        }
        if ((null === $contentType) === false && (401 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            throw new \Em411\Allegro\Api\Exception\ListSellersFlexibleBundlesUsingGETUnauthorizedException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\AuthError', 'json'), $response);
        }
        if ((null === $contentType) === false && (403 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            throw new \Em411\Allegro\Api\Exception\ListSellersFlexibleBundlesUsingGETForbiddenException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\ErrorsHolder', 'json'), $response);
        }
        if ((null === $contentType) === false && (422 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            throw new \Em411\Allegro\Api\Exception\ListSellersFlexibleBundlesUsingGETUnprocessableEntityException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\ErrorsHolder', 'json'), $response);
        }
    }
}
