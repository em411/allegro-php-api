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

class SmartSellerClassificationReport extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Seller Smart! eligibility status.
     *
     * @var SmartSellerClassificationReportClassification|null
     */
    protected $classification;
    /**
     * Set of conditions to be met in order for user to be Smart!
     *
     * @var list<SmartSellerClassificationReportConditionsItem>|null
     */
    protected $conditions;
    /**
     * Set of delivery methods that were excluded from Smart! classification on demand by seller.
     *
     * @var list<SmartDeliveryMethod>|null
     */
    protected $excludedDeliveryMethods;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Seller Smart! eligibility status.
     */
    public function getClassification(): ?SmartSellerClassificationReportClassification
    {
        return $this->classification;
    }

    /**
     * Seller Smart! eligibility status.
     */
    public function setClassification(?SmartSellerClassificationReportClassification $classification): self
    {
        $this->initialized['classification'] = true;
        $this->classification = $classification;

        return $this;
    }

    /**
     * Set of conditions to be met in order for user to be Smart!
     *
     * @return list<SmartSellerClassificationReportConditionsItem>|null
     */
    public function getConditions(): ?array
    {
        return $this->conditions;
    }

    /**
     * Set of conditions to be met in order for user to be Smart!
     *
     * @param list<SmartSellerClassificationReportConditionsItem>|null $conditions
     */
    public function setConditions(?array $conditions): self
    {
        $this->initialized['conditions'] = true;
        $this->conditions = $conditions;

        return $this;
    }

    /**
     * Set of delivery methods that were excluded from Smart! classification on demand by seller.
     *
     * @return list<SmartDeliveryMethod>|null
     */
    public function getExcludedDeliveryMethods(): ?array
    {
        return $this->excludedDeliveryMethods;
    }

    /**
     * Set of delivery methods that were excluded from Smart! classification on demand by seller.
     *
     * @param list<SmartDeliveryMethod>|null $excludedDeliveryMethods
     */
    public function setExcludedDeliveryMethods(?array $excludedDeliveryMethods): self
    {
        $this->initialized['excludedDeliveryMethods'] = true;
        $this->excludedDeliveryMethods = $excludedDeliveryMethods;

        return $this;
    }
}
