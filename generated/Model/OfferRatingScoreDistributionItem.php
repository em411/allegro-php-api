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

class OfferRatingScoreDistributionItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Identifier of score: 5, 4, 3, 2, 1.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Count of score.
     *
     * @var int|null
     */
    protected $count;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Identifier of score: 5, 4, 3, 2, 1.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Identifier of score: 5, 4, 3, 2, 1.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * Count of score.
     */
    public function getCount(): ?int
    {
        return $this->count;
    }

    /**
     * Count of score.
     */
    public function setCount(?int $count): self
    {
        $this->initialized['count'] = true;
        $this->count = $count;

        return $this;
    }
}
