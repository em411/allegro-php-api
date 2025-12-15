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

class MarketplacesVisibility extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Base marketplace ID.
     *
     * @var string|null
     */
    protected $base;
    /**
     * Additional marketplaces information.
     *
     * @var list<AdditionalMarketplacesVisibility>|null
     */
    protected $additional;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Base marketplace ID.
     */
    public function getBase(): ?string
    {
        return $this->base;
    }

    /**
     * Base marketplace ID.
     */
    public function setBase(?string $base): self
    {
        $this->initialized['base'] = true;
        $this->base = $base;

        return $this;
    }

    /**
     * Additional marketplaces information.
     *
     * @return list<AdditionalMarketplacesVisibility>|null
     */
    public function getAdditional(): ?array
    {
        return $this->additional;
    }

    /**
     * Additional marketplaces information.
     *
     * @param list<AdditionalMarketplacesVisibility>|null $additional
     */
    public function setAdditional(?array $additional): self
    {
        $this->initialized['additional'] = true;
        $this->additional = $additional;

        return $this;
    }
}
