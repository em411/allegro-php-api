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

class ManualTitleTranslation implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Manual offer title translation content.
     *
     * @var string|null
     */
    protected $translation;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Manual offer title translation content.
     */
    public function getTranslation(): ?string
    {
        return $this->translation;
    }

    /**
     * Manual offer title translation content.
     */
    public function setTranslation(?string $translation): self
    {
        $this->initialized['translation'] = true;
        $this->translation = $translation;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['translation' => ['translation', 'getTranslation', 'setTranslation']];
    }
}
