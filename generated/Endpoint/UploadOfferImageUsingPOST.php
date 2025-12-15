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

class UploadOfferImageUsingPOST extends \Em411\Allegro\Api\Runtime\Client\BaseEndpoint implements \Em411\Allegro\Api\Runtime\Client\Endpoint
{
    use \Em411\Allegro\Api\Runtime\Client\EndpointTrait;

    /**
     * Upload image to our servers.
     * You can choose from two upload options:
     *   * \- provide a link and we will download an image for you
     *   * \- send an image as binary data
     * **Important!** Remember to use dedicated domain for upload, i.e.
     *   * \- https://upload.allegro.pl for Production
     *   * \- https://upload.allegro.pl.allegrosandbox.pl for Sandbox
     * Read more about the rules for photos in an offer's gallery and description: <a href="https://help.allegro.com/pl/sell/a/zasady-dla-zdjec-w-galerii-i-w-opisie-8dvWz3eo4T5?marketplaceId=allegro-pl" target="_blank">PL</a> / <a href="https://help.allegro.com/en/sell/a/rules-for-images-in-the-gallery-and-in-descriptions-8dvWB8Y2PIq" target="_blank">EN</a>.
     *
     * @param \Em411\Allegro\Api\Model\OfferImageLinkUploadRequest|string|resource|\Psr\Http\Message\StreamInterface|null $requestBody
     * @param array                                                                                                       $headerParameters {
     *
     * @var string $Accept-Language Expected language of messages.
     *             }
     */
    public function __construct($requestBody = null, array $headerParameters = [])
    {
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/sale/images';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Em411\Allegro\Api\Model\OfferImageLinkUploadRequest) {
            return [['Content-Type' => ['application/vnd.allegro.public.v1+json']], $serializer->serialize($this->body, 'json')];
        }
        if (\is_string($this->body) || \is_resource($this->body) || $this->body instanceof \Psr\Http\Message\StreamInterface) {
            return [['Content-Type' => ['image/jpeg']], $this->body];
        }
        if (\is_string($this->body) || \is_resource($this->body) || $this->body instanceof \Psr\Http\Message\StreamInterface) {
            return [['Content-Type' => ['image/png']], $this->body];
        }
        if (\is_string($this->body) || \is_resource($this->body) || $this->body instanceof \Psr\Http\Message\StreamInterface) {
            return [['Content-Type' => ['image/webp']], $this->body];
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
     * @return \Em411\Allegro\Api\Model\OfferImageUploadResponse|null
     *
     * @throws \Em411\Allegro\Api\Exception\UploadOfferImageUsingPOSTBadRequestException
     * @throws \Em411\Allegro\Api\Exception\UploadOfferImageUsingPOSTUnauthorizedException
     * @throws \Em411\Allegro\Api\Exception\UploadOfferImageUsingPOSTForbiddenException
     * @throws \Em411\Allegro\Api\Exception\UploadOfferImageUsingPOSTRequestEntityTooLargeException
     * @throws \Em411\Allegro\Api\Exception\UploadOfferImageUsingPOSTUnsupportedMediaTypeException
     * @throws \Em411\Allegro\Api\Exception\UploadOfferImageUsingPOSTUnprocessableEntityException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ((null === $contentType) === false && (201 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            return $serializer->deserialize($body, 'Em411\Allegro\Api\Model\OfferImageUploadResponse', 'json');
        }
        if (400 === $status) {
            throw new \Em411\Allegro\Api\Exception\UploadOfferImageUsingPOSTBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Em411\Allegro\Api\Exception\UploadOfferImageUsingPOSTUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Em411\Allegro\Api\Exception\UploadOfferImageUsingPOSTForbiddenException($response);
        }
        if (413 === $status) {
            throw new \Em411\Allegro\Api\Exception\UploadOfferImageUsingPOSTRequestEntityTooLargeException($response);
        }
        if (415 === $status) {
            throw new \Em411\Allegro\Api\Exception\UploadOfferImageUsingPOSTUnsupportedMediaTypeException($response);
        }
        if (422 === $status) {
            throw new \Em411\Allegro\Api\Exception\UploadOfferImageUsingPOSTUnprocessableEntityException($response);
        }
    }
}
