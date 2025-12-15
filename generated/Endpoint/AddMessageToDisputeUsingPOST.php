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

class AddMessageToDisputeUsingPOST extends \Em411\Allegro\Api\Runtime\Client\BaseEndpoint implements \Em411\Allegro\Api\Runtime\Client\Endpoint
{
    use \Em411\Allegro\Api\Runtime\Client\EndpointTrait;
    protected $disputeId;

    /**
     * Use this resource to post a message in certain dispute. At least one of fields: 'text', 'attachment' has to be present. Read more: <a href="../../tutorials/jak-zarzadzac-dyskusjami-E7Zj6gK7ysE#nowa-wiadomosc-w-dyskusji" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-discussions-VL6Yr40e5t5#add-a-new-message-in-the-discussion" target="_blank">EN</a>.
     *
     * @param string $disputeId        dispute identifier
     * @param array  $headerParameters {
     *
     * @var string $Accept-Language Expected language of messages.
     *             }
     */
    public function __construct(string $disputeId, ?\Em411\Allegro\Api\Model\MessageRequest $requestBody = null, array $headerParameters = [])
    {
        $this->disputeId = $disputeId;
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{disputeId}'], [$this->disputeId], '/sale/disputes/{disputeId}/messages');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Em411\Allegro\Api\Model\MessageRequest) {
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
     * @return \Em411\Allegro\Api\Model\DisputeMessage|null
     *
     * @throws \Em411\Allegro\Api\Exception\AddMessageToDisputeUsingPOSTBadRequestException
     * @throws \Em411\Allegro\Api\Exception\AddMessageToDisputeUsingPOSTUnauthorizedException
     * @throws \Em411\Allegro\Api\Exception\AddMessageToDisputeUsingPOSTForbiddenException
     * @throws \Em411\Allegro\Api\Exception\AddMessageToDisputeUsingPOSTNotFoundException
     * @throws \Em411\Allegro\Api\Exception\AddMessageToDisputeUsingPOSTConflictException
     * @throws \Em411\Allegro\Api\Exception\AddMessageToDisputeUsingPOSTUnprocessableEntityException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ((null === $contentType) === false && (201 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            return $serializer->deserialize($body, 'Em411\Allegro\Api\Model\DisputeMessage', 'json');
        }
        if (400 === $status) {
            throw new \Em411\Allegro\Api\Exception\AddMessageToDisputeUsingPOSTBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Em411\Allegro\Api\Exception\AddMessageToDisputeUsingPOSTUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Em411\Allegro\Api\Exception\AddMessageToDisputeUsingPOSTForbiddenException($response);
        }
        if (404 === $status) {
            throw new \Em411\Allegro\Api\Exception\AddMessageToDisputeUsingPOSTNotFoundException($response);
        }
        if (409 === $status) {
            throw new \Em411\Allegro\Api\Exception\AddMessageToDisputeUsingPOSTConflictException($response);
        }
        if (422 === $status) {
            throw new \Em411\Allegro\Api\Exception\AddMessageToDisputeUsingPOSTUnprocessableEntityException($response);
        }
    }
}
