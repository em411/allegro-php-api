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

class SmartOfferClassificationReportClassification extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Indicates whether that particular offer is currently Smart!
     *
     * @var bool|null
     */
    protected $fulfilled;
    /**
     * Date of the most recent status change.
     *
     * @var \DateTime|null
     */
    protected $lastChanged;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Indicates whether that particular offer is currently Smart!
     */
    public function getFulfilled(): ?bool
    {
        return $this->fulfilled;
    }

    /**
     * Indicates whether that particular offer is currently Smart!
     */
    public function setFulfilled(?bool $fulfilled): self
    {
        $this->initialized['fulfilled'] = true;
        $this->fulfilled = $fulfilled;

        return $this;
    }

    /**
     * Date of the most recent status change.
     */
    public function getLastChanged(): ?\DateTime
    {
        return $this->lastChanged;
    }

    /**
     * Date of the most recent status change.
     */
    public function setLastChanged(?\DateTime $lastChanged): self
    {
        $this->initialized['lastChanged'] = true;
        $this->lastChanged = $lastChanged;

        return $this;
    }
}
