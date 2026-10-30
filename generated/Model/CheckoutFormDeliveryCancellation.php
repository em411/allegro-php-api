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

class CheckoutFormDeliveryCancellation implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * ISO date when the delivery was cancelled.
     *
     * @var \DateTime|null
     */
    protected $date;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * ISO date when the delivery was cancelled.
     */
    public function getDate(): ?\DateTime
    {
        return $this->date;
    }

    /**
     * ISO date when the delivery was cancelled.
     */
    public function setDate(?\DateTime $date): self
    {
        $this->initialized['date'] = true;
        $this->date = $date;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['date' => ['date', 'getDate', 'setDate']];
    }
}
