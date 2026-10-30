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

class ThreadVBeta1 implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var string|null
     */
    protected $id;
    /**
     * @var bool|null
     */
    protected $read;
    /**
     * Thread type: `COMMON` - standard conversation; `POST_PURCHASE_ISSUE` - post-purchase issue thread. Available only for content version 'application/vnd.allegro.beta.v1+json'.
     *
     * @var string|null
     */
    protected $type;
    /**
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * @var \DateTime|null
     */
    protected $lastMessageDateTime;
    /**
     * @var list<ThreadParticipantVBeta1>|null
     */
    protected $participants;
    /**
     * @var list<ThreadOrderVBeta1>|null
     */
    protected $orders;
    /**
     * Reason for the post-purchase issue: `PRODUCT_INCONSISTENT_WITH_THE_OFFER` - product does not match the offer description, photos, or parameters; `PRODUCT_ARRIVED_DAMAGED` - product arrived damaged; `DEFECT_DETECTED_DURING_USE` - defect detected during use; `NO_PRODUCT_IN_THE_SHIPMENT` - product missing from the shipment; `MISSING_PRODUCT_ELEMENTS` - product elements, such as screws, missing; `PACKAGE_DELAYED` - package delayed; `PACKAGE_DAMAGED` - package damaged; `PACKAGE_LOST` - package lost; `OTHER` - reason not listed; `NO_REFUND` - refund not received after order cancellation or return; `SELLER_DOES_NOT_WANT_TO_ACCEPT_RETURN` - seller refuses to accept the return; `PROBLEM_WITH_SENDING_PRODUCT_BACK` - problem returning the product; `NO_DOCUMENTATIONS` - proof of purchase, instructions, or warranty missing; `PROBLEM_WITH_WITHDRAWAL_CANCELLATION_OF_PURCHASE` - problem with withdrawal from or cancellation of the purchase.
     *
     * @var string|null
     */
    protected $subType;
    /**
     * @var string|null
     */
    protected $status;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getRead(): ?bool
    {
        return $this->read;
    }

    public function setRead(?bool $read): self
    {
        $this->initialized['read'] = true;
        $this->read = $read;

        return $this;
    }

    /**
     * Thread type: `COMMON` - standard conversation; `POST_PURCHASE_ISSUE` - post-purchase issue thread. Available only for content version 'application/vnd.allegro.beta.v1+json'.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Thread type: `COMMON` - standard conversation; `POST_PURCHASE_ISSUE` - post-purchase issue thread. Available only for content version 'application/vnd.allegro.beta.v1+json'.
     */
    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getLastMessageDateTime(): ?\DateTime
    {
        return $this->lastMessageDateTime;
    }

    public function setLastMessageDateTime(?\DateTime $lastMessageDateTime): self
    {
        $this->initialized['lastMessageDateTime'] = true;
        $this->lastMessageDateTime = $lastMessageDateTime;

        return $this;
    }

    /**
     * @return list<ThreadParticipantVBeta1>|null
     */
    public function getParticipants(): ?array
    {
        return $this->participants;
    }

    /**
     * @param list<ThreadParticipantVBeta1>|null $participants
     */
    public function setParticipants(?array $participants): self
    {
        $this->initialized['participants'] = true;
        $this->participants = $participants;

        return $this;
    }

    /**
     * @return list<ThreadOrderVBeta1>|null
     */
    public function getOrders(): ?array
    {
        return $this->orders;
    }

    /**
     * @param list<ThreadOrderVBeta1>|null $orders
     */
    public function setOrders(?array $orders): self
    {
        $this->initialized['orders'] = true;
        $this->orders = $orders;

        return $this;
    }

    /**
     * Reason for the post-purchase issue: `PRODUCT_INCONSISTENT_WITH_THE_OFFER` - product does not match the offer description, photos, or parameters; `PRODUCT_ARRIVED_DAMAGED` - product arrived damaged; `DEFECT_DETECTED_DURING_USE` - defect detected during use; `NO_PRODUCT_IN_THE_SHIPMENT` - product missing from the shipment; `MISSING_PRODUCT_ELEMENTS` - product elements, such as screws, missing; `PACKAGE_DELAYED` - package delayed; `PACKAGE_DAMAGED` - package damaged; `PACKAGE_LOST` - package lost; `OTHER` - reason not listed; `NO_REFUND` - refund not received after order cancellation or return; `SELLER_DOES_NOT_WANT_TO_ACCEPT_RETURN` - seller refuses to accept the return; `PROBLEM_WITH_SENDING_PRODUCT_BACK` - problem returning the product; `NO_DOCUMENTATIONS` - proof of purchase, instructions, or warranty missing; `PROBLEM_WITH_WITHDRAWAL_CANCELLATION_OF_PURCHASE` - problem with withdrawal from or cancellation of the purchase.
     */
    public function getSubType(): ?string
    {
        return $this->subType;
    }

    /**
     * Reason for the post-purchase issue: `PRODUCT_INCONSISTENT_WITH_THE_OFFER` - product does not match the offer description, photos, or parameters; `PRODUCT_ARRIVED_DAMAGED` - product arrived damaged; `DEFECT_DETECTED_DURING_USE` - defect detected during use; `NO_PRODUCT_IN_THE_SHIPMENT` - product missing from the shipment; `MISSING_PRODUCT_ELEMENTS` - product elements, such as screws, missing; `PACKAGE_DELAYED` - package delayed; `PACKAGE_DAMAGED` - package damaged; `PACKAGE_LOST` - package lost; `OTHER` - reason not listed; `NO_REFUND` - refund not received after order cancellation or return; `SELLER_DOES_NOT_WANT_TO_ACCEPT_RETURN` - seller refuses to accept the return; `PROBLEM_WITH_SENDING_PRODUCT_BACK` - problem returning the product; `NO_DOCUMENTATIONS` - proof of purchase, instructions, or warranty missing; `PROBLEM_WITH_WITHDRAWAL_CANCELLATION_OF_PURCHASE` - problem with withdrawal from or cancellation of the purchase.
     */
    public function setSubType(?string $subType): self
    {
        $this->initialized['subType'] = true;
        $this->subType = $subType;

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

    public function definedProperties(): array
    {
        return ['id' => ['id', 'getId', 'setId'], 'read' => ['read', 'getRead', 'setRead'], 'type' => ['type', 'getType', 'setType'], 'createdAt' => ['createdAt', 'getCreatedAt', 'setCreatedAt'], 'lastMessageDateTime' => ['lastMessageDateTime', 'getLastMessageDateTime', 'setLastMessageDateTime'], 'participants' => ['participants', 'getParticipants', 'setParticipants'], 'orders' => ['orders', 'getOrders', 'setOrders'], 'subType' => ['subType', 'getSubType', 'setSubType'], 'status' => ['status', 'getStatus', 'setStatus']];
    }
}
