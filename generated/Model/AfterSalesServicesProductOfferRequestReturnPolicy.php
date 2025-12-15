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

class AfterSalesServicesProductOfferRequestReturnPolicy extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The ID of the return policy definition.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The name of the return policy definition.
     *
     * @var string|null
     */
    protected $name;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The ID of the return policy definition.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * The ID of the return policy definition.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * The name of the return policy definition.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * The name of the return policy definition.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }
}
