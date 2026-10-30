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

class OfferAutomaticPricingCommand implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The Command identifier. This field is optional. If the client does not provide their own command id then the service will generate a command id and return it in the response.
     *
     * @var string|null
     */
    protected $id;
    /**
     * @var OfferAutomaticPricingModificationSet|OfferAutomaticPricingModificationRemove|null
     */
    protected $modification;
    /**
     * List of offer criteria.
     *
     * @var list<OfferCriterium>|null
     */
    protected $offerCriteria;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The Command identifier. This field is optional. If the client does not provide their own command id then the service will generate a command id and return it in the response.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * The Command identifier. This field is optional. If the client does not provide their own command id then the service will generate a command id and return it in the response.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * @return OfferAutomaticPricingModificationSet|OfferAutomaticPricingModificationRemove|null
     */
    public function getModification()
    {
        return $this->modification;
    }

    /**
     * @param OfferAutomaticPricingModificationSet|OfferAutomaticPricingModificationRemove|null $modification
     */
    public function setModification($modification): self
    {
        $this->initialized['modification'] = true;
        $this->modification = $modification;

        return $this;
    }

    /**
     * List of offer criteria.
     *
     * @return list<OfferCriterium>|null
     */
    public function getOfferCriteria(): ?array
    {
        return $this->offerCriteria;
    }

    /**
     * List of offer criteria.
     *
     * @param list<OfferCriterium>|null $offerCriteria
     */
    public function setOfferCriteria(?array $offerCriteria): self
    {
        $this->initialized['offerCriteria'] = true;
        $this->offerCriteria = $offerCriteria;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['id' => ['id', 'getId', 'setId'], 'modification' => ['modification', 'getModification', 'setModification'], 'offerCriteria' => ['offerCriteria', 'getOfferCriteria', 'setOfferCriteria']];
    }
}
