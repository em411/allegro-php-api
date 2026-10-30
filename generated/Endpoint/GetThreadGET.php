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

class GetThreadGET extends \Em411\Allegro\Api\Runtime\Client\BaseEndpoint implements \Em411\Allegro\Api\Runtime\Client\Endpoint
{
    use \Em411\Allegro\Api\Runtime\Client\EndpointTrait;
    protected $threadId;
    protected $accept;

    /**
     * Use this resource to get thread with provided identifier. Read more: <a href="../../tutorials/jak-zarzadzac-centrum-wiadomosci-XxWm2K890Fk#szczegolowe-informacje-o-danym-watku" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-the-message-center-g05avyGlZUW#information-about-a-particular-thread" target="_blank">EN</a>.
     *
     * @param string $threadId identifier of thread to get
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param array $accept Accept content header application/vnd.allegro.public.v1+json|application/vnd.allegro.beta.v1+json
     */
    public function __construct(string $threadId, array $headerParameters = [], array $accept = [])
    {
        $this->threadId = $threadId;
        $this->headerParameters = $headerParameters;
        $this->accept = $accept;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{threadId}'], [rawurlencode($this->threadId)], '/messaging/threads/{threadId}');
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
     * @return \Em411\Allegro\Api\Model\Thread|\Em411\Allegro\Api\Model\ThreadVBeta1|null
     *
     * @throws \Em411\Allegro\Api\Exception\GetThreadGETUnauthorizedException
     * @throws \Em411\Allegro\Api\Exception\GetThreadGETNotFoundException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            if (false !== stripos(strtolower($contentType), 'application/vnd.allegro.public.v1+json')) {
                return $serializer->deserialize($body, 'Em411\Allegro\Api\Model\Thread', 'json');
            }
            if (false !== stripos(strtolower($contentType), 'application/vnd.allegro.beta.v1+json')) {
                return $serializer->deserialize($body, 'Em411\Allegro\Api\Model\ThreadVBeta1', 'json');
            }
        }
        if (401 === $status) {
            throw new \Em411\Allegro\Api\Exception\GetThreadGETUnauthorizedException($response);
        }
        if (404 === $status) {
            throw new \Em411\Allegro\Api\Exception\GetThreadGETNotFoundException($response);
        }
    }
}
