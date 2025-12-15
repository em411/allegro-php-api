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

class SaleResponsiblePersonsGetResponse200 extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var list<ResponsiblePersonResponse>|null
     */
    protected $responsiblePersons;
    /**
     * Number of responsible persons data returned in search result for the given parameters.
     *
     * @var int|null
     */
    protected $count;
    /**
     * Total number of available responsible persons data.
     *
     * @var int|null
     */
    protected $totalCount;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * @return list<ResponsiblePersonResponse>|null
     */
    public function getResponsiblePersons(): ?array
    {
        return $this->responsiblePersons;
    }

    /**
     * @param list<ResponsiblePersonResponse>|null $responsiblePersons
     */
    public function setResponsiblePersons(?array $responsiblePersons): self
    {
        $this->initialized['responsiblePersons'] = true;
        $this->responsiblePersons = $responsiblePersons;

        return $this;
    }

    /**
     * Number of responsible persons data returned in search result for the given parameters.
     */
    public function getCount(): ?int
    {
        return $this->count;
    }

    /**
     * Number of responsible persons data returned in search result for the given parameters.
     */
    public function setCount(?int $count): self
    {
        $this->initialized['count'] = true;
        $this->count = $count;

        return $this;
    }

    /**
     * Total number of available responsible persons data.
     */
    public function getTotalCount(): ?int
    {
        return $this->totalCount;
    }

    /**
     * Total number of available responsible persons data.
     */
    public function setTotalCount(?int $totalCount): self
    {
        $this->initialized['totalCount'] = true;
        $this->totalCount = $totalCount;

        return $this;
    }
}
