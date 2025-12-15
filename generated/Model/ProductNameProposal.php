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

class ProductNameProposal extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Current product name.
     *
     * @var string|null
     */
    protected $current;
    /**
     * Proposed product name.
     *
     * @var string|null
     */
    protected $proposal;
    /**
     * Verification message.
     *
     * @var string|null
     */
    protected $reason;
    /**
     * Verification resolution type.
     *
     * @var mixed|null
     */
    protected $resolutionType;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Current product name.
     */
    public function getCurrent(): ?string
    {
        return $this->current;
    }

    /**
     * Current product name.
     */
    public function setCurrent(?string $current): self
    {
        $this->initialized['current'] = true;
        $this->current = $current;

        return $this;
    }

    /**
     * Proposed product name.
     */
    public function getProposal(): ?string
    {
        return $this->proposal;
    }

    /**
     * Proposed product name.
     */
    public function setProposal(?string $proposal): self
    {
        $this->initialized['proposal'] = true;
        $this->proposal = $proposal;

        return $this;
    }

    /**
     * Verification message.
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }

    /**
     * Verification message.
     */
    public function setReason(?string $reason): self
    {
        $this->initialized['reason'] = true;
        $this->reason = $reason;

        return $this;
    }

    /**
     * Verification resolution type.
     */
    public function getResolutionType()
    {
        return $this->resolutionType;
    }

    /**
     * Verification resolution type.
     */
    public function setResolutionType($resolutionType): self
    {
        $this->initialized['resolutionType'] = true;
        $this->resolutionType = $resolutionType;

        return $this;
    }
}
