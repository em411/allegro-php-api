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

class FundraisingCampaign extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * unique campaign identifier.
     *
     * @var string|null
     */
    protected $id;
    /**
     * campaign name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * @var CharityOrganization|null
     */
    protected $organization;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * unique campaign identifier.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * unique campaign identifier.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * campaign name.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * campaign name.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    public function getOrganization(): ?CharityOrganization
    {
        return $this->organization;
    }

    public function setOrganization(?CharityOrganization $organization): self
    {
        $this->initialized['organization'] = true;
        $this->organization = $organization;

        return $this;
    }
}
