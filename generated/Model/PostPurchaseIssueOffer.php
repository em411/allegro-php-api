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

use Em411\Allegro\Api\Runtime\AdditionalAndPatternProperties;
use Em411\Allegro\Api\Runtime\AdditionalPropertiesInterface;

class PostPurchaseIssueOffer implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The offer that is the subject of this issue.
     *
     * @var string|null
     */
    protected $id;
    /**
     * How many instances of this offer are subject to this issue.
     *
     * @var int|null
     */
    protected $quantity;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The offer that is the subject of this issue.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * The offer that is the subject of this issue.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * How many instances of this offer are subject to this issue.
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    /**
     * How many instances of this offer are subject to this issue.
     */
    public function setQuantity(?int $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['id' => ['id', 'getId', 'setId'], 'quantity' => ['quantity', 'getQuantity', 'setQuantity']];
    }
}
