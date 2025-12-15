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

class ModificationSafetyInformation extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * _Note: if the offer contains multiple products, the safety information will only be changed for the first product._.
     *
     * @var string|null
     */
    protected $type;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * _Note: if the offer contains multiple products, the safety information will only be changed for the first product._.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * _Note: if the offer contains multiple products, the safety information will only be changed for the first product._.
     */
    public function setType(?string $type)
    {
        $this->initialized['type'] = true;
        $this->type = $type;
    }
}
