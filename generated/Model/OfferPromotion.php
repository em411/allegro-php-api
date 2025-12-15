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

class OfferPromotion extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Indicates whether the offer is promoted.
     *
     * @var bool|null
     */
    protected $emphasized;
    /**
     * Indicates whether the offer has bold title option.
     *
     * @var bool|null
     */
    protected $bold;
    /**
     * Indicates whether the offer has highlight option.
     *
     * @var bool|null
     */
    protected $highlight;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Indicates whether the offer is promoted.
     */
    public function getEmphasized(): ?bool
    {
        return $this->emphasized;
    }

    /**
     * Indicates whether the offer is promoted.
     */
    public function setEmphasized(?bool $emphasized): self
    {
        $this->initialized['emphasized'] = true;
        $this->emphasized = $emphasized;

        return $this;
    }

    /**
     * Indicates whether the offer has bold title option.
     */
    public function getBold(): ?bool
    {
        return $this->bold;
    }

    /**
     * Indicates whether the offer has bold title option.
     */
    public function setBold(?bool $bold): self
    {
        $this->initialized['bold'] = true;
        $this->bold = $bold;

        return $this;
    }

    /**
     * Indicates whether the offer has highlight option.
     */
    public function getHighlight(): ?bool
    {
        return $this->highlight;
    }

    /**
     * Indicates whether the offer has highlight option.
     */
    public function setHighlight(?bool $highlight): self
    {
        $this->initialized['highlight'] = true;
        $this->highlight = $highlight;

        return $this;
    }
}
