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

class NewMessagePOST extends \Em411\Allegro\Api\Runtime\Client\BaseEndpoint implements \Em411\Allegro\Api\Runtime\Client\Endpoint
{
    use \Em411\Allegro\Api\Runtime\Client\EndpointTrait;
    protected $accept;

    /**
     * Use this resource to write new message to recipient. This resource is rate limited to 1 request per second for a user. Read more: <a href="../../tutorials/jak-zarzadzac-centrum-wiadomosci-XxWm2K890Fk#nowa-wiadomosc" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-the-message-center-g05avyGlZUW#add-a-new-message" target="_blank">EN</a>.
     *
     * @param \Em411\Allegro\Api\Model\NewMessage|\Em411\Allegro\Api\Model\NewMessageVBeta1|null $requestBody
     * @param array{
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param array $accept Accept content header application/vnd.allegro.public.v1+json|application/vnd.allegro.beta.v1+json
     */
    public function __construct($requestBody = null, array $headerParameters = [], array $accept = [])
    {
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
        $this->accept = $accept;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/messaging/messages';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Em411\Allegro\Api\Model\NewMessage) {
            return [['Content-Type' => ['application/vnd.allegro.public.v1+json']], \Em411\Allegro\Api\Runtime\Client\JsonPayload::encode($serializer, $this->body)];
        }
        if ($this->body instanceof \Em411\Allegro\Api\Model\NewMessageVBeta1) {
            return [['Content-Type' => ['application/vnd.allegro.beta.v1+json']], \Em411\Allegro\Api\Runtime\Client\JsonPayload::encode($serializer, $this->body)];
        }

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
     * @return \Em411\Allegro\Api\Model\Message|\Em411\Allegro\Api\Model\MessageVBeta1|null
     *
     * @throws \Em411\Allegro\Api\Exception\NewMessagePOSTUnauthorizedException
     * @throws \Em411\Allegro\Api\Exception\NewMessagePOSTUnprocessableEntityException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (201 === $status) {
            if (false !== stripos(strtolower($contentType), 'application/vnd.allegro.public.v1+json')) {
                return $serializer->deserialize($body, 'Em411\Allegro\Api\Model\Message', 'json');
            }
            if (false !== stripos(strtolower($contentType), 'application/vnd.allegro.beta.v1+json')) {
                return $serializer->deserialize($body, 'Em411\Allegro\Api\Model\MessageVBeta1', 'json');
            }
        }
        if (401 === $status) {
            throw new \Em411\Allegro\Api\Exception\NewMessagePOSTUnauthorizedException($response);
        }
        if (422 === $status) {
            throw new \Em411\Allegro\Api\Exception\NewMessagePOSTUnprocessableEntityException($response);
        }
    }
}
