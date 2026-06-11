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

class GetFlexibleBundleUsingGET extends \Em411\Allegro\Api\Runtime\Client\BaseEndpoint implements \Em411\Allegro\Api\Runtime\Client\Endpoint
{
    use \Em411\Allegro\Api\Runtime\Client\EndpointTrait;
    protected $bundleId;

    /**
     * Use this resource to retrieve flexible bundle by its unique identifier.
     *
     * @param string $bundleId bundle ID
     */
    public function __construct(string $bundleId)
    {
        $this->bundleId = $bundleId;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{bundleId}'], [$this->bundleId], '/sale/flexible-bundles/{bundleId}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
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

    /**
     * @return \Em411\Allegro\Api\Model\FlexibleBundleGetDTO|null
     *
     * @throws \Em411\Allegro\Api\Exception\GetFlexibleBundleUsingGETUnauthorizedException
     * @throws \Em411\Allegro\Api\Exception\GetFlexibleBundleUsingGETNotFoundException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ((null === $contentType) === false && (200 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            return $serializer->deserialize($body, 'Em411\Allegro\Api\Model\FlexibleBundleGetDTO', 'json');
        }
        if ((null === $contentType) === false && (401 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            throw new \Em411\Allegro\Api\Exception\GetFlexibleBundleUsingGETUnauthorizedException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\AuthError', 'json'), $response);
        }
        if ((null === $contentType) === false && (404 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            throw new \Em411\Allegro\Api\Exception\GetFlexibleBundleUsingGETNotFoundException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\ErrorsHolder', 'json'), $response);
        }
    }
}
