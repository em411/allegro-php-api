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

class FlexibleBundleGetDTO extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Bundle identifier.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Who created this bundle. It is set to: <ul> <li> `USER` for all bundles created by seller on Allegro web page or via public API;</li> <li> `ALLEGRO` when bundle was created by Allegro. </li> </ul>.
     *
     * @var string|null
     */
    protected $createdBy;
    /**
     * When this bundle was created in <a href="https://en.wikipedia.org/wiki/ISO_8601" target="_blank">ISO_8601</a> format.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * List of slots in the bundle.
     *
     * @var list<FlexibleBundleGetSlotDTO>|null
     */
    protected $slots;
    /**
     * Optional discount configuration.
     *
     * @var array<string, mixed>|null
     */
    protected $discount;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Bundle identifier.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Bundle identifier.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Who created this bundle. It is set to: <ul> <li> `USER` for all bundles created by seller on Allegro web page or via public API;</li> <li> `ALLEGRO` when bundle was created by Allegro. </li> </ul>.
     */
    public function getCreatedBy(): ?string
    {
        return $this->createdBy;
    }

    /**
     * Who created this bundle. It is set to: <ul> <li> `USER` for all bundles created by seller on Allegro web page or via public API;</li> <li> `ALLEGRO` when bundle was created by Allegro. </li> </ul>.
     */
    public function setCreatedBy(?string $createdBy): self
    {
        $this->initialized['createdBy'] = true;
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * When this bundle was created in <a href="https://en.wikipedia.org/wiki/ISO_8601" target="_blank">ISO_8601</a> format.
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * When this bundle was created in <a href="https://en.wikipedia.org/wiki/ISO_8601" target="_blank">ISO_8601</a> format.
     */
    public function setCreatedAt(?\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * List of slots in the bundle.
     *
     * @return list<FlexibleBundleGetSlotDTO>|null
     */
    public function getSlots(): ?array
    {
        return $this->slots;
    }

    /**
     * List of slots in the bundle.
     *
     * @param list<FlexibleBundleGetSlotDTO>|null $slots
     */
    public function setSlots(?array $slots): self
    {
        $this->initialized['slots'] = true;
        $this->slots = $slots;

        return $this;
    }

    /**
     * Optional discount configuration.
     *
     * @return array<string, mixed>|null
     */
    public function getDiscount(): ?iterable
    {
        return $this->discount;
    }

    /**
     * Optional discount configuration.
     *
     * @param array<string, mixed>|null $discount
     */
    public function setDiscount(?iterable $discount): self
    {
        $this->initialized['discount'] = true;
        $this->discount = $discount;

        return $this;
    }
}
