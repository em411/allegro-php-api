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

class SmartOfferClassificationReport extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Offer Smart! eligibility status.
     *
     * @var SmartOfferClassificationReportClassification|null
     */
    protected $classification;
    /**
     * Indicates whether that particular offer is set to be reclassified in the next 24 hours.
     *
     * @var bool|null
     */
    protected $scheduledForReclassification;
    /**
     * Delivery methods marked with Smart! label.
     *
     * @deprecated
     *
     * @var list<SmartDeliveryMethod>|null
     */
    protected $smartDeliveryMethods;
    /**
     * Set of conditions to be met in order for that particular offer to be Smart!. Each condition filters out improperly configured delivery methods or checks some offer attributes. Order of conditions matters. Please keep in mind that this is a **PREVIEW** of an offer classification if being conducted right now - actual classification is triggered only by attribute changes and as of now it cannot be manually done on demand.
     *
     * @var list<SmartOfferClassificationReportConditionsItem>|null
     */
    protected $conditions;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Offer Smart! eligibility status.
     */
    public function getClassification(): ?SmartOfferClassificationReportClassification
    {
        return $this->classification;
    }

    /**
     * Offer Smart! eligibility status.
     */
    public function setClassification(?SmartOfferClassificationReportClassification $classification): self
    {
        $this->initialized['classification'] = true;
        $this->classification = $classification;

        return $this;
    }

    /**
     * Indicates whether that particular offer is set to be reclassified in the next 24 hours.
     */
    public function getScheduledForReclassification(): ?bool
    {
        return $this->scheduledForReclassification;
    }

    /**
     * Indicates whether that particular offer is set to be reclassified in the next 24 hours.
     */
    public function setScheduledForReclassification(?bool $scheduledForReclassification): self
    {
        $this->initialized['scheduledForReclassification'] = true;
        $this->scheduledForReclassification = $scheduledForReclassification;

        return $this;
    }

    /**
     * Delivery methods marked with Smart! label.
     *
     * @deprecated
     *
     * @return list<SmartDeliveryMethod>|null
     */
    public function getSmartDeliveryMethods(): ?array
    {
        return $this->smartDeliveryMethods;
    }

    /**
     * Delivery methods marked with Smart! label.
     *
     * @param list<SmartDeliveryMethod>|null $smartDeliveryMethods
     *
     * @deprecated
     */
    public function setSmartDeliveryMethods(?array $smartDeliveryMethods): self
    {
        $this->initialized['smartDeliveryMethods'] = true;
        $this->smartDeliveryMethods = $smartDeliveryMethods;

        return $this;
    }

    /**
     * Set of conditions to be met in order for that particular offer to be Smart!. Each condition filters out improperly configured delivery methods or checks some offer attributes. Order of conditions matters. Please keep in mind that this is a **PREVIEW** of an offer classification if being conducted right now - actual classification is triggered only by attribute changes and as of now it cannot be manually done on demand.
     *
     * @return list<SmartOfferClassificationReportConditionsItem>|null
     */
    public function getConditions(): ?array
    {
        return $this->conditions;
    }

    /**
     * Set of conditions to be met in order for that particular offer to be Smart!. Each condition filters out improperly configured delivery methods or checks some offer attributes. Order of conditions matters. Please keep in mind that this is a **PREVIEW** of an offer classification if being conducted right now - actual classification is triggered only by attribute changes and as of now it cannot be manually done on demand.
     *
     * @param list<SmartOfferClassificationReportConditionsItem>|null $conditions
     */
    public function setConditions(?array $conditions): self
    {
        $this->initialized['conditions'] = true;
        $this->conditions = $conditions;

        return $this;
    }
}
