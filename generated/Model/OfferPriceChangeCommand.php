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

class OfferPriceChangeCommand extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The way the offer price should be changed. One of three ways is possible: new price, increase/decrease price, percentage change and only one can be chosen at once.
     *
     * @var PriceModification|null
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
     * The way the offer price should be changed. One of three ways is possible: new price, increase/decrease price, percentage change and only one can be chosen at once.
     */
    public function getModification(): ?PriceModification
    {
        return $this->modification;
    }

    /**
     * The way the offer price should be changed. One of three ways is possible: new price, increase/decrease price, percentage change and only one can be chosen at once.
     */
    public function setModification(?PriceModification $modification): self
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
}
