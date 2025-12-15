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

class OfferAutomaticPricingModificationCommandUsingPOST extends \Em411\Allegro\Api\Runtime\Client\BaseEndpoint implements \Em411\Allegro\Api\Runtime\Client\Endpoint
{
    use \Em411\Allegro\Api\Runtime\Client\EndpointTrait;

    /**
     * Use this resource to modify the automatic pricing rules of multiple offers at the same time. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#reguly-cenowe" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#pricing-rules" target="_blank">EN</a>. This resource is rate limited to 150 000 offer changes per hour or 9000 offer changes per minute - limit applies to a single user of the application.
     *
     * @param array $headerParameters {
     *
     * @var string $Accept-Language Expected language of messages.
     *             }
     */
    public function __construct(?\Em411\Allegro\Api\Model\OfferAutomaticPricingCommand $requestBody = null, array $headerParameters = [])
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
        return '/sale/offer-price-automation-commands';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Em411\Allegro\Api\Model\OfferAutomaticPricingCommand) {
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
     * @return \Em411\Allegro\Api\Model\GeneralReport|null
     *
     * @throws \Em411\Allegro\Api\Exception\OfferAutomaticPricingModificationCommandUsingPOSTBadRequestException
     * @throws \Em411\Allegro\Api\Exception\OfferAutomaticPricingModificationCommandUsingPOSTUnauthorizedException
     * @throws \Em411\Allegro\Api\Exception\OfferAutomaticPricingModificationCommandUsingPOSTForbiddenException
     * @throws \Em411\Allegro\Api\Exception\OfferAutomaticPricingModificationCommandUsingPOSTConflictException
     * @throws \Em411\Allegro\Api\Exception\OfferAutomaticPricingModificationCommandUsingPOSTUnprocessableEntityException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ((null === $contentType) === false && (201 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            return $serializer->deserialize($body, 'Em411\Allegro\Api\Model\GeneralReport', 'json');
        }
        if (400 === $status) {
            throw new \Em411\Allegro\Api\Exception\OfferAutomaticPricingModificationCommandUsingPOSTBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Em411\Allegro\Api\Exception\OfferAutomaticPricingModificationCommandUsingPOSTUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Em411\Allegro\Api\Exception\OfferAutomaticPricingModificationCommandUsingPOSTForbiddenException($response);
        }
        if (409 === $status) {
            throw new \Em411\Allegro\Api\Exception\OfferAutomaticPricingModificationCommandUsingPOSTConflictException($response);
        }
        if (422 === $status) {
            throw new \Em411\Allegro\Api\Exception\OfferAutomaticPricingModificationCommandUsingPOSTUnprocessableEntityException($response);
        }
    }
}
