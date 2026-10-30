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

namespace Em411\Allegro\Api\Model;

use Em411\Allegro\Api\Runtime\AdditionalAndPatternProperties;
use Em411\Allegro\Api\Runtime\AdditionalPropertiesInterface;

class OrderRefundClaimsGetResponse200 implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Collection of refund applications.
     *
     * @var list<RefundClaim>|null
     */
    protected $refundClaims;
    /**
     * Count of refund applications returned.
     *
     * @var int|null
     */
    protected $count;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Collection of refund applications.
     *
     * @return list<RefundClaim>|null
     */
    public function getRefundClaims(): ?array
    {
        return $this->refundClaims;
    }

    /**
     * Collection of refund applications.
     *
     * @param list<RefundClaim>|null $refundClaims
     */
    public function setRefundClaims(?array $refundClaims): self
    {
        $this->initialized['refundClaims'] = true;
        $this->refundClaims = $refundClaims;

        return $this;
    }

    /**
     * Count of refund applications returned.
     */
    public function getCount(): ?int
    {
        return $this->count;
    }

    /**
     * Count of refund applications returned.
     */
    public function setCount(?int $count): self
    {
        $this->initialized['count'] = true;
        $this->count = $count;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['refundClaims' => ['refundClaims', 'getRefundClaims', 'setRefundClaims'], 'count' => ['count', 'getCount', 'setCount']];
    }
}
