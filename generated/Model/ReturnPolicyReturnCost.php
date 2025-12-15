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

class ReturnPolicyReturnCost extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Indicates who covers the return delivery costs.
     *
     * @var string|null
     */
    protected $coveredBy;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Indicates who covers the return delivery costs.
     */
    public function getCoveredBy(): ?string
    {
        return $this->coveredBy;
    }

    /**
     * Indicates who covers the return delivery costs.
     */
    public function setCoveredBy(?string $coveredBy): self
    {
        $this->initialized['coveredBy'] = true;
        $this->coveredBy = $coveredBy;

        return $this;
    }
}
