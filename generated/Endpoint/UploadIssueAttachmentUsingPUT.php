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

class UploadIssueAttachmentUsingPUT extends \Em411\Allegro\Api\Runtime\Client\BaseEndpoint implements \Em411\Allegro\Api\Runtime\Client\Endpoint
{
    use \Em411\Allegro\Api\Runtime\Client\EndpointTrait;
    protected $attachmentId;

    /**
     * Upload a post purchase issue message attachment.
     * This operation should be used after creating an attachment declaration with *POST /sale/issues/attachments*
     * **Important!** You can find the URL address to upload the file to our server in the *Location* response header of *POST /sale/issues/attachments*. The URL is unique and one-time. As its format may change in time, you should always use the address from the header. Do not compose the address on your own. Read more: <a href="../../tutorials/jak-zarzadzac-dyskusjami-E7Zj6gK7ysE#dodanie-zalacznika" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-discussions-VL6Yr40e5t5#adding-an-attachment" target="_blank">EN</a>.
     *
     * @param string                                                 $attachmentId     attachment identifier
     * @param string|resource|\Psr\Http\Message\StreamInterface|null $requestBody
     * @param array                                                  $headerParameters {
     *
     * @var string $Accept-Language Expected language of messages.
     *             }
     */
    public function __construct(string $attachmentId, $requestBody = null, array $headerParameters = [])
    {
        $this->attachmentId = $attachmentId;
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{attachmentId}'], [$this->attachmentId], '/sale/issues/attachments/{attachmentId}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if (\is_string($this->body) || \is_resource($this->body) || $this->body instanceof \Psr\Http\Message\StreamInterface) {
            return [['Content-Type' => ['image/png']], $this->body];
        }
        if (\is_string($this->body) || \is_resource($this->body) || $this->body instanceof \Psr\Http\Message\StreamInterface) {
            return [['Content-Type' => ['image/gif']], $this->body];
        }
        if (\is_string($this->body) || \is_resource($this->body) || $this->body instanceof \Psr\Http\Message\StreamInterface) {
            return [['Content-Type' => ['image/bmp']], $this->body];
        }
        if (\is_string($this->body) || \is_resource($this->body) || $this->body instanceof \Psr\Http\Message\StreamInterface) {
            return [['Content-Type' => ['image/tiff']], $this->body];
        }
        if (\is_string($this->body) || \is_resource($this->body) || $this->body instanceof \Psr\Http\Message\StreamInterface) {
            return [['Content-Type' => ['image/jpeg']], $this->body];
        }
        if (\is_string($this->body) || \is_resource($this->body) || $this->body instanceof \Psr\Http\Message\StreamInterface) {
            return [['Content-Type' => ['application/pdf']], $this->body];
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
     * @return \Em411\Allegro\Api\Model\DisputeAttachmentId|null
     *
     * @throws \Em411\Allegro\Api\Exception\UploadIssueAttachmentUsingPUTBadRequestException
     * @throws \Em411\Allegro\Api\Exception\UploadIssueAttachmentUsingPUTUnauthorizedException
     * @throws \Em411\Allegro\Api\Exception\UploadIssueAttachmentUsingPUTRequestEntityTooLargeException
     * @throws \Em411\Allegro\Api\Exception\UploadIssueAttachmentUsingPUTUnsupportedMediaTypeException
     * @throws \Em411\Allegro\Api\Exception\UploadIssueAttachmentUsingPUTUnprocessableEntityException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ((null === $contentType) === false && (200 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.allegro.beta.v1+json'))) {
            return $serializer->deserialize($body, 'Em411\Allegro\Api\Model\DisputeAttachmentId', 'json');
        }
        if (400 === $status) {
            throw new \Em411\Allegro\Api\Exception\UploadIssueAttachmentUsingPUTBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Em411\Allegro\Api\Exception\UploadIssueAttachmentUsingPUTUnauthorizedException($response);
        }
        if (413 === $status) {
            throw new \Em411\Allegro\Api\Exception\UploadIssueAttachmentUsingPUTRequestEntityTooLargeException($response);
        }
        if (415 === $status) {
            throw new \Em411\Allegro\Api\Exception\UploadIssueAttachmentUsingPUTUnsupportedMediaTypeException($response);
        }
        if (422 === $status) {
            throw new \Em411\Allegro\Api\Exception\UploadIssueAttachmentUsingPUTUnprocessableEntityException($response);
        }
    }
}
