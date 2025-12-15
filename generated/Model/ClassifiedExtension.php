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

class ClassifiedExtension extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The classified extension description.
     *
     * @var string|null
     */
    protected $description;
    /**
     * The classified extension name.
     *
     * @var string|null
     */
    protected $name;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The classified extension description.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * The classified extension description.
     */
    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    /**
     * The classified extension name.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * The classified extension name.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }
}
