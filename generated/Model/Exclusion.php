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

class Exclusion extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The reason why the rating was excluded from calculating average user rates. The message is translated based on the value of the "Accept-Language" header and exists only when the rating was excluded.
     *
     * @var string|null
     */
    protected $reason;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The reason why the rating was excluded from calculating average user rates. The message is translated based on the value of the "Accept-Language" header and exists only when the rating was excluded.
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }

    /**
     * The reason why the rating was excluded from calculating average user rates. The message is translated based on the value of the "Accept-Language" header and exists only when the rating was excluded.
     */
    public function setReason(?string $reason): self
    {
        $this->initialized['reason'] = true;
        $this->reason = $reason;

        return $this;
    }
}
