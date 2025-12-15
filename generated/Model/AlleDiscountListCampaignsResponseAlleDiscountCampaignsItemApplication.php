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

class AlleDiscountListCampaignsResponseAlleDiscountCampaignsItemApplication extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Type of campaign visibility. One possible value: - WITHIN.
     *
     * @var string|null
     */
    protected $type;
    /**
     * Provided in ISO 8601 format.
     *
     * @var \DateTime|null
     */
    protected $from;
    /**
     * Provided in ISO 8601 format.
     *
     * @var \DateTime|null
     */
    protected $to;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Type of campaign visibility. One possible value: - WITHIN.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Type of campaign visibility. One possible value: - WITHIN.
     */
    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * Provided in ISO 8601 format.
     */
    public function getFrom(): ?\DateTime
    {
        return $this->from;
    }

    /**
     * Provided in ISO 8601 format.
     */
    public function setFrom(?\DateTime $from): self
    {
        $this->initialized['from'] = true;
        $this->from = $from;

        return $this;
    }

    /**
     * Provided in ISO 8601 format.
     */
    public function getTo(): ?\DateTime
    {
        return $this->to;
    }

    /**
     * Provided in ISO 8601 format.
     */
    public function setTo(?\DateTime $to): self
    {
        $this->initialized['to'] = true;
        $this->to = $to;

        return $this;
    }
}
