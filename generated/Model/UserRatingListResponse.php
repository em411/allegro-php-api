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

class UserRatingListResponse extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * List of ratings that match requested filter. Empty when no rating matched.
     *
     * @var list<UserRating>|null
     */
    protected $ratings;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * List of ratings that match requested filter. Empty when no rating matched.
     *
     * @return list<UserRating>|null
     */
    public function getRatings(): ?array
    {
        return $this->ratings;
    }

    /**
     * List of ratings that match requested filter. Empty when no rating matched.
     *
     * @param list<UserRating>|null $ratings
     */
    public function setRatings(?array $ratings): self
    {
        $this->initialized['ratings'] = true;
        $this->ratings = $ratings;

        return $this;
    }
}
