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

class SubsidyOfferToSubmitMarketplace extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Marketplace identifier (e.g., allegro-pl, allegro-cz).
     *
     * @var string|null
     */
    protected $id;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Marketplace identifier (e.g., allegro-pl, allegro-cz).
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Marketplace identifier (e.g., allegro-pl, allegro-cz).
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }
}
