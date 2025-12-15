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

class UploadAfterSalesServiceConditionsAttachmentUsingPUT extends \Em411\Allegro\Api\Runtime\Client\BaseEndpoint implements \Em411\Allegro\Api\Runtime\Client\Endpoint
{
    use \Em411\Allegro\Api\Runtime\Client\EndpointTrait;
    protected $attachmentId;

    /**
     * Upload an after sale services attachment.
     * This operation should be used after creating an offer attachment with *POST /sale/offer-attachments*
     * **Important!** You can find the URL address to upload the file to our server in the *Location* response header of *POST /after-sales-service-conditions/attachments*. The URL is unique and one-time. As its format may change in time, you should always use the address from the header. Do not compose the address on your own. Read more: <a href="../../tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-dodac-zalacznik-do-informacji-o-gwarancjach" target="_blank">PL</a> / <a href="../../tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-add-attachment-to-warranty-information" target="_blank">EN</a>.
     *
     * @param string                                                 $attachmentId     the ID of the attachment
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
        return str_replace(['{attachmentId}'], [$this->attachmentId], '/after-sales-service-conditions/attachments/{attachmentId}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if (\is_string($this->body) || \is_resource($this->body) || $this->body instanceof \Psr\Http\Message\StreamInterface) {
            return [['Content-Type' => ['application/pdf']], $this->body];
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
     * @return \Em411\Allegro\Api\Model\AfterSalesServicesAttachment|null
     *
     * @throws \Em411\Allegro\Api\Exception\UploadAfterSalesServiceConditionsAttachmentUsingPUTBadRequestException
     * @throws \Em411\Allegro\Api\Exception\UploadAfterSalesServiceConditionsAttachmentUsingPUTUnauthorizedException
     * @throws \Em411\Allegro\Api\Exception\UploadAfterSalesServiceConditionsAttachmentUsingPUTForbiddenException
     * @throws \Em411\Allegro\Api\Exception\UploadAfterSalesServiceConditionsAttachmentUsingPUTNotFoundException
     * @throws \Em411\Allegro\Api\Exception\UploadAfterSalesServiceConditionsAttachmentUsingPUTRequestEntityTooLargeException
     * @throws \Em411\Allegro\Api\Exception\UploadAfterSalesServiceConditionsAttachmentUsingPUTUnprocessableEntityException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ((null === $contentType) === false && (200 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            return $serializer->deserialize($body, 'Em411\Allegro\Api\Model\AfterSalesServicesAttachment', 'json');
        }
        if (400 === $status) {
            throw new \Em411\Allegro\Api\Exception\UploadAfterSalesServiceConditionsAttachmentUsingPUTBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Em411\Allegro\Api\Exception\UploadAfterSalesServiceConditionsAttachmentUsingPUTUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Em411\Allegro\Api\Exception\UploadAfterSalesServiceConditionsAttachmentUsingPUTForbiddenException($response);
        }
        if (404 === $status) {
            throw new \Em411\Allegro\Api\Exception\UploadAfterSalesServiceConditionsAttachmentUsingPUTNotFoundException($response);
        }
        if (413 === $status) {
            throw new \Em411\Allegro\Api\Exception\UploadAfterSalesServiceConditionsAttachmentUsingPUTRequestEntityTooLargeException($response);
        }
        if (422 === $status) {
            throw new \Em411\Allegro\Api\Exception\UploadAfterSalesServiceConditionsAttachmentUsingPUTUnprocessableEntityException($response);
        }
    }
}
