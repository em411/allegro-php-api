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

class BillingEntryOffer extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * ID of the offer associated with the billing entry.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Name of the offer associated with the billing entry. This field is populated asynchronously, which means the value may appear with a delay.
     *
     * @var string|null
     */
    protected $name;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * ID of the offer associated with the billing entry.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * ID of the offer associated with the billing entry.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Name of the offer associated with the billing entry. This field is populated asynchronously, which means the value may appear with a delay.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Name of the offer associated with the billing entry. This field is populated asynchronously, which means the value may appear with a delay.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }
}
