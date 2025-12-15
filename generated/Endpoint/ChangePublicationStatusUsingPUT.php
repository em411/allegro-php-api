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

class ChangePublicationStatusUsingPUT extends \Em411\Allegro\Api\Runtime\Client\BaseEndpoint implements \Em411\Allegro\Api\Runtime\Client\Endpoint
{
    use \Em411\Allegro\Api\Runtime\Client\EndpointTrait;
    protected $commandId;

    /**
     * Use this resource to modify multiple offers publication at once. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-zakonczyc-oferte" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#ending-offers" target="_blank">EN</a>. This resource is rate limited to 250 000 offer changes per hour or 9000 offer changes per minute.
     *
     * @param string $commandId        command identifier
     * @param array  $headerParameters {
     *
     * @var string $Accept-Language Expected language of messages.
     *             }
     */
    public function __construct(string $commandId, ?\Em411\Allegro\Api\Model\PublicationChangeCommandDto $requestBody = null, array $headerParameters = [])
    {
        $this->commandId = $commandId;
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{commandId}'], [$this->commandId], '/sale/offer-publication-commands/{commandId}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Em411\Allegro\Api\Model\PublicationChangeCommandDto) {
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
     * @throws \Em411\Allegro\Api\Exception\ChangePublicationStatusUsingPUTBadRequestException
     * @throws \Em411\Allegro\Api\Exception\ChangePublicationStatusUsingPUTUnauthorizedException
     * @throws \Em411\Allegro\Api\Exception\ChangePublicationStatusUsingPUTForbiddenException
     * @throws \Em411\Allegro\Api\Exception\ChangePublicationStatusUsingPUTNotFoundException
     * @throws \Em411\Allegro\Api\Exception\ChangePublicationStatusUsingPUTConflictException
     * @throws \Em411\Allegro\Api\Exception\ChangePublicationStatusUsingPUTUnprocessableEntityException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ((null === $contentType) === false && (201 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            return $serializer->deserialize($body, 'Em411\Allegro\Api\Model\GeneralReport', 'json');
        }
        if (400 === $status) {
            throw new \Em411\Allegro\Api\Exception\ChangePublicationStatusUsingPUTBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Em411\Allegro\Api\Exception\ChangePublicationStatusUsingPUTUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Em411\Allegro\Api\Exception\ChangePublicationStatusUsingPUTForbiddenException($response);
        }
        if (404 === $status) {
            throw new \Em411\Allegro\Api\Exception\ChangePublicationStatusUsingPUTNotFoundException($response);
        }
        if (409 === $status) {
            throw new \Em411\Allegro\Api\Exception\ChangePublicationStatusUsingPUTConflictException($response);
        }
        if (422 === $status) {
            throw new \Em411\Allegro\Api\Exception\ChangePublicationStatusUsingPUTUnprocessableEntityException($response);
        }
    }
}
