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

class CheckoutFormReference extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Checkout form identifier.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Checkout form revision.
     *
     * @var string|null
     */
    protected $revision;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Checkout form identifier.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Checkout form identifier.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Checkout form revision.
     */
    public function getRevision(): ?string
    {
        return $this->revision;
    }

    /**
     * Checkout form revision.
     */
    public function setRevision(?string $revision): self
    {
        $this->initialized['revision'] = true;
        $this->revision = $revision;

        return $this;
    }
}
