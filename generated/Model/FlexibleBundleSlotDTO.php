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

class FlexibleBundleSlotDTO extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Slot identifier (not provided when creating new bundle).
     *
     * @var string|null
     */
    protected $id;
    /**
     * Slot order in the bundle.
     *
     * @var int|null
     */
    protected $order;
    /**
     * Indicates if this slot is an entry point.
     *
     * @var bool|null
     */
    protected $entryPoint;
    /**
     * Required quantity of offers from this slot.
     *
     * @var int|null
     */
    protected $requiredQuantity;
    /**
     * List of offers in this slot.
     *
     * @var list<FlexibleBundleOfferDTO>|null
     */
    protected $offers;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Slot identifier (not provided when creating new bundle).
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Slot identifier (not provided when creating new bundle).
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Slot order in the bundle.
     */
    public function getOrder(): ?int
    {
        return $this->order;
    }

    /**
     * Slot order in the bundle.
     */
    public function setOrder(?int $order): self
    {
        $this->initialized['order'] = true;
        $this->order = $order;

        return $this;
    }

    /**
     * Indicates if this slot is an entry point.
     */
    public function getEntryPoint(): ?bool
    {
        return $this->entryPoint;
    }

    /**
     * Indicates if this slot is an entry point.
     */
    public function setEntryPoint(?bool $entryPoint): self
    {
        $this->initialized['entryPoint'] = true;
        $this->entryPoint = $entryPoint;

        return $this;
    }

    /**
     * Required quantity of offers from this slot.
     */
    public function getRequiredQuantity(): ?int
    {
        return $this->requiredQuantity;
    }

    /**
     * Required quantity of offers from this slot.
     */
    public function setRequiredQuantity(?int $requiredQuantity): self
    {
        $this->initialized['requiredQuantity'] = true;
        $this->requiredQuantity = $requiredQuantity;

        return $this;
    }

    /**
     * List of offers in this slot.
     *
     * @return list<FlexibleBundleOfferDTO>|null
     */
    public function getOffers(): ?array
    {
        return $this->offers;
    }

    /**
     * List of offers in this slot.
     *
     * @param list<FlexibleBundleOfferDTO>|null $offers
     */
    public function setOffers(?array $offers): self
    {
        $this->initialized['offers'] = true;
        $this->offers = $offers;

        return $this;
    }
}
