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

class BundledOfferDTO extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Offer ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * How many units of this offer will be in bundle.
     *
     * @var int|null
     */
    protected $requiredQuantity;
    /**
     * Set if bundle should be shown on offer page.
     *
     * @var bool|null
     */
    protected $entryPoint;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Offer ID.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Offer ID.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * How many units of this offer will be in bundle.
     */
    public function getRequiredQuantity(): ?int
    {
        return $this->requiredQuantity;
    }

    /**
     * How many units of this offer will be in bundle.
     */
    public function setRequiredQuantity(?int $requiredQuantity): self
    {
        $this->initialized['requiredQuantity'] = true;
        $this->requiredQuantity = $requiredQuantity;

        return $this;
    }

    /**
     * Set if bundle should be shown on offer page.
     */
    public function getEntryPoint(): ?bool
    {
        return $this->entryPoint;
    }

    /**
     * Set if bundle should be shown on offer page.
     */
    public function setEntryPoint(?bool $entryPoint): self
    {
        $this->initialized['entryPoint'] = true;
        $this->entryPoint = $entryPoint;

        return $this;
    }
}
