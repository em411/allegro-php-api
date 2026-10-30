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

class ManualProductSafetyInformationDescriptionTranslation implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Product id connected with provided translated content.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Manual product safety information translation content.
     *
     * @var string|null
     */
    protected $translation;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Product id connected with provided translated content.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Product id connected with provided translated content.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Manual product safety information translation content.
     */
    public function getTranslation(): ?string
    {
        return $this->translation;
    }

    /**
     * Manual product safety information translation content.
     */
    public function setTranslation(?string $translation): self
    {
        $this->initialized['translation'] = true;
        $this->translation = $translation;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['id' => ['id', 'getId', 'setId'], 'translation' => ['translation', 'getTranslation', 'setTranslation']];
    }
}
