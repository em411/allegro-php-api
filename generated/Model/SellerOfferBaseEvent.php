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

class SellerOfferBaseEvent extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The ID of the event. It can be used in the `from` parameter of the query.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The date and time when the event occurred, provided in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
     *
     * @var \DateTime|null
     */
    protected $occurredAt;
    /**
     * The type of the event.
     *
     * @var string|null
     */
    protected $type;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The ID of the event. It can be used in the `from` parameter of the query.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * The ID of the event. It can be used in the `from` parameter of the query.
     */
    public function setId(?string $id)
    {
        $this->initialized['id'] = true;
        $this->id = $id;
    }

    /**
     * The date and time when the event occurred, provided in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
     */
    public function getOccurredAt(): ?\DateTime
    {
        return $this->occurredAt;
    }

    /**
     * The date and time when the event occurred, provided in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format.
     */
    public function setOccurredAt(?\DateTime $occurredAt)
    {
        $this->initialized['occurredAt'] = true;
        $this->occurredAt = $occurredAt;
    }

    /**
     * The type of the event.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * The type of the event.
     */
    public function setType(?string $type)
    {
        $this->initialized['type'] = true;
        $this->type = $type;
    }
}
