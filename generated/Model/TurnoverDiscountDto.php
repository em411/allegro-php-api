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

class TurnoverDiscountDto extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Marketplace ID.
     *
     * @var string|null
     */
    protected $marketplaceId;
    /**
     * Turnover discount status.
     *
     * @var string|null
     */
    protected $status;
    /**
     * Definitions currently active or active in the future.
     *
     * @var list<TurnoverDiscountDefinitionDto>|null
     */
    protected $definitions;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Marketplace ID.
     */
    public function getMarketplaceId(): ?string
    {
        return $this->marketplaceId;
    }

    /**
     * Marketplace ID.
     */
    public function setMarketplaceId(?string $marketplaceId): self
    {
        $this->initialized['marketplaceId'] = true;
        $this->marketplaceId = $marketplaceId;

        return $this;
    }

    /**
     * Turnover discount status.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Turnover discount status.
     */
    public function setStatus(?string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }

    /**
     * Definitions currently active or active in the future.
     *
     * @return list<TurnoverDiscountDefinitionDto>|null
     */
    public function getDefinitions(): ?array
    {
        return $this->definitions;
    }

    /**
     * Definitions currently active or active in the future.
     *
     * @param list<TurnoverDiscountDefinitionDto>|null $definitions
     */
    public function setDefinitions(?array $definitions): self
    {
        $this->initialized['definitions'] = true;
        $this->definitions = $definitions;

        return $this;
    }
}
