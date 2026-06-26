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

class CreateAfterSalesServiceReturnPolicyUsingPOST extends \Em411\Allegro\Api\Runtime\Client\BaseEndpoint implements \Em411\Allegro\Api\Runtime\Client\Endpoint
{
    use \Em411\Allegro\Api\Runtime\Client\EndpointTrait;

    /**
     * Use this resource to create a return policy definition. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-dodac-informacje-o-warunkach-zwrotow" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-add-return-policy-information" target="_blank">EN</a>.
     *
     * @param array $headerParameters {
     *
     * @var string $Accept-Language Expected language of messages.
     *             }
     */
    public function __construct(?\Em411\Allegro\Api\Model\ReturnPolicyRequestV1 $requestBody = null, array $headerParameters = [])
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
        return '/after-sales-service-conditions/return-policies';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Em411\Allegro\Api\Model\ReturnPolicyRequestV1) {
            return [['Content-Type' => ['application/vnd.allegro.public.v1+json']], $serializer->serialize($this->body, 'json')];
        }

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
     * @return \Em411\Allegro\Api\Model\ReturnPolicyResponseV1|null
     *
     * @throws \Em411\Allegro\Api\Exception\CreateAfterSalesServiceReturnPolicyUsingPOSTBadRequestException
     * @throws \Em411\Allegro\Api\Exception\CreateAfterSalesServiceReturnPolicyUsingPOSTUnauthorizedException
     * @throws \Em411\Allegro\Api\Exception\CreateAfterSalesServiceReturnPolicyUsingPOSTForbiddenException
     * @throws \Em411\Allegro\Api\Exception\CreateAfterSalesServiceReturnPolicyUsingPOSTUnprocessableEntityException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ((null === $contentType) === false && (201 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            return $serializer->deserialize($body, 'Em411\Allegro\Api\Model\ReturnPolicyResponseV1', 'json');
        }
        if (400 === $status) {
            throw new \Em411\Allegro\Api\Exception\CreateAfterSalesServiceReturnPolicyUsingPOSTBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Em411\Allegro\Api\Exception\CreateAfterSalesServiceReturnPolicyUsingPOSTUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Em411\Allegro\Api\Exception\CreateAfterSalesServiceReturnPolicyUsingPOSTForbiddenException($response);
        }
        if (422 === $status) {
            throw new \Em411\Allegro\Api\Exception\CreateAfterSalesServiceReturnPolicyUsingPOSTUnprocessableEntityException($response);
        }
    }
}
