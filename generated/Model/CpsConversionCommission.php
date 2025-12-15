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

class CpsConversionCommission extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Publisher's commission.
     *
     * @var CpsConversionCommissionPublisher|null
     */
    protected $publisher;
    /**
     * Allegro's commission.
     *
     * @var CpsConversionCommissionAllegro|null
     */
    protected $allegro;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Publisher's commission.
     */
    public function getPublisher(): ?CpsConversionCommissionPublisher
    {
        return $this->publisher;
    }

    /**
     * Publisher's commission.
     */
    public function setPublisher(?CpsConversionCommissionPublisher $publisher): self
    {
        $this->initialized['publisher'] = true;
        $this->publisher = $publisher;

        return $this;
    }

    /**
     * Allegro's commission.
     */
    public function getAllegro(): ?CpsConversionCommissionAllegro
    {
        return $this->allegro;
    }

    /**
     * Allegro's commission.
     */
    public function setAllegro(?CpsConversionCommissionAllegro $allegro): self
    {
        $this->initialized['allegro'] = true;
        $this->allegro = $allegro;

        return $this;
    }
}
