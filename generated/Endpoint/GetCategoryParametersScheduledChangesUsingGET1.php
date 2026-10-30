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

class GetCategoryParametersScheduledChangesUsingGET1 extends \Em411\Allegro\Api\Runtime\Client\BaseEndpoint implements \Em411\Allegro\Api\Runtime\Client\Endpoint
{
    use \Em411\Allegro\Api\Runtime\Client\EndpointTrait;
    protected $accept;

    /**
     * Use this resource to get information about planned changes in category parameters. Please note that in some cases, the returned events may finally not happen in the future.
     * At present we support the following changes: - REQUIREMENT_CHANGE - the parameter will be required in the category. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-sprawdzic-przyszle-zmiany-w-parametrach" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-check-future-changes-in-parameters" target="_blank">EN</a>.
     *
     * @param array{
     *    "scheduledFor.gte"?: string, //The minimum date and time from which the change will be effective from in ISO 8601 format. Should be greater than the current date time and less than 3 months from the current date.
     *    "scheduledFor.lte"?: string, //The maximum date and time from which the change will be effective from in ISO 8601 format. Should be greater than the current date time and less than 3 months from the current date.
     *    "scheduledAt.gte"?: string, //The minimum date and time at which the change was scheduled in ISO 8601 format.
     *    "scheduledAt.lte"?: string, //The maximum date and time at which the change was scheduled in ISO 8601 format.
     *    "type"?: array, //The types of changes that will be returned in the response. All types of changes are returned by default.
     *    "offset"?: int, //The offset of elements in the response.
     *    "limit"?: int, //The limit of elements in the response.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param array $accept Accept content header application/vnd.allegro.public.v1+json|application/json
     */
    public function __construct(array $queryParameters = [], array $headerParameters = [], array $accept = [])
    {
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
        $this->accept = $accept;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/sale/category-parameters-scheduled-changes';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['application/vnd.allegro.public.v1+json', 'application/json']];
        }

        return $this->accept;
    }

    public function getAuthenticationScopes(): array
    {
        return ['bearer-token-for-user', 'bearer-token-for-application'];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['scheduledFor.gte', 'scheduledFor.lte', 'scheduledAt.gte', 'scheduledAt.lte', 'type', 'offset', 'limit']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['offset' => 0, 'limit' => 100]);
        $optionsResolver->addAllowedTypes('scheduledFor.gte', ['string']);
        $optionsResolver->addAllowedTypes('scheduledFor.lte', ['string']);
        $optionsResolver->addAllowedTypes('scheduledAt.gte', ['string']);
        $optionsResolver->addAllowedTypes('scheduledAt.lte', ['string']);
        $optionsResolver->addAllowedTypes('type', ['array']);
        $optionsResolver->addAllowedTypes('offset', ['int']);
        $optionsResolver->addAllowedTypes('limit', ['int']);

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

    protected function getQueryStyles(): array
    {
        return ['type' => ['style' => 'form', 'explode' => true]];
    }

    /**
     * @return \Em411\Allegro\Api\Model\CategoryParametersScheduledChangesResponse|null
     *
     * @throws \Em411\Allegro\Api\Exception\GetCategoryParametersScheduledChangesUsingGET1BadRequestException
     * @throws \Em411\Allegro\Api\Exception\GetCategoryParametersScheduledChangesUsingGET1UnauthorizedException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ((null === $contentType) === false && (200 === $status && false !== stripos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            return $serializer->deserialize($body, 'Em411\Allegro\Api\Model\CategoryParametersScheduledChangesResponse', 'json');
        }
        if ((null === $contentType) === false && (400 === $status && false !== stripos(strtolower($contentType), 'application/json'))) {
            throw new \Em411\Allegro\Api\Exception\GetCategoryParametersScheduledChangesUsingGET1BadRequestException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\ErrorsHolder', 'json'), $response);
        }
        if ((null === $contentType) === false && (401 === $status && false !== stripos(strtolower($contentType), 'application/json'))) {
            throw new \Em411\Allegro\Api\Exception\GetCategoryParametersScheduledChangesUsingGET1UnauthorizedException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\AuthError', 'json'), $response);
        }
    }
}
