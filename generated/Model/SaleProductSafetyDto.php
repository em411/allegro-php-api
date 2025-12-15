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

class SaleProductSafetyDto extends \ArrayObject
{
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
     * @var mixed|null
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
     */
    public function getSafetyInformation()
    {
        return $this->safetyInformation;
    }

    /**
     * Contains information about product's safety.
     */
    public function setSafetyInformation($safetyInformation): self
    {
        $this->initialized['safetyInformation'] = true;
        $this->safetyInformation = $safetyInformation;

        return $this;
    }
}
