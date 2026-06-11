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

class CreateFlexibleBundleUsingPOST extends \Em411\Allegro\Api\Runtime\Client\BaseEndpoint implements \Em411\Allegro\Api\Runtime\Client\Endpoint
{
    use \Em411\Allegro\Api\Runtime\Client\EndpointTrait;

    /**
     * You can create flexible bundle using this resource. <br> Requirements: <ul> <li> there are max 6 slots in bundle;</li> <li> order value for each slot must be unique (ranging from 0 to 5);</li> <li> each slot can contain up to 30 offers;</li> <li> all offers in slot must be from the same category leaf (based on assortment's tree);</li> <li> at least one slot has to be marked as entrypoint;</li> <li> offer can be used in bundle only once (cannot be used in multiple slots);</li> <li> only offers active on at least one marketplace can be used;</li> <li> B2B offers cannot be used;</li> <li> age-restricted offers (eg. alcohol) cannot be used;</li> <li> cannot use multiple offers which are representing same product;</li> <li> all offers in bundle have to be 1F or not 1F.</li> </ul> Read more: <a href="../../tutorials/jak-zarzadzac-rabatami-promocjami-yPya2mj6zUP#zestawy-elastyczne" target="_blank">PL</a> / <a href="../../tutorials/how-to-manage-rebates-and-promotions-g05avdL0vT4#flexible-bundles" target="_blank">EN</a>.
     */
    public function __construct(?\Em411\Allegro\Api\Model\FlexibleBundleCreateDTO $requestBody = null)
    {
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/sale/flexible-bundles';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Em411\Allegro\Api\Model\FlexibleBundleCreateDTO) {
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

    /**
     * @return \Em411\Allegro\Api\Model\FlexibleBundleGetDTO|null
     *
     * @throws \Em411\Allegro\Api\Exception\CreateFlexibleBundleUsingPOSTBadRequestException
     * @throws \Em411\Allegro\Api\Exception\CreateFlexibleBundleUsingPOSTUnauthorizedException
     * @throws \Em411\Allegro\Api\Exception\CreateFlexibleBundleUsingPOSTForbiddenException
     * @throws \Em411\Allegro\Api\Exception\CreateFlexibleBundleUsingPOSTUnprocessableEntityException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ((null === $contentType) === false && (201 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            return $serializer->deserialize($body, 'Em411\Allegro\Api\Model\FlexibleBundleGetDTO', 'json');
        }
        if ((null === $contentType) === false && (400 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            throw new \Em411\Allegro\Api\Exception\CreateFlexibleBundleUsingPOSTBadRequestException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\ErrorsHolder', 'json'), $response);
        }
        if ((null === $contentType) === false && (401 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            throw new \Em411\Allegro\Api\Exception\CreateFlexibleBundleUsingPOSTUnauthorizedException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\AuthError', 'json'), $response);
        }
        if ((null === $contentType) === false && (403 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            throw new \Em411\Allegro\Api\Exception\CreateFlexibleBundleUsingPOSTForbiddenException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\ErrorsHolder', 'json'), $response);
        }
        if ((null === $contentType) === false && (422 === $status && false !== mb_strpos(strtolower($contentType), 'application/vnd.allegro.public.v1+json'))) {
            throw new \Em411\Allegro\Api\Exception\CreateFlexibleBundleUsingPOSTUnprocessableEntityException($serializer->deserialize($body, 'Em411\Allegro\Api\Model\ErrorsHolder', 'json'), $response);
        }
    }
}
