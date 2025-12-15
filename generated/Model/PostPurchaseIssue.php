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

class PostPurchaseIssue extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Identifier of the issue.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Whether the issue is a dispute or a claim.
     *
     * @var string|null
     */
    protected $type;
    /**
     * Human readable claim identifier. Null for disputes.
     *
     * @var string|null
     */
    protected $referenceNumber;
    /**
     * Deadline for claim acceptance or rejection. Null for disputes.
     *
     * @var \DateTime|null
     */
    protected $decisionDueDate;
    /**
     * The most recent date when the issue has been opened or reopened.
     *
     * @var \DateTime|null
     */
    protected $openedDate;
    /**
     * Subject of the issue, possible values in english based on the reason field: - NO_PRODUCT_RECEIVED - I have not received the product - NO_PRODUCT_IN_PARCEL - no product in the parcel - NO_PROOF_OF_PURCHASE_MANUAL_OR_WARRANTY - no proof of purchase, manual, or warranty - MISSING_PRODUCT_ELEMENT - missing product element - PRODUCT_AND_PARCEL_DAMAGED_IN_TRANSIT - product and parcel damaged (in transit) - PRODUCT_DAMAGED_PARCEL_INTACT - the product is damaged, but the parcel is intact - DEFECT_FOUND_DURING_USE - defects emerged during use - NOT_AS_DESCRIBED - does not match the description - SELLER_DOES_NOT_WANT_TO_ACCEPT_RETURN - the seller does not want to accept the return - PROBLEM_WITH_SENDING_PRODUCT_BACK - I have a problem returning the product - NO_REFUND_AFTER_RETURNING_PRODUCT - no refund after returning the product - NO_REFUND_AFTER_CANCELING_ORDER - no refund after canceling the order - DID_NOT_RECEIVE_GOODS_AFTER_PAYMENT - I did not receive the goods after payment - RECEIVED_ITEMS_NOT_MATCHING_DESCRIPTION - I received an order inconsistent with the description - RECEIVED_INCOMPLETE_ORDER - I received an incomplete order - ITEM_IS_DAMAGED - the product is damaged - PROBLEM_WITH_WITHDRAWAL_CANCELLATION_OF_PURCHASE - problem with withdrawal/cancelation of purchase - PROBLEM_WITH_GOODS_RETURN_CANCELLATION_OF_PURCHASE - I have a problem returning the goods/canceling the purchase.
     *
     * @var string|null
     */
    protected $subject;
    /**
     * @var PostPurchaseIssueUser|null
     */
    protected $buyer;
    /**
     * @var PostPurchaseIssueCheckoutForm|null
     */
    protected $checkoutForm;
    /**
     * Formal claim state data.
     *
     * @var PostPurchaseIssueState|null
     */
    protected $currentState;
    /**
     * Message and state change notification data.
     *
     * @var PostPurchaseIssueChat|null
     */
    protected $chat;
    /**
     * A list of expected solutions.
     *
     * @var list<PostPurchaseIssueExpectation>|null
     */
    protected $expectations;
    /**
     * @var string|null
     */
    protected $description;
    /**
     * Data about offer that is the subject of this issue, if any.
     *
     * @var PostPurchaseIssueOffer|null
     */
    protected $offer;
    /**
     * Data about product that is the subject of this issue, if any.
     *
     * @var PostPurchaseIssueProduct|null
     */
    protected $product;
    /**
     * Claim reason. Not present for disputes.
     *
     * @var PostPurchaseIssueReason|null
     */
    protected $reason;
    /**
     * Field only present for claims (not disputes).
     *
     * @var string|null
     */
    protected $right;
    /**
     * @var list<PostPurchaseIssueAttachment>|null
     */
    protected $attachments;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Identifier of the issue.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Identifier of the issue.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Whether the issue is a dispute or a claim.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Whether the issue is a dispute or a claim.
     */
    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * Human readable claim identifier. Null for disputes.
     */
    public function getReferenceNumber(): ?string
    {
        return $this->referenceNumber;
    }

    /**
     * Human readable claim identifier. Null for disputes.
     */
    public function setReferenceNumber(?string $referenceNumber): self
    {
        $this->initialized['referenceNumber'] = true;
        $this->referenceNumber = $referenceNumber;

        return $this;
    }

    /**
     * Deadline for claim acceptance or rejection. Null for disputes.
     */
    public function getDecisionDueDate(): ?\DateTime
    {
        return $this->decisionDueDate;
    }

    /**
     * Deadline for claim acceptance or rejection. Null for disputes.
     */
    public function setDecisionDueDate(?\DateTime $decisionDueDate): self
    {
        $this->initialized['decisionDueDate'] = true;
        $this->decisionDueDate = $decisionDueDate;

        return $this;
    }

    /**
     * The most recent date when the issue has been opened or reopened.
     */
    public function getOpenedDate(): ?\DateTime
    {
        return $this->openedDate;
    }

    /**
     * The most recent date when the issue has been opened or reopened.
     */
    public function setOpenedDate(?\DateTime $openedDate): self
    {
        $this->initialized['openedDate'] = true;
        $this->openedDate = $openedDate;

        return $this;
    }

    /**
     * Subject of the issue, possible values in english based on the reason field: - NO_PRODUCT_RECEIVED - I have not received the product - NO_PRODUCT_IN_PARCEL - no product in the parcel - NO_PROOF_OF_PURCHASE_MANUAL_OR_WARRANTY - no proof of purchase, manual, or warranty - MISSING_PRODUCT_ELEMENT - missing product element - PRODUCT_AND_PARCEL_DAMAGED_IN_TRANSIT - product and parcel damaged (in transit) - PRODUCT_DAMAGED_PARCEL_INTACT - the product is damaged, but the parcel is intact - DEFECT_FOUND_DURING_USE - defects emerged during use - NOT_AS_DESCRIBED - does not match the description - SELLER_DOES_NOT_WANT_TO_ACCEPT_RETURN - the seller does not want to accept the return - PROBLEM_WITH_SENDING_PRODUCT_BACK - I have a problem returning the product - NO_REFUND_AFTER_RETURNING_PRODUCT - no refund after returning the product - NO_REFUND_AFTER_CANCELING_ORDER - no refund after canceling the order - DID_NOT_RECEIVE_GOODS_AFTER_PAYMENT - I did not receive the goods after payment - RECEIVED_ITEMS_NOT_MATCHING_DESCRIPTION - I received an order inconsistent with the description - RECEIVED_INCOMPLETE_ORDER - I received an incomplete order - ITEM_IS_DAMAGED - the product is damaged - PROBLEM_WITH_WITHDRAWAL_CANCELLATION_OF_PURCHASE - problem with withdrawal/cancelation of purchase - PROBLEM_WITH_GOODS_RETURN_CANCELLATION_OF_PURCHASE - I have a problem returning the goods/canceling the purchase.
     */
    public function getSubject(): ?string
    {
        return $this->subject;
    }

    /**
     * Subject of the issue, possible values in english based on the reason field: - NO_PRODUCT_RECEIVED - I have not received the product - NO_PRODUCT_IN_PARCEL - no product in the parcel - NO_PROOF_OF_PURCHASE_MANUAL_OR_WARRANTY - no proof of purchase, manual, or warranty - MISSING_PRODUCT_ELEMENT - missing product element - PRODUCT_AND_PARCEL_DAMAGED_IN_TRANSIT - product and parcel damaged (in transit) - PRODUCT_DAMAGED_PARCEL_INTACT - the product is damaged, but the parcel is intact - DEFECT_FOUND_DURING_USE - defects emerged during use - NOT_AS_DESCRIBED - does not match the description - SELLER_DOES_NOT_WANT_TO_ACCEPT_RETURN - the seller does not want to accept the return - PROBLEM_WITH_SENDING_PRODUCT_BACK - I have a problem returning the product - NO_REFUND_AFTER_RETURNING_PRODUCT - no refund after returning the product - NO_REFUND_AFTER_CANCELING_ORDER - no refund after canceling the order - DID_NOT_RECEIVE_GOODS_AFTER_PAYMENT - I did not receive the goods after payment - RECEIVED_ITEMS_NOT_MATCHING_DESCRIPTION - I received an order inconsistent with the description - RECEIVED_INCOMPLETE_ORDER - I received an incomplete order - ITEM_IS_DAMAGED - the product is damaged - PROBLEM_WITH_WITHDRAWAL_CANCELLATION_OF_PURCHASE - problem with withdrawal/cancelation of purchase - PROBLEM_WITH_GOODS_RETURN_CANCELLATION_OF_PURCHASE - I have a problem returning the goods/canceling the purchase.
     */
    public function setSubject(?string $subject): self
    {
        $this->initialized['subject'] = true;
        $this->subject = $subject;

        return $this;
    }

    public function getBuyer(): ?PostPurchaseIssueUser
    {
        return $this->buyer;
    }

    public function setBuyer(?PostPurchaseIssueUser $buyer): self
    {
        $this->initialized['buyer'] = true;
        $this->buyer = $buyer;

        return $this;
    }

    public function getCheckoutForm(): ?PostPurchaseIssueCheckoutForm
    {
        return $this->checkoutForm;
    }

    public function setCheckoutForm(?PostPurchaseIssueCheckoutForm $checkoutForm): self
    {
        $this->initialized['checkoutForm'] = true;
        $this->checkoutForm = $checkoutForm;

        return $this;
    }

    /**
     * Formal claim state data.
     */
    public function getCurrentState(): ?PostPurchaseIssueState
    {
        return $this->currentState;
    }

    /**
     * Formal claim state data.
     */
    public function setCurrentState(?PostPurchaseIssueState $currentState): self
    {
        $this->initialized['currentState'] = true;
        $this->currentState = $currentState;

        return $this;
    }

    /**
     * Message and state change notification data.
     */
    public function getChat(): ?PostPurchaseIssueChat
    {
        return $this->chat;
    }

    /**
     * Message and state change notification data.
     */
    public function setChat(?PostPurchaseIssueChat $chat): self
    {
        $this->initialized['chat'] = true;
        $this->chat = $chat;

        return $this;
    }

    /**
     * A list of expected solutions.
     *
     * @return list<PostPurchaseIssueExpectation>|null
     */
    public function getExpectations(): ?array
    {
        return $this->expectations;
    }

    /**
     * A list of expected solutions.
     *
     * @param list<PostPurchaseIssueExpectation>|null $expectations
     */
    public function setExpectations(?array $expectations): self
    {
        $this->initialized['expectations'] = true;
        $this->expectations = $expectations;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    /**
     * Data about offer that is the subject of this issue, if any.
     */
    public function getOffer(): ?PostPurchaseIssueOffer
    {
        return $this->offer;
    }

    /**
     * Data about offer that is the subject of this issue, if any.
     */
    public function setOffer(?PostPurchaseIssueOffer $offer): self
    {
        $this->initialized['offer'] = true;
        $this->offer = $offer;

        return $this;
    }

    /**
     * Data about product that is the subject of this issue, if any.
     */
    public function getProduct(): ?PostPurchaseIssueProduct
    {
        return $this->product;
    }

    /**
     * Data about product that is the subject of this issue, if any.
     */
    public function setProduct(?PostPurchaseIssueProduct $product): self
    {
        $this->initialized['product'] = true;
        $this->product = $product;

        return $this;
    }

    /**
     * Claim reason. Not present for disputes.
     */
    public function getReason(): ?PostPurchaseIssueReason
    {
        return $this->reason;
    }

    /**
     * Claim reason. Not present for disputes.
     */
    public function setReason(?PostPurchaseIssueReason $reason): self
    {
        $this->initialized['reason'] = true;
        $this->reason = $reason;

        return $this;
    }

    /**
     * Field only present for claims (not disputes).
     */
    public function getRight(): ?string
    {
        return $this->right;
    }

    /**
     * Field only present for claims (not disputes).
     */
    public function setRight(?string $right): self
    {
        $this->initialized['right'] = true;
        $this->right = $right;

        return $this;
    }

    /**
     * @return list<PostPurchaseIssueAttachment>|null
     */
    public function getAttachments(): ?array
    {
        return $this->attachments;
    }

    /**
     * @param list<PostPurchaseIssueAttachment>|null $attachments
     */
    public function setAttachments(?array $attachments): self
    {
        $this->initialized['attachments'] = true;
        $this->attachments = $attachments;

        return $this;
    }
}
