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

class PickupDateProposalDto extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Internal pickup proposal ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Human readable name of pickup proposal.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Additional information for pickup proposal.
     *
     * @var string|null
     */
    protected $description;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Internal pickup proposal ID.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Internal pickup proposal ID.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Human readable name of pickup proposal.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Human readable name of pickup proposal.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * Additional information for pickup proposal.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Additional information for pickup proposal.
     */
    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }
}
