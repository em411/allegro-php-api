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

class ProductProposalsResponsePublication extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The publication status of the submitted product:
     *  - `PROPOSED` - a new product proposal was created and can be reviewed
     *
     * @var string|null
     */
    protected $status;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The publication status of the submitted product:
     *  - `PROPOSED` - a new product proposal was created and can be reviewed
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * The publication status of the submitted product:
     * - `PROPOSED` - a new product proposal was created and can be reviewed
     */
    public function setStatus(?string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }
}
