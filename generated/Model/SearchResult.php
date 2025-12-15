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

class SearchResult extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var list<Pos>|null
     */
    protected $posList;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * @return list<Pos>|null
     */
    public function getPosList(): ?array
    {
        return $this->posList;
    }

    /**
     * @param list<Pos>|null $posList
     */
    public function setPosList(?array $posList): self
    {
        $this->initialized['posList'] = true;
        $this->posList = $posList;

        return $this;
    }
}
