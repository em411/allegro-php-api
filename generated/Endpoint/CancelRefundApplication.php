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

class CancelRefundApplication extends \Em411\Allegro\Api\Runtime\Client\BaseEndpoint implements \Em411\Allegro\Api\Runtime\Client\Endpoint
{
    use \Em411\Allegro\Api\Runtime\Client\EndpointTrait;
    protected $claimId;

    /**
     * Use this resource to cancel a refund application. This cannot be undone. Read more: <a href="../../tutorials/jak-obslugiwac-zamowienia-GRaj0qyvwtR#jak-anulowac-wniosek-o-rabat-transakcyjny" target="_blank">PL</a> / <a href="../../tutorials/process-orders-PgPMlWDr8Cv#how-to-cancel-sale-commission-refund" target="_blank">EN</a>.
     *
     * @param string $claimId          refund application ID
     * @param array  $headerParameters {
     *
     * @var string $Accept-Language Expected language of messages.
     *             }
     */
    public function __construct(string $claimId, array $headerParameters = [])
    {
        $this->claimId = $claimId;
        $this->headerParameters = $headerParameters;
    }

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function getUri(): string
    {
        return str_replace(['{claimId}'], [$this->claimId], '/order/refund-claims/{claimId}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
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
     * @throws \Em411\Allegro\Api\Exception\CancelRefundApplicationBadRequestException
     * @throws \Em411\Allegro\Api\Exception\CancelRefundApplicationUnauthorizedException
     * @throws \Em411\Allegro\Api\Exception\CancelRefundApplicationForbiddenException
     * @throws \Em411\Allegro\Api\Exception\CancelRefundApplicationNotFoundException
     * @throws \Em411\Allegro\Api\Exception\CancelRefundApplicationNotAcceptableException
     * @throws \Em411\Allegro\Api\Exception\CancelRefundApplicationUnprocessableEntityException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (204 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Em411\Allegro\Api\Exception\CancelRefundApplicationBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Em411\Allegro\Api\Exception\CancelRefundApplicationUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \Em411\Allegro\Api\Exception\CancelRefundApplicationForbiddenException($response);
        }
        if (404 === $status) {
            throw new \Em411\Allegro\Api\Exception\CancelRefundApplicationNotFoundException($response);
        }
        if (406 === $status) {
            throw new \Em411\Allegro\Api\Exception\CancelRefundApplicationNotAcceptableException($response);
        }
        if (422 === $status) {
            throw new \Em411\Allegro\Api\Exception\CancelRefundApplicationUnprocessableEntityException($response);
        }
    }
}
