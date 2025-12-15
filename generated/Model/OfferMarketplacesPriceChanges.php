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

class OfferMarketplacesPriceChanges extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * ID of the marketplace on which the price has been changed.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Change type. One of MANUAL or AUTOMATIC.
     *
     * @var string|null
     */
    protected $changeType;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * ID of the marketplace on which the price has been changed.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * ID of the marketplace on which the price has been changed.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Change type. One of MANUAL or AUTOMATIC.
     */
    public function getChangeType(): ?string
    {
        return $this->changeType;
    }

    /**
     * Change type. One of MANUAL or AUTOMATIC.
     */
    public function setChangeType(?string $changeType): self
    {
        $this->initialized['changeType'] = true;
        $this->changeType = $changeType;

        return $this;
    }
}
