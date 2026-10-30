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

class ListMessagesGET extends \Em411\Allegro\Api\Runtime\Client\BaseEndpoint implements \Em411\Allegro\Api\Runtime\Client\Endpoint
{
    use \Em411\Allegro\Api\Runtime\Client\EndpointTrait;
    protected $threadId;
    protected $accept;

    /**
     * Use this resource to list messages in thread with provided identifier. Read more: <a href="../../tutorials/jak-zarzadzac-centrum-wiadomosci-XxWm2K890Fk#lista-wiadomosci-dla-wybranego-watku" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-the-message-center-g05avyGlZUW#list-of-the-messages-for-the-particular-thread" target="_blank">EN</a>.
     *
     * @param string $threadId identifier of thread to get messages from
     * @param array{
     *    "limit"?: int, //The maximum number of messages returned in the response.
     *    "offset"?: int, //Index of the first returned message from all results. Available only for content version 'application/vnd.allegro.public.v1+json'.
     *    "before"?: string, //Message creation date before filter parameter (exclusive) - cannot be used with offset. Available only for content version 'application/vnd.allegro.public.v1+json'.
     *    "after"?: string, //Message creation date after filter parameter (exclusive). Available only for content version 'application/vnd.allegro.public.v1+json'.
     *    "page.id"?: string, //ID of the page of messages to retrieve. Available only for content version 'application/vnd.allegro.beta.v1+json'.
     * } $queryParameters
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param array $accept Accept content header application/vnd.allegro.public.v1+json|application/vnd.allegro.beta.v1+json
     */
    public function __construct(string $threadId, array $queryParameters = [], array $headerParameters = [], array $accept = [])
    {
        $this->threadId = $threadId;
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
        return str_replace(['{threadId}'], [rawurlencode($this->threadId)], '/messaging/threads/{threadId}/messages');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['application/vnd.allegro.public.v1+json', 'application/vnd.allegro.beta.v1+json']];
        }

        return $this->accept;
    }

    public function getAuthenticationScopes(): array
    {
        return ['bearer-token-for-user'];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['limit', 'offset', 'before', 'after', 'page.id']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['limit' => 20, 'offset' => 0]);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        $optionsResolver->addAllowedTypes('offset', ['int']);
        $optionsResolver->addAllowedTypes('before', ['string']);
        $optionsResolver->addAllowedTypes('after', ['string']);
        $optionsResolver->addAllowedTypes('page.id', ['string']);

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
     * @return \Em411\Allegro\Api\Model\MessagesList|\Em411\Allegro\Api\Model\MessagesListVBeta1|null
     *
     * @throws \Em411\Allegro\Api\Exception\ListMessagesGETUnauthorizedException
     * @throws \Em411\Allegro\Api\Exception\ListMessagesGETForbiddenException
     * @throws \Em411\Allegro\Api\Exception\ListMessagesGETNotFoundException
     * @throws \Em411\Allegro\Api\Exception\ListMessagesGETUnprocessableEntityException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            if (false !== stripos(strtolower($contentType), 'application/vnd.allegro.public.v1+json')) {
                return $serializer->deserialize($body, 'Em411\Allegro\Api\Model\MessagesList', 'json');
            }
            if (false !== stripos(strtolower($contentType), 'application/vnd.allegro.beta.v1+json')) {
                return $serializer->deserialize($body, 'Em411\Allegro\Api\Model\MessagesListVBeta1', 'json');
            }
        }
        if (401 === $status) {
            throw new \Em411\Allegro\Api\Exception\ListMessagesGETUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Em411\Allegro\Api\Exception\ListMessagesGETForbiddenException($response);
        }
        if (404 === $status) {
            throw new \Em411\Allegro\Api\Exception\ListMessagesGETNotFoundException($response);
        }
        if (422 === $status) {
            throw new \Em411\Allegro\Api\Exception\ListMessagesGETUnprocessableEntityException($response);
        }
    }
}
