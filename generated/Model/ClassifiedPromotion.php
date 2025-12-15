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

class ClassifiedPromotion extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Duration in ISO 8601 format.
     *
     * @var string|null
     */
    protected $duration;
    /**
     * Name of the promotion.
     *
     * @var string|null
     */
    protected $name;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Duration in ISO 8601 format.
     */
    public function getDuration(): ?string
    {
        return $this->duration;
    }

    /**
     * Duration in ISO 8601 format.
     */
    public function setDuration(?string $duration): self
    {
        $this->initialized['duration'] = true;
        $this->duration = $duration;

        return $this;
    }

    /**
     * Name of the promotion.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Name of the promotion.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }
}
