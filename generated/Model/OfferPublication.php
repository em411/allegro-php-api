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

class OfferPublication extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Publication ending date and time in UTC.
     *
     * @var string|null
     */
    protected $endingAt;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Publication ending date and time in UTC.
     */
    public function getEndingAt(): ?string
    {
        return $this->endingAt;
    }

    /**
     * Publication ending date and time in UTC.
     */
    public function setEndingAt(?string $endingAt): self
    {
        $this->initialized['endingAt'] = true;
        $this->endingAt = $endingAt;

        return $this;
    }
}
