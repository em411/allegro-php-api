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

class CommissionResponse extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Commission fee name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Commission fee type.
     *
     * @var string|null
     */
    protected $type;
    /**
     * The price data.
     *
     * @var Price|null
     */
    protected $fee;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Commission fee name.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Commission fee name.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * Commission fee type.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Commission fee type.
     */
    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * The price data.
     */
    public function getFee(): ?Price
    {
        return $this->fee;
    }

    /**
     * The price data.
     */
    public function setFee(?Price $fee): self
    {
        $this->initialized['fee'] = true;
        $this->fee = $fee;

        return $this;
    }
}
