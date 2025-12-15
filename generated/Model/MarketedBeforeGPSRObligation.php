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

class MarketedBeforeGPSRObligation extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Allows you to declare that the product was introduced before 13 Dec 2024 and therefore does not require GPSR data. It can be set only with the selected values of the Condition parameter.
     *
     * @var bool|null
     */
    protected $marketedBeforeGPSRObligation;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Allows you to declare that the product was introduced before 13 Dec 2024 and therefore does not require GPSR data. It can be set only with the selected values of the Condition parameter.
     */
    public function getMarketedBeforeGPSRObligation(): ?bool
    {
        return $this->marketedBeforeGPSRObligation;
    }

    /**
     * Allows you to declare that the product was introduced before 13 Dec 2024 and therefore does not require GPSR data. It can be set only with the selected values of the Condition parameter.
     */
    public function setMarketedBeforeGPSRObligation(?bool $marketedBeforeGPSRObligation): self
    {
        $this->initialized['marketedBeforeGPSRObligation'] = true;
        $this->marketedBeforeGPSRObligation = $marketedBeforeGPSRObligation;

        return $this;
    }
}
