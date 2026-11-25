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

use Em411\Allegro\Api\Runtime\AdditionalAndPatternProperties;
use Em411\Allegro\Api\Runtime\AdditionalPropertiesInterface;

class SelectedOfferConditions implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Whether the offer meets the campaign conditions.
     *
     * @var bool|null
     */
    protected $meetsConditions;
    /**
     * Public codes and localized messages describing offer condition violations.
     *
     * @var list<SelectedOfferViolation>|null
     */
    protected $violations;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Whether the offer meets the campaign conditions.
     */
    public function getMeetsConditions(): ?bool
    {
        return $this->meetsConditions;
    }

    /**
     * Whether the offer meets the campaign conditions.
     */
    public function setMeetsConditions(?bool $meetsConditions): self
    {
        $this->initialized['meetsConditions'] = true;
        $this->meetsConditions = $meetsConditions;

        return $this;
    }

    /**
     * Public codes and localized messages describing offer condition violations.
     *
     * @return list<SelectedOfferViolation>|null
     */
    public function getViolations(): ?array
    {
        return $this->violations;
    }

    /**
     * Public codes and localized messages describing offer condition violations.
     *
     * @param list<SelectedOfferViolation>|null $violations
     */
    public function setViolations(?array $violations): self
    {
        $this->initialized['violations'] = true;
        $this->violations = $violations;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['meetsConditions' => ['meetsConditions', 'getMeetsConditions', 'setMeetsConditions'], 'violations' => ['violations', 'getViolations', 'setViolations']];
    }
}
