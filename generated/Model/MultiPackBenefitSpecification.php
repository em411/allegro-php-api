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

class MultiPackBenefitSpecification extends BenefitSpecification
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * What rebate will be given.
     *
     * @var MultiPackBenefitSpecificationconfiguration|null
     */
    protected $configuration;
    /**
     * Describes what will cause the rebate.
     *
     * @var MultiPackBenefitSpecificationtrigger|null
     */
    protected $trigger;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * What rebate will be given.
     */
    public function getConfiguration(): ?MultiPackBenefitSpecificationconfiguration
    {
        return $this->configuration;
    }

    /**
     * What rebate will be given.
     */
    public function setConfiguration(?MultiPackBenefitSpecificationconfiguration $configuration): self
    {
        $this->initialized['configuration'] = true;
        $this->configuration = $configuration;

        return $this;
    }

    /**
     * Describes what will cause the rebate.
     */
    public function getTrigger(): ?MultiPackBenefitSpecificationtrigger
    {
        return $this->trigger;
    }

    /**
     * Describes what will cause the rebate.
     */
    public function setTrigger(?MultiPackBenefitSpecificationtrigger $trigger): self
    {
        $this->initialized['trigger'] = true;
        $this->trigger = $trigger;

        return $this;
    }
}
