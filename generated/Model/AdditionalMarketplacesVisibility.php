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

class AdditionalMarketplacesVisibility extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Additional marketplace ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Marketplace visibility qualification status.
     *
     * @var string|null
     */
    protected $status;
    /**
     * Reasons of visibility refusal.
     *
     * @var list<RefusalReason>|null
     */
    protected $refusalReasons;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Additional marketplace ID.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Additional marketplace ID.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Marketplace visibility qualification status.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Marketplace visibility qualification status.
     */
    public function setStatus(?string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }

    /**
     * Reasons of visibility refusal.
     *
     * @return list<RefusalReason>|null
     */
    public function getRefusalReasons(): ?array
    {
        return $this->refusalReasons;
    }

    /**
     * Reasons of visibility refusal.
     *
     * @param list<RefusalReason>|null $refusalReasons
     */
    public function setRefusalReasons(?array $refusalReasons): self
    {
        $this->initialized['refusalReasons'] = true;
        $this->refusalReasons = $refusalReasons;

        return $this;
    }
}
