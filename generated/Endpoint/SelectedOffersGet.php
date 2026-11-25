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

class SelectedOffersGet extends \Em411\Allegro\Api\Runtime\Client\BaseEndpoint implements \Em411\Allegro\Api\Runtime\Client\Endpoint
{
    use \Em411\Allegro\Api\Runtime\Client\EndpointTrait;
    protected $campaignId;

    /**
     * Use this resource to retrieve campaign offers and check whether each returned offer meets the campaign conditions before submitting it. This resource is available for selected public campaigns while they are open for submissions through the API. Other campaigns or periods may return 404. For eligible offers, the response includes the maximum price at which they can be submitted. For returned offers that do not meet the conditions, the response explains why they are ineligible. The response includes only offers matching the campaign's product list. Filters and pagination may further limit the results, so an offer missing from the response is not necessarily unselected. To check a specific offer, provide `offerId` and omit `meetsConditions`. If the response contains the offer, check `offerConditions.meetsConditions` and `offerConditions.violations` to determine its eligibility. The default `offset` is 0. If you explicitly provide a non-zero `offset`, the offer may be omitted from that page even if it was selected for the campaign. Submit eligible offers using *POST /sale/badges*.
     *
     * @param string $campaignId campaign ID
     * @param array{
     *    "offset"?: int, //Zero-based offset of the first selected offer to return.
     *    "limit"?: int, //Maximum number of selected offers to return.
     *    "offerId"?: string, //Filter by offer ID. Must contain only digits and be greater than or equal to 1.
     *    "meetsConditions"?: bool, //Filter by whether offers meet campaign conditions. Set to true or false; omit to include both.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Language used for localized violation and error messages.
     * } $headerParameters
     */
    public function __construct(string $campaignId, array $queryParameters = [], array $headerParameters = [])
    {
        $this->campaignId = $campaignId;
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{campaignId}'], [rawurlencode($this->campaignId)], '/sale/badge-campaigns/{campaignId}/selected-offers');
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

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['offset', 'limit', 'offerId', 'meetsConditions']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['offset' => 0, 'limit' => 50]);
        $optionsResolver->addAllowedTypes('offset', ['int']);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        $optionsResolver->addAllowedTypes('offerId', ['string']);
        $optionsResolver->addAllowedTypes('meetsConditions', ['bool']);

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
     * @return \Em411\Allegro\Api\Model\SelectedOffersResponse|null
     *
     * @throws \Em411\Allegro\Api\Exception\SelectedOffersGetBadRequestException
     * @throws \Em411\Allegro\Api\Exception\SelectedOffersGetUnauthorizedException
     * @throws \Em411\Allegro\Api\Exception\SelectedOffersGetForbiddenException
     * @throws \Em411\Allegro\Api\Exception\SelectedOffersGetNotFoundException
     * @throws \Em411\Allegro\Api\Exception\SelectedOffersGetInternalServerErrorException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ((null === $contentType) === false && (200 === $status && false !== stripos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            return $serializer->deserialize($body, 'Em411\Allegro\Api\Model\SelectedOffersResponse', 'json');
        }
        if ((null === $contentType) === false && (400 === $status && false !== stripos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            throw new \Em411\Allegro\Api\Exception\SelectedOffersGetBadRequestException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\ErrorsHolder', 'json'), $response);
        }
        if ((null === $contentType) === false && (401 === $status && false !== stripos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            throw new \Em411\Allegro\Api\Exception\SelectedOffersGetUnauthorizedException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\AuthError', 'json'), $response);
        }
        if ((null === $contentType) === false && (403 === $status && false !== stripos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            throw new \Em411\Allegro\Api\Exception\SelectedOffersGetForbiddenException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\ErrorsHolder', 'json'), $response);
        }
        if ((null === $contentType) === false && (404 === $status && false !== stripos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            throw new \Em411\Allegro\Api\Exception\SelectedOffersGetNotFoundException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\ErrorsHolder', 'json'), $response);
        }
        if ((null === $contentType) === false && (500 === $status && false !== stripos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            throw new \Em411\Allegro\Api\Exception\SelectedOffersGetInternalServerErrorException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\ErrorsHolder', 'json'), $response);
        }
    }
}
