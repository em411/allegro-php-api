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

class GetCustomerReturnById extends \Em411\Allegro\Api\Runtime\Client\BaseEndpoint implements \Em411\Allegro\Api\Runtime\Client\Endpoint
{
    use \Em411\Allegro\Api\Runtime\Client\EndpointTrait;
    protected $customerReturnId;

    /**
     * Use this resource to get customer returns by its identifier. Read more: <a href="../../tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#jak-pobrac-szczegolowe-informacje-o-zwrocie" target="_blank">PL</a> / <a href="../../tutorials/process-orders-PgPMlWDr8Cv#how-to-retrieve-detailed-information-about-customer-return" target="_blank">EN</a>.
     *
     * @param string $customerReturnId id of the customer return
     * @param array  $headerParameters {
     *
     * @var string $Accept-Language Expected language of messages.
     *             }
     */
    public function __construct(string $customerReturnId, array $headerParameters = [])
    {
        $this->customerReturnId = $customerReturnId;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{customerReturnId}'], [$this->customerReturnId], '/order/customer-returns/{customerReturnId}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
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
     * @return \Em411\Allegro\Api\Model\CustomerReturn|null
     *
     * @throws \Em411\Allegro\Api\Exception\GetCustomerReturnByIdBadRequestException
     * @throws \Em411\Allegro\Api\Exception\GetCustomerReturnByIdUnauthorizedException
     * @throws \Em411\Allegro\Api\Exception\GetCustomerReturnByIdForbiddenException
     * @throws \Em411\Allegro\Api\Exception\GetCustomerReturnByIdNotFoundException
     * @throws \Em411\Allegro\Api\Exception\GetCustomerReturnByIdNotAcceptableException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ((null === $contentType) === false && (200 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.allegro.beta.v1+json'))) {
            return $serializer->deserialize($body, 'Em411\Allegro\Api\Model\CustomerReturn', 'json');
        }
        if ((null === $contentType) === false && (400 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.allegro.beta.v1+json'))) {
            throw new \Em411\Allegro\Api\Exception\GetCustomerReturnByIdBadRequestException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\ErrorsHolder', 'json'), $response);
        }
        if ((null === $contentType) === false && (401 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.allegro.beta.v1+json'))) {
            throw new \Em411\Allegro\Api\Exception\GetCustomerReturnByIdUnauthorizedException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\AuthError', 'json'), $response);
        }
        if ((null === $contentType) === false && (403 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.allegro.beta.v1+json'))) {
            throw new \Em411\Allegro\Api\Exception\GetCustomerReturnByIdForbiddenException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\ErrorsHolder', 'json'), $response);
        }
        if ((null === $contentType) === false && (404 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.allegro.beta.v1+json'))) {
            throw new \Em411\Allegro\Api\Exception\GetCustomerReturnByIdNotFoundException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\ErrorsHolder', 'json'), $response);
        }
        if ((null === $contentType) === false && (406 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.allegro.beta.v1+json'))) {
            throw new \Em411\Allegro\Api\Exception\GetCustomerReturnByIdNotAcceptableException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\ErrorsHolder', 'json'), $response);
        }
    }
}
