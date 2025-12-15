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

class ShippingRateShippingTime extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * ISO 8601 duration format, e.g. P3D for 3 days.
     *
     * @var string|null
     */
    protected $from;
    /**
     * ISO 8601 duration format, e.g. P3D for 3 days.
     *
     * @var string|null
     */
    protected $to;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * ISO 8601 duration format, e.g. P3D for 3 days.
     */
    public function getFrom(): ?string
    {
        return $this->from;
    }

    /**
     * ISO 8601 duration format, e.g. P3D for 3 days.
     */
    public function setFrom(?string $from): self
    {
        $this->initialized['from'] = true;
        $this->from = $from;

        return $this;
    }

    /**
     * ISO 8601 duration format, e.g. P3D for 3 days.
     */
    public function getTo(): ?string
    {
        return $this->to;
    }

    /**
     * ISO 8601 duration format, e.g. P3D for 3 days.
     */
    public function setTo(?string $to): self
    {
        $this->initialized['to'] = true;
        $this->to = $to;

        return $this;
    }
}
