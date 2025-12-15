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

class BillingEntryType extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Three-letter code of the billing type of the returned billing entry.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Billing type of the returned billing entry. This type is translated based on the value of the "Accept-Language" header. By default a message in English is returned.
     *
     * @var string|null
     */
    protected $name;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Three-letter code of the billing type of the returned billing entry.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Three-letter code of the billing type of the returned billing entry.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Billing type of the returned billing entry. This type is translated based on the value of the "Accept-Language" header. By default a message in English is returned.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Billing type of the returned billing entry. This type is translated based on the value of the "Accept-Language" header. By default a message in English is returned.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }
}
