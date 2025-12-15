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

class AdditionalEmailRequest extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * A valid email address you want to add to your account. Maximum length of the part before the `@` sign is 64 characters.
     *
     * @var string|null
     */
    protected $email;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * A valid email address you want to add to your account. Maximum length of the part before the `@` sign is 64 characters.
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * A valid email address you want to add to your account. Maximum length of the part before the `@` sign is 64 characters.
     */
    public function setEmail(?string $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;

        return $this;
    }
}
