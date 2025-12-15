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

class CategoryCreatedEvent extends CategoryBaseEvent
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Category event category data.
     *
     * @var CategoryEventBaseCategory|null
     */
    protected $category;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Category event category data.
     */
    public function getCategory(): ?CategoryEventBaseCategory
    {
        return $this->category;
    }

    /**
     * Category event category data.
     */
    public function setCategory(?CategoryEventBaseCategory $category): self
    {
        $this->initialized['category'] = true;
        $this->category = $category;

        return $this;
    }
}
