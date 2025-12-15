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

class Cells extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var list<string>|null
     */
    protected $cells;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * @return list<string>|null
     */
    public function getCells(): ?array
    {
        return $this->cells;
    }

    /**
     * @param list<string>|null $cells
     */
    public function setCells(?array $cells): self
    {
        $this->initialized['cells'] = true;
        $this->cells = $cells;

        return $this;
    }
}
