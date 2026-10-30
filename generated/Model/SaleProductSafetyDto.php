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

class SaleProductSafetyDto implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var list<ResponsibleProducerResponse>|null
     */
    protected $responsibleProducers;
    /**
     * Contains information about product's safety.
     *
     * @var TextSafetyInformation|AttachmentsSafetyInformation|null
     */
    protected $safetyInformation;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * @return list<ResponsibleProducerResponse>|null
     */
    public function getResponsibleProducers(): ?array
    {
        return $this->responsibleProducers;
    }

    /**
     * @param list<ResponsibleProducerResponse>|null $responsibleProducers
     */
    public function setResponsibleProducers(?array $responsibleProducers): self
    {
        $this->initialized['responsibleProducers'] = true;
        $this->responsibleProducers = $responsibleProducers;

        return $this;
    }

    /**
     * Contains information about product's safety.
     *
     * @return TextSafetyInformation|AttachmentsSafetyInformation|null
     */
    public function getSafetyInformation()
    {
        return $this->safetyInformation;
    }

    /**
     * Contains information about product's safety.
     *
     * @param TextSafetyInformation|AttachmentsSafetyInformation|null $safetyInformation
     */
    public function setSafetyInformation($safetyInformation): self
    {
        $this->initialized['safetyInformation'] = true;
        $this->safetyInformation = $safetyInformation;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['responsibleProducers' => ['responsibleProducers', 'getResponsibleProducers', 'setResponsibleProducers'], 'safetyInformation' => ['safetyInformation', 'getSafetyInformation', 'setSafetyInformation']];
    }
}
