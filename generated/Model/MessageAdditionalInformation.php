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

class MessageAdditionalInformation extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Vehicle Information Number (VIN) provided by sender in addition to message contents.
     *
     * @var string|null
     */
    protected $vin;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Vehicle Information Number (VIN) provided by sender in addition to message contents.
     */
    public function getVin(): ?string
    {
        return $this->vin;
    }

    /**
     * Vehicle Information Number (VIN) provided by sender in addition to message contents.
     */
    public function setVin(?string $vin): self
    {
        $this->initialized['vin'] = true;
        $this->vin = $vin;

        return $this;
    }
}
