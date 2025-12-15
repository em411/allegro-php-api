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

class TaxRateValue extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Displayable tax rate label.
     *
     * @var string|null
     */
    protected $label;
    /**
     * A numeric value of VAT tax rate. In case of "OUT_OF_SCOPE_OF_VAT" it is set to 0.
     *
     * @var string|null
     */
    protected $value;
    /**
     * Exemption field must be filled out if true, otherwise is optional.
     *
     * @var bool|null
     */
    protected $exemptionRequired;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Displayable tax rate label.
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }

    /**
     * Displayable tax rate label.
     */
    public function setLabel(?string $label): self
    {
        $this->initialized['label'] = true;
        $this->label = $label;

        return $this;
    }

    /**
     * A numeric value of VAT tax rate. In case of "OUT_OF_SCOPE_OF_VAT" it is set to 0.
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * A numeric value of VAT tax rate. In case of "OUT_OF_SCOPE_OF_VAT" it is set to 0.
     */
    public function setValue(?string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;

        return $this;
    }

    /**
     * Exemption field must be filled out if true, otherwise is optional.
     */
    public function getExemptionRequired(): ?bool
    {
        return $this->exemptionRequired;
    }

    /**
     * Exemption field must be filled out if true, otherwise is optional.
     */
    public function setExemptionRequired(?bool $exemptionRequired): self
    {
        $this->initialized['exemptionRequired'] = true;
        $this->exemptionRequired = $exemptionRequired;

        return $this;
    }
}
