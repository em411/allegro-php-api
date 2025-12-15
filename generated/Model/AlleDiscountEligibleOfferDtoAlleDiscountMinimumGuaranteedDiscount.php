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

class AlleDiscountEligibleOfferDtoAlleDiscountMinimumGuaranteedDiscount extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Guaranteed offer discount as a percentage.
     *
     * @var string|null
     */
    protected $percentage;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Guaranteed offer discount as a percentage.
     */
    public function getPercentage(): ?string
    {
        return $this->percentage;
    }

    /**
     * Guaranteed offer discount as a percentage.
     */
    public function setPercentage(?string $percentage): self
    {
        $this->initialized['percentage'] = true;
        $this->percentage = $percentage;

        return $this;
    }
}
