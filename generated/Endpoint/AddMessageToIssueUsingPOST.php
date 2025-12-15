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

class AddMessageToIssueUsingPOST extends \Em411\Allegro\Api\Runtime\Client\BaseEndpoint implements \Em411\Allegro\Api\Runtime\Client\Endpoint
{
    use \Em411\Allegro\Api\Runtime\Client\EndpointTrait;
    protected $issueId;

    /**
     * Use this resource to post a message in certain issue. At least one of fields: 'text', 'attachment' has to be present. Read more: <a href="../../tutorials/jak-zarzadzac-dyskusjami-E7Zj6gK7ysE#nowa-wiadomosc-w-dyskusji-lub-reklamacji" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-discussions-VL6Yr40e5t5#new-message-in-dispute-or-claim" target="_blank">EN</a>.
     *
     * @param string $issueId          dispute or claim identifier
     * @param array  $headerParameters {
     *
     * @var string $Accept-Language Expected language of messages.
     *             }
     */
    public function __construct(string $issueId, ?\Em411\Allegro\Api\Model\MessageRequest $requestBody = null, array $headerParameters = [])
    {
        $this->issueId = $issueId;
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{issueId}'], [$this->issueId], '/sale/issues/{issueId}/message');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Em411\Allegro\Api\Model\MessageRequest) {
            return [['Content-Type' => ['application/vnd.allegro.beta.v1+json']], $serializer->serialize($this->body, 'json')];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/vnd.allegro.beta.v1+json']];
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
     * @return \Em411\Allegro\Api\Model\PostPurchaseIssueMessage|null
     *
     * @throws \Em411\Allegro\Api\Exception\AddMessageToIssueUsingPOSTBadRequestException
     * @throws \Em411\Allegro\Api\Exception\AddMessageToIssueUsingPOSTUnauthorizedException
     * @throws \Em411\Allegro\Api\Exception\AddMessageToIssueUsingPOSTForbiddenException
     * @throws \Em411\Allegro\Api\Exception\AddMessageToIssueUsingPOSTNotFoundException
     * @throws \Em411\Allegro\Api\Exception\AddMessageToIssueUsingPOSTConflictException
     * @throws \Em411\Allegro\Api\Exception\AddMessageToIssueUsingPOSTUnprocessableEntityException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ((null === $contentType) === false && (201 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.allegro.beta.v1+json'))) {
            return $serializer->deserialize($body, 'Em411\Allegro\Api\Model\PostPurchaseIssueMessage', 'json');
        }
        if (400 === $status) {
            throw new \Em411\Allegro\Api\Exception\AddMessageToIssueUsingPOSTBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Em411\Allegro\Api\Exception\AddMessageToIssueUsingPOSTUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Em411\Allegro\Api\Exception\AddMessageToIssueUsingPOSTForbiddenException($response);
        }
        if (404 === $status) {
            throw new \Em411\Allegro\Api\Exception\AddMessageToIssueUsingPOSTNotFoundException($response);
        }
        if (409 === $status) {
            throw new \Em411\Allegro\Api\Exception\AddMessageToIssueUsingPOSTConflictException($response);
        }
        if (422 === $status) {
            throw new \Em411\Allegro\Api\Exception\AddMessageToIssueUsingPOSTUnprocessableEntityException($response);
        }
    }
}
