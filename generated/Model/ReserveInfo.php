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

class ReserveInfo extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Prediction of number of days in which inventory will be sold out.
     *
     * @var float|null
     */
    protected $outOfStockIn;
    /**
     * Gives information about inventory, that can not be expressed using `outOfStockIn` property. Can be one of the given values: NOT_ENOUGH_DATA - not enough data to calculate sufficiency, LOW_STOCK - inventory quantity will run out soon (in 14 days or less) NORMAL - prediction can be calculated, EXCESS_ONE_YEAR - amount of inventory will not be exhausted in (approximately) one year threshold.
     *
     * @var string|null
     */
    protected $status;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Prediction of number of days in which inventory will be sold out.
     */
    public function getOutOfStockIn(): ?float
    {
        return $this->outOfStockIn;
    }

    /**
     * Prediction of number of days in which inventory will be sold out.
     */
    public function setOutOfStockIn(?float $outOfStockIn): self
    {
        $this->initialized['outOfStockIn'] = true;
        $this->outOfStockIn = $outOfStockIn;

        return $this;
    }

    /**
     * Gives information about inventory, that can not be expressed using `outOfStockIn` property. Can be one of the given values: NOT_ENOUGH_DATA - not enough data to calculate sufficiency, LOW_STOCK - inventory quantity will run out soon (in 14 days or less) NORMAL - prediction can be calculated, EXCESS_ONE_YEAR - amount of inventory will not be exhausted in (approximately) one year threshold.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Gives information about inventory, that can not be expressed using `outOfStockIn` property. Can be one of the given values: NOT_ENOUGH_DATA - not enough data to calculate sufficiency, LOW_STOCK - inventory quantity will run out soon (in 14 days or less) NORMAL - prediction can be calculated, EXCESS_ONE_YEAR - amount of inventory will not be exhausted in (approximately) one year threshold.
     */
    public function setStatus(?string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }
}
