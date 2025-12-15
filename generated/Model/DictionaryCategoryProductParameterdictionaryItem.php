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

class DictionaryCategoryProductParameterdictionaryItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The ID of the dictionary value. Use it to set the value in an offer or in a product.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The label of the dictionary value.
     *
     * @var string|null
     */
    protected $value;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The ID of the dictionary value. Use it to set the value in an offer or in a product.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * The ID of the dictionary value. Use it to set the value in an offer or in a product.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * The label of the dictionary value.
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * The label of the dictionary value.
     */
    public function setValue(?string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;

        return $this;
    }
}
