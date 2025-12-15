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

class AllegroPickupDropOffPointsResponse extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * List of Allegro pickup drop off points.
     *
     * @var list<AllegroPickupDropOffPoint>|null
     */
    protected $points;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * List of Allegro pickup drop off points.
     *
     * @return list<AllegroPickupDropOffPoint>|null
     */
    public function getPoints(): ?array
    {
        return $this->points;
    }

    /**
     * List of Allegro pickup drop off points.
     *
     * @param list<AllegroPickupDropOffPoint>|null $points
     */
    public function setPoints(?array $points): self
    {
        $this->initialized['points'] = true;
        $this->points = $points;

        return $this;
    }
}
