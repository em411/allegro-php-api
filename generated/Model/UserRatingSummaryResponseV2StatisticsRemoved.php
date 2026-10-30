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

class UserRatingSummaryResponseV2StatisticsRemoved implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Total number of removed ratings.
     *
     * @var int|null
     */
    protected $total;
    /**
     * Number of ratings removed by admin.
     *
     * @var int|null
     */
    protected $byAdmin;
    /**
     * Number of ratings removed by buyer.
     *
     * @var int|null
     */
    protected $byBuyer;
    /**
     * Number of ratings removed by buyer due to compensation.
     *
     * @var int|null
     */
    protected $byBuyerDueToCompensation;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Total number of removed ratings.
     */
    public function getTotal(): ?int
    {
        return $this->total;
    }

    /**
     * Total number of removed ratings.
     */
    public function setTotal(?int $total): self
    {
        $this->initialized['total'] = true;
        $this->total = $total;

        return $this;
    }

    /**
     * Number of ratings removed by admin.
     */
    public function getByAdmin(): ?int
    {
        return $this->byAdmin;
    }

    /**
     * Number of ratings removed by admin.
     */
    public function setByAdmin(?int $byAdmin): self
    {
        $this->initialized['byAdmin'] = true;
        $this->byAdmin = $byAdmin;

        return $this;
    }

    /**
     * Number of ratings removed by buyer.
     */
    public function getByBuyer(): ?int
    {
        return $this->byBuyer;
    }

    /**
     * Number of ratings removed by buyer.
     */
    public function setByBuyer(?int $byBuyer): self
    {
        $this->initialized['byBuyer'] = true;
        $this->byBuyer = $byBuyer;

        return $this;
    }

    /**
     * Number of ratings removed by buyer due to compensation.
     */
    public function getByBuyerDueToCompensation(): ?int
    {
        return $this->byBuyerDueToCompensation;
    }

    /**
     * Number of ratings removed by buyer due to compensation.
     */
    public function setByBuyerDueToCompensation(?int $byBuyerDueToCompensation): self
    {
        $this->initialized['byBuyerDueToCompensation'] = true;
        $this->byBuyerDueToCompensation = $byBuyerDueToCompensation;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['total' => ['total', 'getTotal', 'setTotal'], 'byAdmin' => ['byAdmin', 'getByAdmin', 'setByAdmin'], 'byBuyer' => ['byBuyer', 'getByBuyer', 'setByBuyer'], 'byBuyerDueToCompensation' => ['byBuyerDueToCompensation', 'getByBuyerDueToCompensation', 'setByBuyerDueToCompensation']];
    }
}
