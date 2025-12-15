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

class DescribesListingFee extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var Fee|null
     */
    protected $fee;
    /**
     * @var string|null
     */
    protected $name;
    /**
     * @var string|null
     */
    protected $type;
    /**
     * Pricing cycle duration, ISO 8601 duration format.
     *
     * @var string|null
     */
    protected $cycleDuration;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getFee(): ?Fee
    {
        return $this->fee;
    }

    public function setFee(?Fee $fee): self
    {
        $this->initialized['fee'] = true;
        $this->fee = $fee;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * Pricing cycle duration, ISO 8601 duration format.
     */
    public function getCycleDuration(): ?string
    {
        return $this->cycleDuration;
    }

    /**
     * Pricing cycle duration, ISO 8601 duration format.
     */
    public function setCycleDuration(?string $cycleDuration): self
    {
        $this->initialized['cycleDuration'] = true;
        $this->cycleDuration = $cycleDuration;

        return $this;
    }
}
