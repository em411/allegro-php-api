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

class Order extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Order id.
     *
     * @var string|null
     */
    protected $id;
    /**
     * List of order offers.
     *
     * @var list<OrderOffersItem>|null
     */
    protected $offers;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Order id.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Order id.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * List of order offers.
     *
     * @return list<OrderOffersItem>|null
     */
    public function getOffers(): ?array
    {
        return $this->offers;
    }

    /**
     * List of order offers.
     *
     * @param list<OrderOffersItem>|null $offers
     */
    public function setOffers(?array $offers): self
    {
        $this->initialized['offers'] = true;
        $this->offers = $offers;

        return $this;
    }
}
