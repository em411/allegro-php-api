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

class UpdateAdvanceShipNotice extends \Em411\Allegro\Api\Runtime\Client\BaseEndpoint implements \Em411\Allegro\Api\Runtime\Client\Endpoint
{
    use \Em411\Allegro\Api\Runtime\Client\EndpointTrait;
    protected $id;
    protected $accept;

    /**
     * Use this resource to update an Advance Ship Notice. Any content property update will clear labels property. Use Create labels command to create new labels for provided content.
     * If a client wants to update read-only property, an error is returned (only in cases when sent value will be different than actual on the server). Read more: <a href="../../tutorials/one-fulfillment-by-allegro-0ADwgOLqWSw#uzupelnij-dane-o-awizo" target="_blank">PL</a> / <a href="../../one-fulfillment-by-allegro-4R9dXyMPlc9#complete-the-data-of-advance-ship-notice" target="_blank">EN</a>.
     *
     * @param string $id               an identifier of Advance Ship Notice
     * @param array  $headerParameters {
     *
     * @var string $if-match A current version of Advance Ship Notice (e.g. from etag header obtained via get).
     * @var string $Accept-Language Expected language of messages.
     *             }
     *
     * @param array $accept Accept content header application/vnd.allegro.public.v1+json|application/json
     */
    public function __construct(string $id, ?\Em411\Allegro\Api\Model\AdvanceShipNotice $requestBody = null, array $headerParameters = [], array $accept = [])
    {
        $this->id = $id;
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
        $this->accept = $accept;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/fulfillment/advance-ship-notices/{id}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Em411\Allegro\Api\Model\AdvanceShipNotice) {
            return [['Content-Type' => ['application/vnd.allegro.public.v1+json']], $serializer->serialize($this->body, 'json')];
        }

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
        return ['bearer-token-for-user'];
    }

    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['if-match', 'Accept-Language']);
        $optionsResolver->setRequired(['if-match']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('if-match', ['string']);
        $optionsResolver->addAllowedTypes('Accept-Language', ['string']);

        return $optionsResolver;
    }

    /**
     * @return \Em411\Allegro\Api\Model\AdvanceShipNoticeResponse|null
     *
     * @throws \Em411\Allegro\Api\Exception\UpdateAdvanceShipNoticeBadRequestException
     * @throws \Em411\Allegro\Api\Exception\UpdateAdvanceShipNoticeUnauthorizedException
     * @throws \Em411\Allegro\Api\Exception\UpdateAdvanceShipNoticeForbiddenException
     * @throws \Em411\Allegro\Api\Exception\UpdateAdvanceShipNoticePreconditionFailedException
     * @throws \Em411\Allegro\Api\Exception\UpdateAdvanceShipNoticeUnprocessableEntityException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ((null === $contentType) === false && (200 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            return $serializer->deserialize($body, 'Em411\Allegro\Api\Model\AdvanceShipNoticeResponse', 'json');
        }
        if (400 === $status) {
            throw new \Em411\Allegro\Api\Exception\UpdateAdvanceShipNoticeBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Em411\Allegro\Api\Exception\UpdateAdvanceShipNoticeUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Em411\Allegro\Api\Exception\UpdateAdvanceShipNoticeForbiddenException($response);
        }
        if (412 === $status) {
            throw new \Em411\Allegro\Api\Exception\UpdateAdvanceShipNoticePreconditionFailedException($response);
        }
        if ((null === $contentType) === false && (422 === $status && false !== mb_strpos(strtolower($contentType), 'application/json'))) {
            throw new \Em411\Allegro\Api\Exception\UpdateAdvanceShipNoticeUnprocessableEntityException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\ErrorsHolder', 'json'), $response);
        }
    }
}
