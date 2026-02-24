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

class AllegroPricesAccountParticipationRequest extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * List of marketplaces to update (must not be empty).
     *
     * @var list<AccountParticipationMarketplaceRequest>|null
     */
    protected $marketplaces;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * List of marketplaces to update (must not be empty).
     *
     * @return list<AccountParticipationMarketplaceRequest>|null
     */
    public function getMarketplaces(): ?array
    {
        return $this->marketplaces;
    }

    /**
     * List of marketplaces to update (must not be empty).
     *
     * @param list<AccountParticipationMarketplaceRequest>|null $marketplaces
     */
    public function setMarketplaces(?array $marketplaces): self
    {
        $this->initialized['marketplaces'] = true;
        $this->marketplaces = $marketplaces;

        return $this;
    }
}
