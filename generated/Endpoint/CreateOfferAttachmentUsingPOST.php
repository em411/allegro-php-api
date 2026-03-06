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

class CreateOfferAttachmentUsingPOST extends \Em411\Allegro\Api\Runtime\Client\BaseEndpoint implements \Em411\Allegro\Api\Runtime\Client\Endpoint
{
    use \Em411\Allegro\Api\Runtime\Client\EndpointTrait;

    /**
     * You can attach pdf, jpeg or png files to your offers. We will present them under the offer description in the Additional information section.
     * You can attach multiple files to one offer – one per each type from the list:
     *   * Guide (MANUAL). Allowed media types: PDF
     *   * Special offer terms (SPECIAL_OFFER_RULES). Allowed media types: PDF
     *   * Competition terms (COMPETITION_RULES). Allowed media types: PDF
     *   * Book excerpt (BOOK_EXCERPT). Allowed media types: PDF
     *   * Manual (USER_MANUAL). Allowed media types: PDF
     *   * Installation manual (INSTALLATION_INSTRUCTIONS). Allowed media types: PDF
     *   * Game manual (GAME_INSTRUCTIONS). Allowed media types: PDF
     *   * Energy label (ENERGY_LABEL). Allowed media types: JPEG, JPG, PNG
     *   * Product information sheet (PRODUCT_INFORMATION_SHEET). Allowed media types: PDF
     *   * Tire label (TIRE_LABEL). Allowed media types: JPEG, JPG, PNG
     *   * Data processing sheet - software (SOFTWARE_DATA_PROCESSING). Allowed media types: PDF
     *   * Data processing sheet - device (HARDWARE_DATA_PROCESSING). Allowed media types: PDF
     *   * Plant Protection Products (PPPs) license (PLANT_PROTECTION_PRODUCTS_AUTHORIZATION). Allowed media types: PDF.
     *
     * You can attach up to 20 files to one product for:
     *   * Safety information manual (SAFETY_INFORMATION_MANUAL). Allowed media types: PDF, JPEG, JPG, PNG
     *
     * Uploading attachments flow:
     *   1. Create an attachment object to receive an upload URL (*POST /sale/offer-attachments*),
     *   2. Use the upload URL to submit the file (*PUT /sale/offer-attachments/{attachmentId}*),
     *   3. Add attachments to the offer (*PATCH /sale/product-offers/{offerId}*).
     *
     * Read more: <a href="../../tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#zalaczniki" target="_blank">PL</a> / <a href="../../tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#attachments" target="_blank">EN</a>.
     *
     * @param array $headerParameters {
     *
     * @var string $Accept-Language Expected language of messages.
     *             }
     */
    public function __construct(?\Em411\Allegro\Api\Model\OfferAttachmentRequest $requestBody = null, array $headerParameters = [])
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
        return '/sale/offer-attachments';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Em411\Allegro\Api\Model\OfferAttachmentRequest) {
            return [['Content-Type' => ['application/vnd.allegro.public.v1+json']], $serializer->serialize($this->body, 'json')];
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
     * @return \Em411\Allegro\Api\Model\OfferAttachment|null
     *
     * @throws \Em411\Allegro\Api\Exception\CreateOfferAttachmentUsingPOSTBadRequestException
     * @throws \Em411\Allegro\Api\Exception\CreateOfferAttachmentUsingPOSTUnauthorizedException
     * @throws \Em411\Allegro\Api\Exception\CreateOfferAttachmentUsingPOSTUnsupportedMediaTypeException
     * @throws \Em411\Allegro\Api\Exception\CreateOfferAttachmentUsingPOSTUnprocessableEntityException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ((null === $contentType) === false && (201 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            return $serializer->deserialize($body, 'Em411\Allegro\Api\Model\OfferAttachment', 'json');
        }
        if (400 === $status) {
            throw new \Em411\Allegro\Api\Exception\CreateOfferAttachmentUsingPOSTBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Em411\Allegro\Api\Exception\CreateOfferAttachmentUsingPOSTUnauthorizedException($response);
        }
        if (415 === $status) {
            throw new \Em411\Allegro\Api\Exception\CreateOfferAttachmentUsingPOSTUnsupportedMediaTypeException($response);
        }
        if (422 === $status) {
            throw new \Em411\Allegro\Api\Exception\CreateOfferAttachmentUsingPOSTUnprocessableEntityException($response);
        }
    }
}
