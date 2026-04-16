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

class GetPublicSellerListingUsingGET1 extends \Em411\Allegro\Api\Runtime\Client\BaseEndpoint implements \Em411\Allegro\Api\Runtime\Client\Endpoint
{
    use \Em411\Allegro\Api\Runtime\Client\EndpointTrait;
    protected $accept;

    /**
     * Use this resource to get the seller's return policies. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-pobrac-warunki-zwrotow-przypisane-do-konta" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-retrieve-return-policies-assigned-to-the-account" target="_blank">EN</a>.
     *
     * @param array $queryParameters {
     *
     * @var int $limit the limit of elements in the response
     * @var int $offset The offset of elements in the response.
     *          }
     *
     * @param array $headerParameters {
     *
     * @var string $Accept-Language Expected language of messages.
     *             }
     *
     * @param array $accept Accept content header application/vnd.allegro.public.v1+json|application/vnd.allegro.public.v2+json
     */
    public function __construct(array $queryParameters = [], array $headerParameters = [], array $accept = [])
    {
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
        $this->accept = $accept;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/after-sales-service-conditions/return-policies';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['application/vnd.allegro.public.v1+json', 'application/vnd.allegro.public.v2+json']];
        }

        return $this->accept;
    }

    public function getAuthenticationScopes(): array
    {
        return ['bearer-token-for-user'];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['limit', 'offset']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['limit' => 60, 'offset' => 0]);
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
     * @return \Em411\Allegro\Api\Model\ReturnPoliciesListReturnPolicyV1|\Em411\Allegro\Api\Model\ReturnPoliciesListReturnPolicyV2|null
     *
     * @throws \Em411\Allegro\Api\Exception\GetPublicSellerListingUsingGET1UnauthorizedException
     * @throws \Em411\Allegro\Api\Exception\GetPublicSellerListingUsingGET1ForbiddenException
     * @throws \Em411\Allegro\Api\Exception\GetPublicSellerListingUsingGET1NotFoundException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            if (false !== mb_strpos(strtolower($contentType), 'application/vnd.allegro.public.v1+json')) {
                return $serializer->deserialize($body, 'Em411\Allegro\Api\Model\ReturnPoliciesListReturnPolicyV1', 'json');
            }
            if (false !== mb_strpos(strtolower($contentType), 'application/vnd.allegro.public.v2+json')) {
                return $serializer->deserialize($body, 'Em411\Allegro\Api\Model\ReturnPoliciesListReturnPolicyV2', 'json');
            }
        }
        if (401 === $status) {
            throw new \Em411\Allegro\Api\Exception\GetPublicSellerListingUsingGET1UnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Em411\Allegro\Api\Exception\GetPublicSellerListingUsingGET1ForbiddenException($response);
        }
        if (404 === $status) {
            throw new \Em411\Allegro\Api\Exception\GetPublicSellerListingUsingGET1NotFoundException($response);
        }
    }
}
