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

class ThreadParticipantVBeta1 extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Participant role: `SELLER` represents the seller; `BUYER` represents the buyer. `USER` is a legacy role used when a user initiates contact by email and their role in the thread is unknown. For purchase-related questions about transactions made on the platform, the participant's role is known.
     *
     * @var string|null
     */
    protected $role;
    /**
     * @var string|null
     */
    protected $login;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Participant role: `SELLER` represents the seller; `BUYER` represents the buyer. `USER` is a legacy role used when a user initiates contact by email and their role in the thread is unknown. For purchase-related questions about transactions made on the platform, the participant's role is known.
     */
    public function getRole(): ?string
    {
        return $this->role;
    }

    /**
     * Participant role: `SELLER` represents the seller; `BUYER` represents the buyer. `USER` is a legacy role used when a user initiates contact by email and their role in the thread is unknown. For purchase-related questions about transactions made on the platform, the participant's role is known.
     */
    public function setRole(?string $role): self
    {
        $this->initialized['role'] = true;
        $this->role = $role;

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
}
