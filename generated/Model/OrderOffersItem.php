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

class OrderOffersItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Offer ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Offer title.
     *
     * @var string|null
     */
    protected $title;
    /**
     * Offer snapshot URL parameter pointing to historical offer view.
     *
     * @var string|null
     */
    protected $snapshot;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Offer ID.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Offer ID.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Offer title.
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * Offer title.
     */
    public function setTitle(?string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;

        return $this;
    }

    /**
     * Offer snapshot URL parameter pointing to historical offer view.
     */
    public function getSnapshot(): ?string
    {
        return $this->snapshot;
    }

    /**
     * Offer snapshot URL parameter pointing to historical offer view.
     */
    public function setSnapshot(?string $snapshot): self
    {
        $this->initialized['snapshot'] = true;
        $this->snapshot = $snapshot;

        return $this;
    }
}
