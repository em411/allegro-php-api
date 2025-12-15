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

class AdditionalServicesGroupRequest extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Name of the group provided by merchant, invisible for buyers.
     *
     * @var string|null
     */
    protected $name;
    /**
     * IETF language tag. Must be equal to main language for given marketplace: 'pl-PL' on allegro.pl and 'cs-CZ' on allegro.cz while creating new group.<br/> Cannot change the language of already created group while modifying existing group.
     *
     * @var string|null
     */
    protected $language;
    /**
     * @var list<AdditionalServiceRequest>|null
     */
    protected $additionalServices;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Name of the group provided by merchant, invisible for buyers.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Name of the group provided by merchant, invisible for buyers.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * IETF language tag. Must be equal to main language for given marketplace: 'pl-PL' on allegro.pl and 'cs-CZ' on allegro.cz while creating new group.<br/> Cannot change the language of already created group while modifying existing group.
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }

    /**
     * IETF language tag. Must be equal to main language for given marketplace: 'pl-PL' on allegro.pl and 'cs-CZ' on allegro.cz while creating new group.<br/> Cannot change the language of already created group while modifying existing group.
     */
    public function setLanguage(?string $language): self
    {
        $this->initialized['language'] = true;
        $this->language = $language;

        return $this;
    }

    /**
     * @return list<AdditionalServiceRequest>|null
     */
    public function getAdditionalServices(): ?array
    {
        return $this->additionalServices;
    }

    /**
     * @param list<AdditionalServiceRequest>|null $additionalServices
     */
    public function setAdditionalServices(?array $additionalServices): self
    {
        $this->initialized['additionalServices'] = true;
        $this->additionalServices = $additionalServices;

        return $this;
    }
}
