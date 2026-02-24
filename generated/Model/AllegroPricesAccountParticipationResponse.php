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

class AllegroPricesAccountParticipationResponse extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * List of marketplace participation statuses.
     *
     * @var list<AccountParticipationMarketplace>|null
     */
    protected $marketplaces;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * List of marketplace participation statuses.
     *
     * @return list<AccountParticipationMarketplace>|null
     */
    public function getMarketplaces(): ?array
    {
        return $this->marketplaces;
    }

    /**
     * List of marketplace participation statuses.
     *
     * @param list<AccountParticipationMarketplace>|null $marketplaces
     */
    public function setMarketplaces(?array $marketplaces): self
    {
        $this->initialized['marketplaces'] = true;
        $this->marketplaces = $marketplaces;

        return $this;
    }
}
