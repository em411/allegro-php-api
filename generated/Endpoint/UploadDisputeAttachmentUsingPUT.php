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

class UploadDisputeAttachmentUsingPUT extends \Em411\Allegro\Api\Runtime\Client\BaseEndpoint implements \Em411\Allegro\Api\Runtime\Client\Endpoint
{
    use \Em411\Allegro\Api\Runtime\Client\EndpointTrait;
    protected $attachmentId;

    /**
     * Upload a dispute message attachment.
     * This operation should be used after creating an attachment declaration with *POST /sale/dispute-attachments*
     * **Important!** You can find the URL address to upload the file to our server in the *Location* response header of *POST /sale/dispute-attachments*. The URL is unique and one-time. As its format may change in time, you should always use the address from the header. Do not compose the address on your own. Read more: <a href="../../tutorials/jak-zarzadzac-dyskusjami-E7Zj6gK7ysE#dodanie-zalacznika" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-discussions-VL6Yr40e5t5#adding-an-attachment" target="_blank">EN</a>.
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
        return str_replace(['{attachmentId}'], [$this->attachmentId], '/sale/dispute-attachments/{attachmentId}');
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
     * @throws \Em411\Allegro\Api\Exception\UploadDisputeAttachmentUsingPUTBadRequestException
     * @throws \Em411\Allegro\Api\Exception\UploadDisputeAttachmentUsingPUTUnauthorizedException
     * @throws \Em411\Allegro\Api\Exception\UploadDisputeAttachmentUsingPUTRequestEntityTooLargeException
     * @throws \Em411\Allegro\Api\Exception\UploadDisputeAttachmentUsingPUTUnsupportedMediaTypeException
     * @throws \Em411\Allegro\Api\Exception\UploadDisputeAttachmentUsingPUTUnprocessableEntityException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Em411\Allegro\Api\Exception\UploadDisputeAttachmentUsingPUTBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Em411\Allegro\Api\Exception\UploadDisputeAttachmentUsingPUTUnauthorizedException($response);
        }
        if (413 === $status) {
            throw new \Em411\Allegro\Api\Exception\UploadDisputeAttachmentUsingPUTRequestEntityTooLargeException($response);
        }
        if (415 === $status) {
            throw new \Em411\Allegro\Api\Exception\UploadDisputeAttachmentUsingPUTUnsupportedMediaTypeException($response);
        }
        if (422 === $status) {
            throw new \Em411\Allegro\Api\Exception\UploadDisputeAttachmentUsingPUTUnprocessableEntityException($response);
        }
    }
}
