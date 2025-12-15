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

class GetAfterSalesServiceImpliedWarrantyUsingGET extends \Em411\Allegro\Api\Runtime\Client\BaseEndpoint implements \Em411\Allegro\Api\Runtime\Client\Endpoint
{
    use \Em411\Allegro\Api\Runtime\Client\EndpointTrait;
    protected $impliedWarrantyId;

    /**
     * Use this resource to get an implied warranty details. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-pobrac-warunki-reklamacji-przypisane-do-konta" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-retrieve-implied-warranties-assigned-to-the-account" target="_blank">EN</a>.
     *
     * @param string $impliedWarrantyId the ID of the implied warranty
     * @param array  $headerParameters  {
     *
     * @var string $Accept-Language Expected language of messages.
     *             }
     */
    public function __construct(string $impliedWarrantyId, array $headerParameters = [])
    {
        $this->impliedWarrantyId = $impliedWarrantyId;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{impliedWarrantyId}'], [$this->impliedWarrantyId], '/after-sales-service-conditions/implied-warranties/{impliedWarrantyId}');
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
     * @return \Em411\Allegro\Api\Model\ImpliedWarrantyResponse|null
     *
     * @throws \Em411\Allegro\Api\Exception\GetAfterSalesServiceImpliedWarrantyUsingGETUnauthorizedException
     * @throws \Em411\Allegro\Api\Exception\GetAfterSalesServiceImpliedWarrantyUsingGETForbiddenException
     * @throws \Em411\Allegro\Api\Exception\GetAfterSalesServiceImpliedWarrantyUsingGETNotFoundException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ((null === $contentType) === false && (200 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            return $serializer->deserialize($body, 'Em411\Allegro\Api\Model\ImpliedWarrantyResponse', 'json');
        }
        if (401 === $status) {
            throw new \Em411\Allegro\Api\Exception\GetAfterSalesServiceImpliedWarrantyUsingGETUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Em411\Allegro\Api\Exception\GetAfterSalesServiceImpliedWarrantyUsingGETForbiddenException($response);
        }
        if (404 === $status) {
            throw new \Em411\Allegro\Api\Exception\GetAfterSalesServiceImpliedWarrantyUsingGETNotFoundException($response);
        }
    }
}
