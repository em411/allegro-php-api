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

class GetAfterSalesServiceReturnPolicyUsingGET extends \Em411\Allegro\Api\Runtime\Client\BaseEndpoint implements \Em411\Allegro\Api\Runtime\Client\Endpoint
{
    use \Em411\Allegro\Api\Runtime\Client\EndpointTrait;
    protected $returnPolicyId;
    protected $accept;

    /**
     * Use this resource to get a return policy details. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-pobrac-warunki-zwrotow-przypisane-do-konta" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-retrieve-return-policies-assigned-to-the-account" target="_blank">EN</a>.
     *
     * @param string $returnPolicyId   the ID of the return policy
     * @param array  $headerParameters {
     *
     * @var string $Accept-Language Expected language of messages.
     *             }
     *
     * @param array $accept Accept content header application/vnd.allegro.public.v1+json|application/vnd.allegro.public.v2+json
     */
    public function __construct(string $returnPolicyId, array $headerParameters = [], array $accept = [])
    {
        $this->returnPolicyId = $returnPolicyId;
        $this->headerParameters = $headerParameters;
        $this->accept = $accept;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{returnPolicyId}'], [$this->returnPolicyId], '/after-sales-service-conditions/return-policies/{returnPolicyId}');
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
     * @return \Em411\Allegro\Api\Model\ReturnPolicyResponseV1|\Em411\Allegro\Api\Model\ReturnPolicyResponseV2|null
     *
     * @throws \Em411\Allegro\Api\Exception\GetAfterSalesServiceReturnPolicyUsingGETUnauthorizedException
     * @throws \Em411\Allegro\Api\Exception\GetAfterSalesServiceReturnPolicyUsingGETForbiddenException
     * @throws \Em411\Allegro\Api\Exception\GetAfterSalesServiceReturnPolicyUsingGETNotFoundException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            if (false !== mb_strpos(strtolower($contentType), 'application/vnd.allegro.public.v1+json')) {
                return $serializer->deserialize($body, 'Em411\Allegro\Api\Model\ReturnPolicyResponseV1', 'json');
            }
            if (false !== mb_strpos(strtolower($contentType), 'application/vnd.allegro.public.v2+json')) {
                return $serializer->deserialize($body, 'Em411\Allegro\Api\Model\ReturnPolicyResponseV2', 'json');
            }
        }
        if (401 === $status) {
            throw new \Em411\Allegro\Api\Exception\GetAfterSalesServiceReturnPolicyUsingGETUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Em411\Allegro\Api\Exception\GetAfterSalesServiceReturnPolicyUsingGETForbiddenException($response);
        }
        if (404 === $status) {
            throw new \Em411\Allegro\Api\Exception\GetAfterSalesServiceReturnPolicyUsingGETNotFoundException($response);
        }
    }
}
