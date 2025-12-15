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

class ProductParameterDtoOptions extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var bool|null
     */
    protected $identifiesProduct;
    /**
     * @var bool|null
     */
    protected $isGTIN;
    /**
     * Parameter values originate directly from the manufacturer, its representative, or a trusted source.
     *
     * @var bool|null
     */
    protected $isTrusted;
    /**
     * Parameter value was generated using AI.
     *
     * @var bool|null
     */
    protected $isAiCoCreated;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getIdentifiesProduct(): ?bool
    {
        return $this->identifiesProduct;
    }

    public function setIdentifiesProduct(?bool $identifiesProduct): self
    {
        $this->initialized['identifiesProduct'] = true;
        $this->identifiesProduct = $identifiesProduct;

        return $this;
    }

    public function getIsGTIN(): ?bool
    {
        return $this->isGTIN;
    }

    public function setIsGTIN(?bool $isGTIN): self
    {
        $this->initialized['isGTIN'] = true;
        $this->isGTIN = $isGTIN;

        return $this;
    }

    /**
     * Parameter values originate directly from the manufacturer, its representative, or a trusted source.
     */
    public function getIsTrusted(): ?bool
    {
        return $this->isTrusted;
    }

    /**
     * Parameter values originate directly from the manufacturer, its representative, or a trusted source.
     */
    public function setIsTrusted(?bool $isTrusted): self
    {
        $this->initialized['isTrusted'] = true;
        $this->isTrusted = $isTrusted;

        return $this;
    }

    /**
     * Parameter value was generated using AI.
     */
    public function getIsAiCoCreated(): ?bool
    {
        return $this->isAiCoCreated;
    }

    /**
     * Parameter value was generated using AI.
     */
    public function setIsAiCoCreated(?bool $isAiCoCreated): self
    {
        $this->initialized['isAiCoCreated'] = true;
        $this->isAiCoCreated = $isAiCoCreated;

        return $this;
    }
}
