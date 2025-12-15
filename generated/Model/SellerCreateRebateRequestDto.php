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

class SellerCreateRebateRequestDto extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * What kind of rebate will be given.
     *
     * @var list<Benefit>|null
     */
    protected $benefits;
    /**
     * What offers will be included.
     *
     * @var list<SellerRebateOfferCriterion>|null
     */
    protected $offerCriteria;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * What kind of rebate will be given.
     *
     * @return list<Benefit>|null
     */
    public function getBenefits(): ?array
    {
        return $this->benefits;
    }

    /**
     * What kind of rebate will be given.
     *
     * @param list<Benefit>|null $benefits
     */
    public function setBenefits(?array $benefits): self
    {
        $this->initialized['benefits'] = true;
        $this->benefits = $benefits;

        return $this;
    }

    /**
     * What offers will be included.
     *
     * @return list<SellerRebateOfferCriterion>|null
     */
    public function getOfferCriteria(): ?array
    {
        return $this->offerCriteria;
    }

    /**
     * What offers will be included.
     *
     * @param list<SellerRebateOfferCriterion>|null $offerCriteria
     */
    public function setOfferCriteria(?array $offerCriteria): self
    {
        $this->initialized['offerCriteria'] = true;
        $this->offerCriteria = $offerCriteria;

        return $this;
    }
}
