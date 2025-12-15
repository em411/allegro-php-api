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

class BuyerReference extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * buyer id.
     *
     * @var string|null
     */
    protected $id;
    /**
     * @var string|null
     */
    protected $email;
    /**
     * @var string|null
     */
    protected $login;
    /**
     * is a guest account?
     *
     * @var bool|null
     */
    protected $guest;
    /**
     * @var BuyerPreferencesReference|null
     */
    protected $preferences;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * buyer id.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * buyer id.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;

        return $this;
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(?string $login): self
    {
        $this->initialized['login'] = true;
        $this->login = $login;

        return $this;
    }

    /**
     * is a guest account?
     */
    public function getGuest(): ?bool
    {
        return $this->guest;
    }

    /**
     * is a guest account?
     */
    public function setGuest(?bool $guest): self
    {
        $this->initialized['guest'] = true;
        $this->guest = $guest;

        return $this;
    }

    public function getPreferences(): ?BuyerPreferencesReference
    {
        return $this->preferences;
    }

    public function setPreferences(?BuyerPreferencesReference $preferences): self
    {
        $this->initialized['preferences'] = true;
        $this->preferences = $preferences;

        return $this;
    }
}
