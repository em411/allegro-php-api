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

class ListThreadsGET extends \Em411\Allegro\Api\Runtime\Client\BaseEndpoint implements \Em411\Allegro\Api\Runtime\Client\Endpoint
{
    use \Em411\Allegro\Api\Runtime\Client\EndpointTrait;
    protected $accept;

    /**
     * Use this resource to get the list of user threads sorted by last message date, starting from newest. Read more: <a href="../../tutorials/jak-zarzadzac-centrum-wiadomosci-XxWm2K890Fk#lista-watkow-na-koncie" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-the-message-center-g05avyGlZUW#list-of-threads" target="_blank">EN</a>.
     *
     * @param array $queryParameters {
     *
     * @var int    $limit the maximum number of threads returned in the response
     * @var int    $offset Index of the first returned thread from all results. Available only for content version 'application/vnd.allegro.public.v1+json'.
     * @var string $page.id ID of the page of threads to retrieve. Available only for content version 'application/vnd.allegro.beta.v1+json'.
     * @var bool   $read Filters threads by read status. Available only for content version 'application/vnd.allegro.beta.v1+json'.
     * @var string $status Filters threads by status. Available only for content version 'application/vnd.allegro.beta.v1+json'.
     * @var array  $type Filters threads by their type. Available only for content version 'application/vnd.allegro.beta.v1+json'. If omitted, threads of all types are returned. If you pass multiple values, the response includes threads whose type matches any of them.
     * @var string $orderId Filters POST_PURCHASE_ISSUE threads by order identifier. Available only for content version 'application/vnd.allegro.beta.v1+json'.
     *             }
     *
     * @param array $headerParameters {
     *
     * @var string $Accept-Language Expected language of messages.
     *             }
     *
     * @param array $accept Accept content header application/vnd.allegro.public.v1+json|application/vnd.allegro.beta.v1+json
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
        return '/messaging/threads';
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
        $optionsResolver->setDefined(['limit', 'offset', 'page.id', 'read', 'status', 'type', 'orderId']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['limit' => 20, 'offset' => 0]);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        $optionsResolver->addAllowedTypes('offset', ['int']);
        $optionsResolver->addAllowedTypes('page.id', ['string']);
        $optionsResolver->addAllowedTypes('read', ['bool']);
        $optionsResolver->addAllowedTypes('status', ['string']);
        $optionsResolver->addAllowedTypes('type', ['array']);
        $optionsResolver->addAllowedTypes('orderId', ['string']);

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
     * @return \Em411\Allegro\Api\Model\ThreadsList|\Em411\Allegro\Api\Model\ThreadsListVBeta1|null
     *
     * @throws \Em411\Allegro\Api\Exception\ListThreadsGETUnauthorizedException
     * @throws \Em411\Allegro\Api\Exception\ListThreadsGETUnprocessableEntityException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            if (false !== mb_strpos(strtolower($contentType), 'application/vnd.allegro.public.v1+json')) {
                return $serializer->deserialize($body, 'Em411\Allegro\Api\Model\ThreadsList', 'json');
            }
            if (false !== mb_strpos(strtolower($contentType), 'application/vnd.allegro.beta.v1+json')) {
                return $serializer->deserialize($body, 'Em411\Allegro\Api\Model\ThreadsListVBeta1', 'json');
            }
        }
        if (401 === $status) {
            throw new \Em411\Allegro\Api\Exception\ListThreadsGETUnauthorizedException($response);
        }
        if (422 === $status) {
            throw new \Em411\Allegro\Api\Exception\ListThreadsGETUnprocessableEntityException($response);
        }
    }
}
