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

class StandardizedDescription implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var list<DescriptionSection>|null
     */
    protected $sections;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * @return list<DescriptionSection>|null
     */
    public function getSections(): ?array
    {
        return $this->sections;
    }

    /**
     * @param list<DescriptionSection>|null $sections
     */
    public function setSections(?array $sections): self
    {
        $this->initialized['sections'] = true;
        $this->sections = $sections;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['sections' => ['sections', 'getSections', 'setSections']];
    }
}
