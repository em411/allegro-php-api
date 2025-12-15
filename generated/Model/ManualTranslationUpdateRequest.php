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

class ManualTranslationUpdateRequest extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Manual offer description translation.
     *
     * @var ManualDescriptionTranslation|null
     */
    protected $description;
    /**
     * Manual offer title translation.
     *
     * @var ManualTitleTranslation|null
     */
    protected $title;
    /**
     * Manual offer products safety information translations. Updating this resource is in accordance with <a href=" https://datatracker.ietf.org/doc/html/rfc7396/" target="_blank">RFC7396</a> - all or nothing.'.
     *
     * @var ManualSafetyInformationTranslation|null
     */
    protected $safetyInformation;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Manual offer description translation.
     */
    public function getDescription(): ?ManualDescriptionTranslation
    {
        return $this->description;
    }

    /**
     * Manual offer description translation.
     */
    public function setDescription(?ManualDescriptionTranslation $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    /**
     * Manual offer title translation.
     */
    public function getTitle(): ?ManualTitleTranslation
    {
        return $this->title;
    }

    /**
     * Manual offer title translation.
     */
    public function setTitle(?ManualTitleTranslation $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;

        return $this;
    }

    /**
     * Manual offer products safety information translations. Updating this resource is in accordance with <a href=" https://datatracker.ietf.org/doc/html/rfc7396/" target="_blank">RFC7396</a> - all or nothing.'.
     */
    public function getSafetyInformation(): ?ManualSafetyInformationTranslation
    {
        return $this->safetyInformation;
    }

    /**
     * Manual offer products safety information translations. Updating this resource is in accordance with <a href=" https://datatracker.ietf.org/doc/html/rfc7396/" target="_blank">RFC7396</a> - all or nothing.'.
     */
    public function setSafetyInformation(?ManualSafetyInformationTranslation $safetyInformation): self
    {
        $this->initialized['safetyInformation'] = true;
        $this->safetyInformation = $safetyInformation;

        return $this;
    }
}
