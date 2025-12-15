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

class VariantSetOffer extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var string|null
     */
    protected $id;
    /**
     * Label that allows to group variants via image. All variants having the same image should have identical identifier in this field.
     *
     * @var string|null
     */
    protected $colorPattern;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Label that allows to group variants via image. All variants having the same image should have identical identifier in this field.
     */
    public function getColorPattern(): ?string
    {
        return $this->colorPattern;
    }

    /**
     * Label that allows to group variants via image. All variants having the same image should have identical identifier in this field.
     */
    public function setColorPattern(?string $colorPattern): self
    {
        $this->initialized['colorPattern'] = true;
        $this->colorPattern = $colorPattern;

        return $this;
    }
}
