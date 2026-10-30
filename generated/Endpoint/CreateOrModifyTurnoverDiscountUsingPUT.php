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

class CreateOrModifyTurnoverDiscountUsingPUT extends \Em411\Allegro\Api\Runtime\Client\BaseEndpoint implements \Em411\Allegro\Api\Runtime\Client\Endpoint
{
    use \Em411\Allegro\Api\Runtime\Client\EndpointTrait;
    protected $marketplaceId;

    /**
     * You cannot create or modify a turnover-based discount. Turnover-based discounts are about to be withdrawn from the platform. Any existing discounts will be removed automatically. This resource is deprecated and will be removed on November 2, 2026.
     *
     * @param string $marketplaceId marketplace identifier
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     */
    public function __construct(string $marketplaceId, ?\Em411\Allegro\Api\Model\TurnoverDiscountRequest $requestBody = null, array $headerParameters = [])
    {
        $this->marketplaceId = $marketplaceId;
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{marketplaceId}'], [rawurlencode($this->marketplaceId)], '/sale/turnover-discount/{marketplaceId}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Em411\Allegro\Api\Model\TurnoverDiscountRequest) {
            return [['Content-Type' => ['application/vnd.allegro.public.v1+json']], \Em411\Allegro\Api\Runtime\Client\JsonPayload::encode($serializer, $this->body)];
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
     * @return \Em411\Allegro\Api\Model\TurnoverDiscountDto|null
     *
     * @throws \Em411\Allegro\Api\Exception\CreateOrModifyTurnoverDiscountUsingPUTBadRequestException
     * @throws \Em411\Allegro\Api\Exception\CreateOrModifyTurnoverDiscountUsingPUTUnauthorizedException
     * @throws \Em411\Allegro\Api\Exception\CreateOrModifyTurnoverDiscountUsingPUTForbiddenException
     * @throws \Em411\Allegro\Api\Exception\CreateOrModifyTurnoverDiscountUsingPUTNotFoundException
     * @throws \Em411\Allegro\Api\Exception\CreateOrModifyTurnoverDiscountUsingPUTUnprocessableEntityException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ((null === $contentType) === false && (200 === $status && false !== stripos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            return $serializer->deserialize($body, 'Em411\Allegro\Api\Model\TurnoverDiscountDto', 'json');
        }
        if ((null === $contentType) === false && (400 === $status && false !== stripos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            throw new \Em411\Allegro\Api\Exception\CreateOrModifyTurnoverDiscountUsingPUTBadRequestException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\ErrorsHolder', 'json'), $response);
        }
        if ((null === $contentType) === false && (401 === $status && false !== stripos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            throw new \Em411\Allegro\Api\Exception\CreateOrModifyTurnoverDiscountUsingPUTUnauthorizedException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\AuthError', 'json'), $response);
        }
        if ((null === $contentType) === false && (403 === $status && false !== stripos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            throw new \Em411\Allegro\Api\Exception\CreateOrModifyTurnoverDiscountUsingPUTForbiddenException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\ErrorsHolder', 'json'), $response);
        }
        if ((null === $contentType) === false && (404 === $status && false !== stripos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            throw new \Em411\Allegro\Api\Exception\CreateOrModifyTurnoverDiscountUsingPUTNotFoundException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\ErrorsHolder', 'json'), $response);
        }
        if ((null === $contentType) === false && (422 === $status && false !== stripos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            throw new \Em411\Allegro\Api\Exception\CreateOrModifyTurnoverDiscountUsingPUTUnprocessableEntityException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\ErrorsHolder', 'json'), $response);
        }
    }
}
