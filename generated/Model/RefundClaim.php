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

class RefundClaim extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * ID of the returned refund application.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Status of the returned refund application. - `IN_PROGRESS` - the application is being processed or awaits user or admin action. - `WAITING_FOR_PAYMENT_REFUND` - the application is being processed and awaits payment refund to buyer. - `GRANTED` - the application was accepted and a commission refund was granted as requested,
     *   or the application was rejected and the seller successfully appealed.
     * - `REJECTED` - the application was rejected and no commission was refunded. - `REJECTED_AFTER_APPEAL` - the application was initially rejected and the seller unsuccessfully appealed. - `CANCELLED` - the application was cancelled by the seller. - `APPEALED` - the application was rejected and the seller appealed, but the appeal has not yet finished processing.
     *
     * @var string|null
     */
    protected $status;
    /**
     * Quantity of product for which the seller filed the refund application.
     *
     * @var int|null
     */
    protected $quantity;
    /**
     * Gross money value of the returned refund application.
     *
     * @var RefundClaimCommission|null
     */
    protected $commission;
    /**
     * Buyer associated with the refund application.
     *
     * @var RefundClaimBuyer|null
     */
    protected $buyer;
    /**
     * Date when the refund application was created.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * Purchase associated with the refund application.
     *
     * @var RefundClaimLineItem|null
     */
    protected $lineItem;
    /**
     * Type of commission refund application. - `MANUAL` - the application was created manually by the seller. - `AUTOMATIC` - the application was created automatically.
     *
     * @var string|null
     */
    protected $type;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * ID of the returned refund application.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * ID of the returned refund application.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Status of the returned refund application. - `IN_PROGRESS` - the application is being processed or awaits user or admin action. - `WAITING_FOR_PAYMENT_REFUND` - the application is being processed and awaits payment refund to buyer. - `GRANTED` - the application was accepted and a commission refund was granted as requested,
     *   or the application was rejected and the seller successfully appealed.
     * - `REJECTED` - the application was rejected and no commission was refunded. - `REJECTED_AFTER_APPEAL` - the application was initially rejected and the seller unsuccessfully appealed. - `CANCELLED` - the application was cancelled by the seller. - `APPEALED` - the application was rejected and the seller appealed, but the appeal has not yet finished processing.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Status of the returned refund application. - `IN_PROGRESS` - the application is being processed or awaits user or admin action. - `WAITING_FOR_PAYMENT_REFUND` - the application is being processed and awaits payment refund to buyer. - `GRANTED` - the application was accepted and a commission refund was granted as requested,
     * or the application was rejected and the seller successfully appealed.
     * - `REJECTED` - the application was rejected and no commission was refunded. - `REJECTED_AFTER_APPEAL` - the application was initially rejected and the seller unsuccessfully appealed. - `CANCELLED` - the application was cancelled by the seller. - `APPEALED` - the application was rejected and the seller appealed, but the appeal has not yet finished processing.
     */
    public function setStatus(?string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }

    /**
     * Quantity of product for which the seller filed the refund application.
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    /**
     * Quantity of product for which the seller filed the refund application.
     */
    public function setQuantity(?int $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Gross money value of the returned refund application.
     */
    public function getCommission(): ?RefundClaimCommission
    {
        return $this->commission;
    }

    /**
     * Gross money value of the returned refund application.
     */
    public function setCommission(?RefundClaimCommission $commission): self
    {
        $this->initialized['commission'] = true;
        $this->commission = $commission;

        return $this;
    }

    /**
     * Buyer associated with the refund application.
     */
    public function getBuyer(): ?RefundClaimBuyer
    {
        return $this->buyer;
    }

    /**
     * Buyer associated with the refund application.
     */
    public function setBuyer(?RefundClaimBuyer $buyer): self
    {
        $this->initialized['buyer'] = true;
        $this->buyer = $buyer;

        return $this;
    }

    /**
     * Date when the refund application was created.
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * Date when the refund application was created.
     */
    public function setCreatedAt(?\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Purchase associated with the refund application.
     */
    public function getLineItem(): ?RefundClaimLineItem
    {
        return $this->lineItem;
    }

    /**
     * Purchase associated with the refund application.
     */
    public function setLineItem(?RefundClaimLineItem $lineItem): self
    {
        $this->initialized['lineItem'] = true;
        $this->lineItem = $lineItem;

        return $this;
    }

    /**
     * Type of commission refund application. - `MANUAL` - the application was created manually by the seller. - `AUTOMATIC` - the application was created automatically.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Type of commission refund application. - `MANUAL` - the application was created manually by the seller. - `AUTOMATIC` - the application was created automatically.
     */
    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }
}
