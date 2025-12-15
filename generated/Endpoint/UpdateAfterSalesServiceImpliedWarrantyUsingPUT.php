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

class UpdateAfterSalesServiceImpliedWarrantyUsingPUT extends \Em411\Allegro\Api\Runtime\Client\BaseEndpoint implements \Em411\Allegro\Api\Runtime\Client\Endpoint
{
    use \Em411\Allegro\Api\Runtime\Client\EndpointTrait;
    protected $impliedWarrantyId;

    /**
     * Use this resource to modify the implied warranty details. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-edytowac-informacje-o-warunkach-reklamacji" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-update-implied-warranty-information" target="_blank">EN</a>.
     *
     * @param string $impliedWarrantyId the ID of the implied warranty
     * @param array  $headerParameters  {
     *
     * @var string $Accept-Language Expected language of messages.
     *             }
     */
    public function __construct(string $impliedWarrantyId, ?\Em411\Allegro\Api\Model\ImpliedWarrantyRequest $requestBody = null, array $headerParameters = [])
    {
        $this->impliedWarrantyId = $impliedWarrantyId;
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{impliedWarrantyId}'], [$this->impliedWarrantyId], '/after-sales-service-conditions/implied-warranties/{impliedWarrantyId}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Em411\Allegro\Api\Model\ImpliedWarrantyRequest) {
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
     * @return \Em411\Allegro\Api\Model\ImpliedWarrantyResponse|null
     *
     * @throws \Em411\Allegro\Api\Exception\UpdateAfterSalesServiceImpliedWarrantyUsingPUTBadRequestException
     * @throws \Em411\Allegro\Api\Exception\UpdateAfterSalesServiceImpliedWarrantyUsingPUTUnauthorizedException
     * @throws \Em411\Allegro\Api\Exception\UpdateAfterSalesServiceImpliedWarrantyUsingPUTForbiddenException
     * @throws \Em411\Allegro\Api\Exception\UpdateAfterSalesServiceImpliedWarrantyUsingPUTNotFoundException
     * @throws \Em411\Allegro\Api\Exception\UpdateAfterSalesServiceImpliedWarrantyUsingPUTUnprocessableEntityException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ((null === $contentType) === false && (200 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            return $serializer->deserialize($body, 'Em411\Allegro\Api\Model\ImpliedWarrantyResponse', 'json');
        }
        if (400 === $status) {
            throw new \Em411\Allegro\Api\Exception\UpdateAfterSalesServiceImpliedWarrantyUsingPUTBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Em411\Allegro\Api\Exception\UpdateAfterSalesServiceImpliedWarrantyUsingPUTUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Em411\Allegro\Api\Exception\UpdateAfterSalesServiceImpliedWarrantyUsingPUTForbiddenException($response);
        }
        if (404 === $status) {
            throw new \Em411\Allegro\Api\Exception\UpdateAfterSalesServiceImpliedWarrantyUsingPUTNotFoundException($response);
        }
        if (422 === $status) {
            throw new \Em411\Allegro\Api\Exception\UpdateAfterSalesServiceImpliedWarrantyUsingPUTUnprocessableEntityException($response);
        }
    }
}
