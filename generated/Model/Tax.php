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

class Tax extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The buy now tax rate, Format 0.00. The tax is linked to the PL countryCode even if base marketplace is different.
     *
     * @var string|null
     */
    protected $percentage;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The buy now tax rate, Format 0.00. The tax is linked to the PL countryCode even if base marketplace is different.
     */
    public function getPercentage(): ?string
    {
        return $this->percentage;
    }

    /**
     * The buy now tax rate, Format 0.00. The tax is linked to the PL countryCode even if base marketplace is different.
     */
    public function setPercentage(?string $percentage): self
    {
        $this->initialized['percentage'] = true;
        $this->percentage = $percentage;

        return $this;
    }
}
