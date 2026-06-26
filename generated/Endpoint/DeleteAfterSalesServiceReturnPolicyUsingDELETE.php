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

class DeleteAfterSalesServiceReturnPolicyUsingDELETE extends \Em411\Allegro\Api\Runtime\Client\BaseEndpoint implements \Em411\Allegro\Api\Runtime\Client\Endpoint
{
    use \Em411\Allegro\Api\Runtime\Client\EndpointTrait;
    protected $returnPolicyId;

    /**
     * Use this resource to delete a return policy definition.
     *
     * @param string $returnPolicyId   the ID of the return policy
     * @param array  $headerParameters {
     *
     * @var string $Accept-Language Expected language of messages.
     *             }
     */
    public function __construct(string $returnPolicyId, array $headerParameters = [])
    {
        $this->returnPolicyId = $returnPolicyId;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function getUri(): string
    {
        return str_replace(['{returnPolicyId}'], [$this->returnPolicyId], '/after-sales-service-conditions/return-policies/{returnPolicyId}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/vnd.allegro.public.v1 +json']];
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
     * @return \Em411\Allegro\Api\Model\ReturnPolicyResponseV1|null
     *
     * @throws \Em411\Allegro\Api\Exception\DeleteAfterSalesServiceReturnPolicyUsingDELETEBadRequestException
     * @throws \Em411\Allegro\Api\Exception\DeleteAfterSalesServiceReturnPolicyUsingDELETEUnauthorizedException
     * @throws \Em411\Allegro\Api\Exception\DeleteAfterSalesServiceReturnPolicyUsingDELETEForbiddenException
     * @throws \Em411\Allegro\Api\Exception\DeleteAfterSalesServiceReturnPolicyUsingDELETENotFoundException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ((null === $contentType) === false && (200 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.allegro.public.v1 +json'))) {
            return $serializer->deserialize($body, 'Em411\Allegro\Api\Model\ReturnPolicyResponseV1', 'json');
        }
        if (204 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Em411\Allegro\Api\Exception\DeleteAfterSalesServiceReturnPolicyUsingDELETEBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Em411\Allegro\Api\Exception\DeleteAfterSalesServiceReturnPolicyUsingDELETEUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Em411\Allegro\Api\Exception\DeleteAfterSalesServiceReturnPolicyUsingDELETEForbiddenException($response);
        }
        if (404 === $status) {
            throw new \Em411\Allegro\Api\Exception\DeleteAfterSalesServiceReturnPolicyUsingDELETENotFoundException($response);
        }
    }
}
