<?php

namespace Em411\Allegro\Api\Endpoint;

class GetSubmitCommand extends \Em411\Allegro\Api\Runtime\Client\BaseEndpoint implements \Em411\Allegro\Api\Runtime\Client\Endpoint
{
    protected $command-id;
    protected $accept;
    /**
     * Use this resource to get submit status of the Advance Ship Notice. Read more: <a href="../../tutorials/one-fulfillment-by-allegro-0ADwgOLqWSw#zakoncz-edycje-i-wyslij-awizo" target="_blank">PL</a> / <a href="../../tutorials/one-fulfillment-by-allegro-4R9dXyMPlc9#finish-editing-and-submit-the-advance-ship-notice" target="_blank">EN</a>.
     * @param string $commandId An identifier of the command.
     * @param array $headerParameters {
     *     @var string $Accept-Language Expected language of messages.
     * }
     * @param array $accept Accept content header application/vnd.allegro.public.v1+json|application/json
     */
    public function __construct(string $commandId = '882202c8-15ab-4a83-aeef-29ea505bf0d0', array $headerParameters = [], array $accept = [])
    {
        $this->command-id = $commandId;
        $this->headerParameters = $headerParameters;
        $this->accept = $accept;
    }
    use \Em411\Allegro\Api\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{command-id}'], [$this->command-id], '/fulfillment/submit-commands/{command-id}');
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
     * {@inheritdoc}
     *
     * @throws \Em411\Allegro\Api\Exception\GetSubmitCommandUnauthorizedException
     * @throws \Em411\Allegro\Api\Exception\GetSubmitCommandForbiddenException
     * @throws \Em411\Allegro\Api\Exception\GetSubmitCommandUnprocessableEntityException
     *
     * @return null|\Em411\Allegro\Api\Model\SubmitCommand
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/vnd.allegro.public.v1+json') !== false)) {
            return $serializer->deserialize($body, 'Em411\Allegro\Api\Model\SubmitCommand', 'json');
        }
        if (401 === $status) {
            throw new \Em411\Allegro\Api\Exception\GetSubmitCommandUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Em411\Allegro\Api\Exception\GetSubmitCommandForbiddenException($response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Em411\Allegro\Api\Exception\GetSubmitCommandUnprocessableEntityException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\ErrorsHolder', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearer-token-for-user'];
    }
}