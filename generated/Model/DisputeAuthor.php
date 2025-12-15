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

class DisputeAuthor extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Not present if role is ADMIN or FULFILLMENT.
     *
     * @var string|null
     */
    protected $login;
    /**
     * @var string|null
     */
    protected $role;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Not present if role is ADMIN or FULFILLMENT.
     */
    public function getLogin(): ?string
    {
        return $this->login;
    }

    /**
     * Not present if role is ADMIN or FULFILLMENT.
     */
    public function setLogin(?string $login): self
    {
        $this->initialized['login'] = true;
        $this->login = $login;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(?string $role): self
    {
        $this->initialized['role'] = true;
        $this->role = $role;

        return $this;
    }
}
