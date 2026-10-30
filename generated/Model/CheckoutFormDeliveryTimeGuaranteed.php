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

use Em411\Allegro\Api\Runtime\AdditionalAndPatternProperties;
use Em411\Allegro\Api\Runtime\AdditionalPropertiesInterface;

/**
 * @deprecated
 */
class CheckoutFormDeliveryTimeGuaranteed implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * ISO date when the earliest delivery attempt can take place.
     *
     * @var \DateTime|null
     */
    protected $from;
    /**
     * ISO date when the latest delivery attempt can take place.
     *
     * @var \DateTime|null
     */
    protected $to;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * ISO date when the earliest delivery attempt can take place.
     */
    public function getFrom(): ?\DateTime
    {
        return $this->from;
    }

    /**
     * ISO date when the earliest delivery attempt can take place.
     */
    public function setFrom(?\DateTime $from): self
    {
        $this->initialized['from'] = true;
        $this->from = $from;

        return $this;
    }

    /**
     * ISO date when the latest delivery attempt can take place.
     */
    public function getTo(): ?\DateTime
    {
        return $this->to;
    }

    /**
     * ISO date when the latest delivery attempt can take place.
     */
    public function setTo(?\DateTime $to): self
    {
        $this->initialized['to'] = true;
        $this->to = $to;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['from' => ['from', 'getFrom', 'setFrom'], 'to' => ['to', 'getTo', 'setTo']];
    }
}
