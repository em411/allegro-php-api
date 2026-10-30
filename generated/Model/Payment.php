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

class Payment implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Available forms of payment: CASH - cash, CARD - card.
     *
     * @var string|null
     */
    protected $method;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Available forms of payment: CASH - cash, CARD - card.
     */
    public function getMethod(): ?string
    {
        return $this->method;
    }

    /**
     * Available forms of payment: CASH - cash, CARD - card.
     */
    public function setMethod(?string $method): self
    {
        $this->initialized['method'] = true;
        $this->method = $method;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['method' => ['method', 'getMethod', 'setMethod']];
    }
}
