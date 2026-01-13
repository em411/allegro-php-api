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

class ChangeStatusOfIssueUsingPOST extends \Em411\Allegro\Api\Runtime\Client\BaseEndpoint implements \Em411\Allegro\Api\Runtime\Client\Endpoint
{
    use \Em411\Allegro\Api\Runtime\Client\EndpointTrait;
    protected $issueId;

    /**
     * Change the formal status of a claim, for example accept or reject it. Not a valid operation for disputes. Read more: <a href="../../tutorials/jak-zarzadzac-dyskusjami-E7Zj6gK7ysE#zmien-status-reklamacji" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-discussions-VL6Yr40e5t5#change-claim-status" target="_blank">EN</a>.
     *
     * @param string $issueId          claim identifier
     * @param array  $headerParameters {
     *
     * @var string $Accept-Language Expected language of messages.
     *             }
     */
    public function __construct(string $issueId, ?\Em411\Allegro\Api\Model\ClaimStatusChangeRequest $requestBody = null, array $headerParameters = [])
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
        return str_replace(['{issueId}'], [$this->issueId], '/sale/issues/{issueId}/status');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Em411\Allegro\Api\Model\ClaimStatusChangeRequest) {
            return [['Content-Type' => ['application/vnd.allegro.beta.v1+json']], $serializer->serialize($this->body, 'json')];
        }

        return [[], null];
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
     * @throws \Em411\Allegro\Api\Exception\ChangeStatusOfIssueUsingPOSTBadRequestException
     * @throws \Em411\Allegro\Api\Exception\ChangeStatusOfIssueUsingPOSTUnauthorizedException
     * @throws \Em411\Allegro\Api\Exception\ChangeStatusOfIssueUsingPOSTForbiddenException
     * @throws \Em411\Allegro\Api\Exception\ChangeStatusOfIssueUsingPOSTNotFoundException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Em411\Allegro\Api\Exception\ChangeStatusOfIssueUsingPOSTBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Em411\Allegro\Api\Exception\ChangeStatusOfIssueUsingPOSTUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Em411\Allegro\Api\Exception\ChangeStatusOfIssueUsingPOSTForbiddenException($response);
        }
        if (404 === $status) {
            throw new \Em411\Allegro\Api\Exception\ChangeStatusOfIssueUsingPOSTNotFoundException($response);
        }
    }
}
