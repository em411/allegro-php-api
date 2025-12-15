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

class SellerRebateDto extends \ArrayObject
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
     * when was this rebate created.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * Rebate identifier.
     *
     * @var string|null
     */
    protected $id;
    /**
     * What offers will be included.
     *
     * @var list<SellerRebateOfferCriterion>|null
     */
    protected $offerCriteria;
    /**
     * @var string|null
     */
    protected $status;

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
     * when was this rebate created.
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * when was this rebate created.
     */
    public function setCreatedAt(?\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Rebate identifier.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Rebate identifier.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

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

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }
}
