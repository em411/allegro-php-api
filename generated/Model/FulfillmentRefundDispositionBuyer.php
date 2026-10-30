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

class FulfillmentRefundDispositionBuyer implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Buyer login.
     *
     * @var string|null
     */
    protected $login;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Buyer login.
     */
    public function getLogin(): ?string
    {
        return $this->login;
    }

    /**
     * Buyer login.
     */
    public function setLogin(?string $login): self
    {
        $this->initialized['login'] = true;
        $this->login = $login;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['login' => ['login', 'getLogin', 'setLogin']];
    }
}
