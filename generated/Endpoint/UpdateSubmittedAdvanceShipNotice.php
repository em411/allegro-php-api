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

class UpdateSubmittedAdvanceShipNotice extends \Em411\Allegro\Api\Runtime\Client\BaseEndpoint implements \Em411\Allegro\Api\Runtime\Client\Endpoint
{
    use \Em411\Allegro\Api\Runtime\Client\EndpointTrait;
    protected $id;
    protected $accept;

    /**
     * Use this resource to update already submitted Advance Ship Notice. Update is allowed only when Advance Ship Notice is in "IN_TRANSIT" status. Read more: <a href="../../tutorials/one-fulfillment-by-allegro-0ADwgOLqWSw#edytuj-zakonczone-awizo" target="_blank">PL</a> / <a href="../../tutorials/one-fulfillment-by-allegro-4R9dXyMPlc9#edit-advance-ship-notice" target="_blank">EN</a>.
     *
     * @param string $id an identifier of Advance Ship Notice
     * @param array{
     *    "if-match": string, //A current version of Advance Ship Notice (e.g. from etag header obtained via get).
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param array $accept Accept content header application/vnd.allegro.public.v1+json|application/json
     */
    public function __construct(string $id, ?\Em411\Allegro\Api\Model\UpdateSubmittedAdvanceShipNoticeRequest $requestBody = null, array $headerParameters = [], array $accept = [])
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
        return str_replace(['{id}'], [rawurlencode($this->id)], '/fulfillment/advance-ship-notices/{id}/submitted');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Em411\Allegro\Api\Model\UpdateSubmittedAdvanceShipNoticeRequest) {
            return [['Content-Type' => ['application/vnd.allegro.public.v1+json']], \Em411\Allegro\Api\Runtime\Client\JsonPayload::encode($serializer, $this->body)];
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
     * @throws \Em411\Allegro\Api\Exception\UpdateSubmittedAdvanceShipNoticeBadRequestException
     * @throws \Em411\Allegro\Api\Exception\UpdateSubmittedAdvanceShipNoticeUnauthorizedException
     * @throws \Em411\Allegro\Api\Exception\UpdateSubmittedAdvanceShipNoticeForbiddenException
     * @throws \Em411\Allegro\Api\Exception\UpdateSubmittedAdvanceShipNoticePreconditionFailedException
     * @throws \Em411\Allegro\Api\Exception\UpdateSubmittedAdvanceShipNoticeUnprocessableEntityException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ((null === $contentType) === false && (200 === $status && false !== stripos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            return $serializer->deserialize($body, 'Em411\Allegro\Api\Model\AdvanceShipNoticeResponse', 'json');
        }
        if (400 === $status) {
            throw new \Em411\Allegro\Api\Exception\UpdateSubmittedAdvanceShipNoticeBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Em411\Allegro\Api\Exception\UpdateSubmittedAdvanceShipNoticeUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Em411\Allegro\Api\Exception\UpdateSubmittedAdvanceShipNoticeForbiddenException($response);
        }
        if (412 === $status) {
            throw new \Em411\Allegro\Api\Exception\UpdateSubmittedAdvanceShipNoticePreconditionFailedException($response);
        }
        if ((null === $contentType) === false && (422 === $status && false !== stripos(strtolower($contentType), 'application/json'))) {
            throw new \Em411\Allegro\Api\Exception\UpdateSubmittedAdvanceShipNoticeUnprocessableEntityException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\ErrorsHolder', 'json'), $response);
        }
    }
}
