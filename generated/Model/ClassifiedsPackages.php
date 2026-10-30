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

class ClassifiedsPackages implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var ClassifiedPackage|null
     */
    protected $basePackage;
    /**
     * An array of extra packages.
     *
     * @var list<ClassifiedExtraPackage>|null
     */
    protected $extraPackages;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getBasePackage(): ?ClassifiedPackage
    {
        return $this->basePackage;
    }

    public function setBasePackage(?ClassifiedPackage $basePackage): self
    {
        $this->initialized['basePackage'] = true;
        $this->basePackage = $basePackage;

        return $this;
    }

    /**
     * An array of extra packages.
     *
     * @return list<ClassifiedExtraPackage>|null
     */
    public function getExtraPackages(): ?array
    {
        return $this->extraPackages;
    }

    /**
     * An array of extra packages.
     *
     * @param list<ClassifiedExtraPackage>|null $extraPackages
     */
    public function setExtraPackages(?array $extraPackages): self
    {
        $this->initialized['extraPackages'] = true;
        $this->extraPackages = $extraPackages;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['basePackage' => ['basePackage', 'getBasePackage', 'setBasePackage'], 'extraPackages' => ['extraPackages', 'getExtraPackages', 'setExtraPackages']];
    }
}
