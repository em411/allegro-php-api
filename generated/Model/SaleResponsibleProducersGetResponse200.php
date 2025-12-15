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

class SaleResponsibleProducersGetResponse200 extends \ArrayObject
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
     * Number of responsible producers data returned in search result for the given parameters.
     *
     * @var int|null
     */
    protected $count;
    /**
     * Total number of available responsible producers data.
     *
     * @var int|null
     */
    protected $totalCount;

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
     * Number of responsible producers data returned in search result for the given parameters.
     */
    public function getCount(): ?int
    {
        return $this->count;
    }

    /**
     * Number of responsible producers data returned in search result for the given parameters.
     */
    public function setCount(?int $count): self
    {
        $this->initialized['count'] = true;
        $this->count = $count;

        return $this;
    }

    /**
     * Total number of available responsible producers data.
     */
    public function getTotalCount(): ?int
    {
        return $this->totalCount;
    }

    /**
     * Total number of available responsible producers data.
     */
    public function setTotalCount(?int $totalCount): self
    {
        $this->initialized['totalCount'] = true;
        $this->totalCount = $totalCount;

        return $this;
    }
}
