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

class MessageAuthorVBeta1 implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Author role: `SELLER` represents the seller; `BUYER` represents the buyer; `USER` is a legacy role used when a user initiates contact by email and their role in the thread is unknown (for purchase-related questions about transactions made on the platform, the role is known). `CONSULTANT` represents an Allegro advisor. `SYSTEM` represents chat events, such as a chat being opened or closed, or an advisor joining. `CHATBOT` represents a process-related message shown on the marketplace as "Automatic message from Allegro"; it helps users navigate processes such as filing a complaint or post purchase problem.
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
     * Author role: `SELLER` represents the seller; `BUYER` represents the buyer; `USER` is a legacy role used when a user initiates contact by email and their role in the thread is unknown (for purchase-related questions about transactions made on the platform, the role is known). `CONSULTANT` represents an Allegro advisor. `SYSTEM` represents chat events, such as a chat being opened or closed, or an advisor joining. `CHATBOT` represents a process-related message shown on the marketplace as "Automatic message from Allegro"; it helps users navigate processes such as filing a complaint or post purchase problem.
     */
    public function getRole(): ?string
    {
        return $this->role;
    }

    /**
     * Author role: `SELLER` represents the seller; `BUYER` represents the buyer; `USER` is a legacy role used when a user initiates contact by email and their role in the thread is unknown (for purchase-related questions about transactions made on the platform, the role is known). `CONSULTANT` represents an Allegro advisor. `SYSTEM` represents chat events, such as a chat being opened or closed, or an advisor joining. `CHATBOT` represents a process-related message shown on the marketplace as "Automatic message from Allegro"; it helps users navigate processes such as filing a complaint or post purchase problem.
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

    public function definedProperties(): array
    {
        return ['role' => ['role', 'getRole', 'setRole'], 'login' => ['login', 'getLogin', 'setLogin']];
    }
}
