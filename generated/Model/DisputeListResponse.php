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

class DisputeListResponse extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var list<Dispute>|null
     */
    protected $disputes;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * @return list<Dispute>|null
     */
    public function getDisputes(): ?array
    {
        return $this->disputes;
    }

    /**
     * @param list<Dispute>|null $disputes
     */
    public function setDisputes(?array $disputes): self
    {
        $this->initialized['disputes'] = true;
        $this->disputes = $disputes;

        return $this;
    }
}
