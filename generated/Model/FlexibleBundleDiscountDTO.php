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

class FlexibleBundleDiscountDTO extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Type of discount. WHOLE_BUNDLE_DISCOUNT means that the discount amount will be distributed proportionally across the offers in the bundle. SLOT_DISCOUNT allows you to specify which slots in the bundle are discounted and by how much, eg. slot with smartphone cases can be discounted by 20%, but slot with earphones can be not discounted at all.
     *
     * @var string|null
     */
    protected $type;
    /**
     * Whole bundle discount configuration (required when type is WHOLE_BUNDLE_DISCOUNT).
     *
     * @var array<string, mixed>|null
     */
    protected $bundle;
    /**
     * Slots discount configuration (required when type is SLOT_DISCOUNT).
     *
     * @var array<string, mixed>|null
     */
    protected $slot;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Type of discount. WHOLE_BUNDLE_DISCOUNT means that the discount amount will be distributed proportionally across the offers in the bundle. SLOT_DISCOUNT allows you to specify which slots in the bundle are discounted and by how much, eg. slot with smartphone cases can be discounted by 20%, but slot with earphones can be not discounted at all.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Type of discount. WHOLE_BUNDLE_DISCOUNT means that the discount amount will be distributed proportionally across the offers in the bundle. SLOT_DISCOUNT allows you to specify which slots in the bundle are discounted and by how much, eg. slot with smartphone cases can be discounted by 20%, but slot with earphones can be not discounted at all.
     */
    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * Whole bundle discount configuration (required when type is WHOLE_BUNDLE_DISCOUNT).
     *
     * @return array<string, mixed>|null
     */
    public function getBundle(): ?iterable
    {
        return $this->bundle;
    }

    /**
     * Whole bundle discount configuration (required when type is WHOLE_BUNDLE_DISCOUNT).
     *
     * @param array<string, mixed>|null $bundle
     */
    public function setBundle(?iterable $bundle): self
    {
        $this->initialized['bundle'] = true;
        $this->bundle = $bundle;

        return $this;
    }

    /**
     * Slots discount configuration (required when type is SLOT_DISCOUNT).
     *
     * @return array<string, mixed>|null
     */
    public function getSlot(): ?iterable
    {
        return $this->slot;
    }

    /**
     * Slots discount configuration (required when type is SLOT_DISCOUNT).
     *
     * @param array<string, mixed>|null $slot
     */
    public function setSlot(?iterable $slot): self
    {
        $this->initialized['slot'] = true;
        $this->slot = $slot;

        return $this;
    }
}
