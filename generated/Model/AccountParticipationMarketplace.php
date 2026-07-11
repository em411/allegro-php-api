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

class AccountParticipationMarketplace extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Marketplace identifier. One of: 'allegro-pl', 'allegro-cz', 'allegro-sk', 'allegro-hu'.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Participation status (ALLOWED or DENIED).
     *
     * @var string|null
     */
    protected $status;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Marketplace identifier. One of: 'allegro-pl', 'allegro-cz', 'allegro-sk', 'allegro-hu'.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Marketplace identifier. One of: 'allegro-pl', 'allegro-cz', 'allegro-sk', 'allegro-hu'.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Participation status (ALLOWED or DENIED).
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Participation status (ALLOWED or DENIED).
     */
    public function setStatus(?string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }
}
