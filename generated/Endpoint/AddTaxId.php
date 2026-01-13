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

class AddTaxId extends \Em411\Allegro\Api\Runtime\Client\BaseEndpoint implements \Em411\Allegro\Api\Runtime\Client\Endpoint
{
    use \Em411\Allegro\Api\Runtime\Client\EndpointTrait;

    /**
     * Use this resource to add tax identification number. For international sellers only. Read more: <a href="../../news/one-fulfillment-umozliwiamy-zarzadzanie-numerem-identyfikacji-podatkowej-vat-6M2xgdAmGFM" target="_blank">PL</a> / <a href="../../news/one-fulfillment-we-allow-you-to-manage-your-vat-identification-number-Pgj9WXjWwcm" target="_blank">EN</a>.
     *
     * @param array $headerParameters {
     *
     * @var string $Accept-Language Expected language of messages.
     *             }
     */
    public function __construct(?\Em411\Allegro\Api\Model\TaxIdRequest $requestBody = null, array $headerParameters = [])
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
        return '/fulfillment/tax-id';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Em411\Allegro\Api\Model\TaxIdRequest) {
            return [['Content-Type' => ['application/vnd.allegro.public.v1+json']], $serializer->serialize($this->body, 'json')];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
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
     * @throws \Em411\Allegro\Api\Exception\AddTaxIdUnauthorizedException
     * @throws \Em411\Allegro\Api\Exception\AddTaxIdForbiddenException
     * @throws \Em411\Allegro\Api\Exception\AddTaxIdNotFoundException
     * @throws \Em411\Allegro\Api\Exception\AddTaxIdUnprocessableEntityException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (201 === $status) {
            return null;
        }
        if (401 === $status) {
            throw new \Em411\Allegro\Api\Exception\AddTaxIdUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Em411\Allegro\Api\Exception\AddTaxIdForbiddenException($response);
        }
        if (404 === $status) {
            throw new \Em411\Allegro\Api\Exception\AddTaxIdNotFoundException($response);
        }
        if ((null === $contentType) === false && (422 === $status && false !== mb_strpos(strtolower($contentType), 'application/json'))) {
            throw new \Em411\Allegro\Api\Exception\AddTaxIdUnprocessableEntityException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\ErrorsHolder', 'json'), $response);
        }
    }
}
