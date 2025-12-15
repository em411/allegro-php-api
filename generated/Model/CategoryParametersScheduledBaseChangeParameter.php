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

class CategoryParametersScheduledBaseChangeParameter extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The ID of the Parameter. This can be either in UUID format or an integer format. You should be ready to accept any string value as the parameter ID.
     *
     * @var string|null
     */
    protected $id;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The ID of the Parameter. This can be either in UUID format or an integer format. You should be ready to accept any string value as the parameter ID.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * The ID of the Parameter. This can be either in UUID format or an integer format. You should be ready to accept any string value as the parameter ID.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }
}
