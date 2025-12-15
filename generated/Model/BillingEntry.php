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

class BillingEntry extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * ID of the returned billing entry.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Date of billing entry.
     *
     * @var \DateTime|null
     */
    protected $occurredAt;
    /**
     * @var BillingEntryType|null
     */
    protected $type;
    /**
     * Offer associated with the returned billing entry.
     *
     * @var BillingEntryOffer|null
     */
    protected $offer;
    /**
     * Money value of the returned billing entry.
     *
     * @var BillingEntryValue|null
     */
    protected $value;
    /**
     * Tax rate applied to the returned billing entry. Optional field percentage is present if the returned billing entry is subject to tax. In this case, annotation is not returned. Optional field annotation is present if the returned billing entry is exempt from tax or tax is not applicable; the possible value is "OUT_OF_SCOPE". In this case, percentage is not returned.
     *
     * @var BillingEntryTax|null
     */
    protected $tax;
    /**
     * User account balance calculated on billing date.
     *
     * @var BillingEntryBalance|null
     */
    protected $balance;
    /**
     * Order associated with the returned billing entry.
     *
     * @var BillingEntryOrder|null
     */
    protected $order;
    /**
     * Additional information associated with the returned billing entry.
     *
     * @var list<BillingEntryAdditionalInfoItem>|null
     */
    protected $additionalInfo;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * ID of the returned billing entry.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * ID of the returned billing entry.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Date of billing entry.
     */
    public function getOccurredAt(): ?\DateTime
    {
        return $this->occurredAt;
    }

    /**
     * Date of billing entry.
     */
    public function setOccurredAt(?\DateTime $occurredAt): self
    {
        $this->initialized['occurredAt'] = true;
        $this->occurredAt = $occurredAt;

        return $this;
    }

    public function getType(): ?BillingEntryType
    {
        return $this->type;
    }

    public function setType(?BillingEntryType $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * Offer associated with the returned billing entry.
     */
    public function getOffer(): ?BillingEntryOffer
    {
        return $this->offer;
    }

    /**
     * Offer associated with the returned billing entry.
     */
    public function setOffer(?BillingEntryOffer $offer): self
    {
        $this->initialized['offer'] = true;
        $this->offer = $offer;

        return $this;
    }

    /**
     * Money value of the returned billing entry.
     */
    public function getValue(): ?BillingEntryValue
    {
        return $this->value;
    }

    /**
     * Money value of the returned billing entry.
     */
    public function setValue(?BillingEntryValue $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;

        return $this;
    }

    /**
     * Tax rate applied to the returned billing entry. Optional field percentage is present if the returned billing entry is subject to tax. In this case, annotation is not returned. Optional field annotation is present if the returned billing entry is exempt from tax or tax is not applicable; the possible value is "OUT_OF_SCOPE". In this case, percentage is not returned.
     */
    public function getTax(): ?BillingEntryTax
    {
        return $this->tax;
    }

    /**
     * Tax rate applied to the returned billing entry. Optional field percentage is present if the returned billing entry is subject to tax. In this case, annotation is not returned. Optional field annotation is present if the returned billing entry is exempt from tax or tax is not applicable; the possible value is "OUT_OF_SCOPE". In this case, percentage is not returned.
     */
    public function setTax(?BillingEntryTax $tax): self
    {
        $this->initialized['tax'] = true;
        $this->tax = $tax;

        return $this;
    }

    /**
     * User account balance calculated on billing date.
     */
    public function getBalance(): ?BillingEntryBalance
    {
        return $this->balance;
    }

    /**
     * User account balance calculated on billing date.
     */
    public function setBalance(?BillingEntryBalance $balance): self
    {
        $this->initialized['balance'] = true;
        $this->balance = $balance;

        return $this;
    }

    /**
     * Order associated with the returned billing entry.
     */
    public function getOrder(): ?BillingEntryOrder
    {
        return $this->order;
    }

    /**
     * Order associated with the returned billing entry.
     */
    public function setOrder(?BillingEntryOrder $order): self
    {
        $this->initialized['order'] = true;
        $this->order = $order;

        return $this;
    }

    /**
     * Additional information associated with the returned billing entry.
     *
     * @return list<BillingEntryAdditionalInfoItem>|null
     */
    public function getAdditionalInfo(): ?array
    {
        return $this->additionalInfo;
    }

    /**
     * Additional information associated with the returned billing entry.
     *
     * @param list<BillingEntryAdditionalInfoItem>|null $additionalInfo
     */
    public function setAdditionalInfo(?array $additionalInfo): self
    {
        $this->initialized['additionalInfo'] = true;
        $this->additionalInfo = $additionalInfo;

        return $this;
    }
}
