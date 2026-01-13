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

class GetTaxId extends \Em411\Allegro\Api\Runtime\Client\BaseEndpoint implements \Em411\Allegro\Api\Runtime\Client\Endpoint
{
    use \Em411\Allegro\Api\Runtime\Client\EndpointTrait;

    /**
     * Use this resource to get tax identification number with verification status. After adding or updating the tax identification number the status will be NOT_VERIFIED and you will have to wait for acceptance status to start selling. Read more: <a href="../../news/one-fulfillment-umozliwiamy-zarzadzanie-numerem-identyfikacji-podatkowej-vat-6M2xgdAmGFM" target="_blank">PL</a> / <a href="../../news/one-fulfillment-we-allow-you-to-manage-your-vat-identification-number-Pgj9WXjWwcm" target="_blank">EN</a>.
     *
     * @param array $headerParameters {
     *
     * @var string $Accept-Language Expected language of messages.
     *             }
     */
    public function __construct(array $headerParameters = [])
    {
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/fulfillment/tax-id';
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
     * @return \Em411\Allegro\Api\Model\TaxIdResponse|null
     *
     * @throws \Em411\Allegro\Api\Exception\GetTaxIdUnauthorizedException
     * @throws \Em411\Allegro\Api\Exception\GetTaxIdForbiddenException
     * @throws \Em411\Allegro\Api\Exception\GetTaxIdNotFoundException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ((null === $contentType) === false && (200 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            return $serializer->deserialize($body, 'Em411\Allegro\Api\Model\TaxIdResponse', 'json');
        }
        if (401 === $status) {
            throw new \Em411\Allegro\Api\Exception\GetTaxIdUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Em411\Allegro\Api\Exception\GetTaxIdForbiddenException($response);
        }
        if (404 === $status) {
            throw new \Em411\Allegro\Api\Exception\GetTaxIdNotFoundException($response);
        }
    }
}
