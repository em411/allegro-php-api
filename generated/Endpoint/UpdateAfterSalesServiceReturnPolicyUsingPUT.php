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

class UpdateAfterSalesServiceReturnPolicyUsingPUT extends \Em411\Allegro\Api\Runtime\Client\BaseEndpoint implements \Em411\Allegro\Api\Runtime\Client\Endpoint
{
    use \Em411\Allegro\Api\Runtime\Client\EndpointTrait;
    protected $returnPolicyId;
    protected $accept;

    /**
     * Use this resource to modify the return policy details. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-edytowac-informacje-o-warunkach-zwrotu" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-update-return-policy-information" target="_blank">EN</a>.
     *
     * @param string                                                                                                   $returnPolicyId   the ID of the return policy
     * @param \Em411\Allegro\Api\Model\ReturnPolicyRequestV1|\Em411\Allegro\Api\Model\ReturnPolicyUpdateRequestV2|null $requestBody
     * @param array                                                                                                    $headerParameters {
     *
     * @var string $Accept-Language Expected language of messages.
     *             }
     *
     * @param array $accept Accept content header application/vnd.allegro.public.v1+json|application/vnd.allegro.public.v2+json
     */
    public function __construct(string $returnPolicyId, $requestBody = null, array $headerParameters = [], array $accept = [])
    {
        $this->returnPolicyId = $returnPolicyId;
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
        $this->accept = $accept;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{returnPolicyId}'], [$this->returnPolicyId], '/after-sales-service-conditions/return-policies/{returnPolicyId}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Em411\Allegro\Api\Model\ReturnPolicyRequestV1) {
            return [['Content-Type' => ['application/vnd.allegro.public.v1+json']], $serializer->serialize($this->body, 'json')];
        }
        if ($this->body instanceof \Em411\Allegro\Api\Model\ReturnPolicyUpdateRequestV2) {
            return [['Content-Type' => ['application/vnd.allegro.public.v2+json']], $serializer->serialize($this->body, 'json')];
        }

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
     * @throws \Em411\Allegro\Api\Exception\UpdateAfterSalesServiceReturnPolicyUsingPUTBadRequestException
     * @throws \Em411\Allegro\Api\Exception\UpdateAfterSalesServiceReturnPolicyUsingPUTUnauthorizedException
     * @throws \Em411\Allegro\Api\Exception\UpdateAfterSalesServiceReturnPolicyUsingPUTForbiddenException
     * @throws \Em411\Allegro\Api\Exception\UpdateAfterSalesServiceReturnPolicyUsingPUTNotFoundException
     * @throws \Em411\Allegro\Api\Exception\UpdateAfterSalesServiceReturnPolicyUsingPUTUnprocessableEntityException
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
        if (400 === $status) {
            throw new \Em411\Allegro\Api\Exception\UpdateAfterSalesServiceReturnPolicyUsingPUTBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Em411\Allegro\Api\Exception\UpdateAfterSalesServiceReturnPolicyUsingPUTUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Em411\Allegro\Api\Exception\UpdateAfterSalesServiceReturnPolicyUsingPUTForbiddenException($response);
        }
        if (404 === $status) {
            throw new \Em411\Allegro\Api\Exception\UpdateAfterSalesServiceReturnPolicyUsingPUTNotFoundException($response);
        }
        if (422 === $status) {
            throw new \Em411\Allegro\Api\Exception\UpdateAfterSalesServiceReturnPolicyUsingPUTUnprocessableEntityException($response);
        }
    }
}
