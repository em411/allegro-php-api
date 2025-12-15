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

class SubmitCommandOutput extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The command status.
     *
     * @var string|null
     */
    protected $status;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The command status.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * The command status.
     */
    public function setStatus(?string $status)
    {
        $this->initialized['status'] = true;
        $this->status = $status;
    }
}
