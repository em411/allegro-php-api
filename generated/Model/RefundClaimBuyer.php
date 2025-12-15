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

class RefundClaimBuyer extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * ID of the buyer associated with the refund application.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Login of the buyer associated with the refund application.
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $login;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * ID of the buyer associated with the refund application.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * ID of the buyer associated with the refund application.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Login of the buyer associated with the refund application.
     *
     * @deprecated
     */
    public function getLogin(): ?string
    {
        return $this->login;
    }

    /**
     * Login of the buyer associated with the refund application.
     *
     * @deprecated
     */
    public function setLogin(?string $login): self
    {
        $this->initialized['login'] = true;
        $this->login = $login;

        return $this;
    }
}
