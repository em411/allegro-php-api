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

class UserRatingSummaryResponseV2StatisticsReceived implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Total number of received ratings.
     *
     * @var int|null
     */
    protected $total;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Total number of received ratings.
     */
    public function getTotal(): ?int
    {
        return $this->total;
    }

    /**
     * Total number of received ratings.
     */
    public function setTotal(?int $total): self
    {
        $this->initialized['total'] = true;
        $this->total = $total;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['total' => ['total', 'getTotal', 'setTotal']];
    }
}
