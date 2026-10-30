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

class ResponsiblePersonsPUT extends \Em411\Allegro\Api\Runtime\Client\BaseEndpoint implements \Em411\Allegro\Api\Runtime\Client\Endpoint
{
    use \Em411\Allegro\Api\Runtime\Client\EndpointTrait;
    protected $id;
    protected $accept;

    /**
     * Use this resource to update the responsible person for the compliance of the product with EU regulations. Read more: <a href="../../tutorials/jak-zarzadzac-kontem-danymi-uzytkownika-ZM9YAKgPgi2#osoba-odpowiedzialna-za-zgodnosc-produktu-z-przepisami-unijnymi" target="_blank">PL</a> / <a href="../../tutorials/account-and-user-data-management-jn9vBjqjnsw#responsible-persons-for-the-compliance-of-the-product-with-eu-regulations" target="_blank">EN</a>.
     *
     * @param string $id responsible person ID
     * @param array{
     *    "Accept": string, //Acceptable representation of the response.
     *    "Content-Type": string, //Content type of the request body.
     *    "Accept-Language"?: string, //Expected language of messages.
     * } $headerParameters
     * @param array $accept Accept content header application/vnd.allegro.public.v1+json|application/json
     */
    public function __construct(string $id, ?\Em411\Allegro\Api\Model\UpdateResponsiblePersonRequest $requestBody = null, array $headerParameters = [], array $accept = [])
    {
        $this->id = $id;
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
        $this->accept = $accept;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [rawurlencode($this->id)], '/sale/responsible-persons/{id}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Em411\Allegro\Api\Model\UpdateResponsiblePersonRequest) {
            return [['Content-Type' => ['application/vnd.allegro.public.v1+json']], \Em411\Allegro\Api\Runtime\Client\JsonPayload::encode($serializer, $this->body)];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['application/vnd.allegro.public.v1+json', 'application/json']];
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
        $optionsResolver->setDefined(['Accept', 'Content-Type', 'Accept-Language']);
        $optionsResolver->setRequired(['Accept', 'Content-Type']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('Accept', ['string']);
        $optionsResolver->addAllowedTypes('Content-Type', ['string']);
        $optionsResolver->addAllowedTypes('Accept-Language', ['string']);

        return $optionsResolver;
    }

    /**
     * @return \Em411\Allegro\Api\Model\ResponsiblePersonResponse|null
     *
     * @throws \Em411\Allegro\Api\Exception\ResponsiblePersonsPUTBadRequestException
     * @throws \Em411\Allegro\Api\Exception\ResponsiblePersonsPUTUnauthorizedException
     * @throws \Em411\Allegro\Api\Exception\ResponsiblePersonsPUTForbiddenException
     * @throws \Em411\Allegro\Api\Exception\ResponsiblePersonsPUTUnprocessableEntityException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ((null === $contentType) === false && (200 === $status && false !== stripos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            return $serializer->deserialize($body, 'Em411\Allegro\Api\Model\ResponsiblePersonResponse', 'json');
        }
        if ((null === $contentType) === false && (400 === $status && false !== stripos(strtolower($contentType), 'application/json'))) {
            throw new \Em411\Allegro\Api\Exception\ResponsiblePersonsPUTBadRequestException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\ErrorsHolder', 'json'), $response);
        }
        if ((null === $contentType) === false && (401 === $status && false !== stripos(strtolower($contentType), 'application/json'))) {
            throw new \Em411\Allegro\Api\Exception\ResponsiblePersonsPUTUnauthorizedException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\AuthError', 'json'), $response);
        }
        if ((null === $contentType) === false && (403 === $status && false !== stripos(strtolower($contentType), 'application/json'))) {
            throw new \Em411\Allegro\Api\Exception\ResponsiblePersonsPUTForbiddenException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\ErrorsHolder', 'json'), $response);
        }
        if ((null === $contentType) === false && (422 === $status && false !== stripos(strtolower($contentType), 'application/json'))) {
            throw new \Em411\Allegro\Api\Exception\ResponsiblePersonsPUTUnprocessableEntityException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\ErrorsHolder', 'json'), $response);
        }
    }
}
