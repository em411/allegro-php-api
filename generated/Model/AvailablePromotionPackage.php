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

class AvailablePromotionPackage extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Promotion package identifier.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Promotion package name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Promotion package cycle duration.
     *
     * @var string|null
     */
    protected $cycleDuration;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Promotion package identifier.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Promotion package identifier.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Promotion package name.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Promotion package name.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * Promotion package cycle duration.
     */
    public function getCycleDuration(): ?string
    {
        return $this->cycleDuration;
    }

    /**
     * Promotion package cycle duration.
     */
    public function setCycleDuration(?string $cycleDuration): self
    {
        $this->initialized['cycleDuration'] = true;
        $this->cycleDuration = $cycleDuration;

        return $this;
    }
}
