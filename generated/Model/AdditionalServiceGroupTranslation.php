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

class AdditionalServiceGroupTranslation extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * IETF language tag.
     *
     * @var string|null
     */
    protected $language;
    /**
     * @var AdditionalServicesGroupTranslationWrapperWithType|null
     */
    protected $additionalServices;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * IETF language tag.
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }

    /**
     * IETF language tag.
     */
    public function setLanguage(?string $language): self
    {
        $this->initialized['language'] = true;
        $this->language = $language;

        return $this;
    }

    public function getAdditionalServices(): ?AdditionalServicesGroupTranslationWrapperWithType
    {
        return $this->additionalServices;
    }

    public function setAdditionalServices(?AdditionalServicesGroupTranslationWrapperWithType $additionalServices): self
    {
        $this->initialized['additionalServices'] = true;
        $this->additionalServices = $additionalServices;

        return $this;
    }
}
