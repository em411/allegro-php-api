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

class UserRating extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Seller's answer, if null seller did not publish answer.
     *
     * @var Answer|null
     */
    protected $answer;
    /**
     * @var User|null
     */
    protected $buyer;
    /**
     * Buyer's text comment.
     *
     * @var string|null
     */
    protected $comment;
    /**
     * Creation datetime in ISO 8601 format.
     *
     * @var string|null
     */
    protected $createdAt;
    /**
     * Edition datetime in ISO 8601 format.
     *
     * @var string|null
     */
    protected $editedAt;
    /**
     * If true this rating was not included in calculating average user rates.
     *
     * @var bool|null
     */
    protected $excludedFromAverageRates;
    /**
     * The reason why the rating was excluded from calculating average user rates. The message is translated based on the value of the "Accept-Language" header and exists only when the rating was excluded.
     *
     * @var string|null
     */
    protected $excludedFromAverageRatesReason;
    /**
     * Rating id.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Last change (creation or latest edition) datetime in ISO 8601 format.
     *
     * @var string|null
     */
    protected $lastChangedAt;
    /**
     * @var Order|null
     */
    protected $order;
    /**
     * @var Rates|null
     */
    protected $rates;
    /**
     * Whether buyer recommends the order.
     *
     * @var bool|null
     */
    protected $recommended;
    /**
     * @var Removal|null
     */
    protected $removal;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Seller's answer, if null seller did not publish answer.
     */
    public function getAnswer(): ?Answer
    {
        return $this->answer;
    }

    /**
     * Seller's answer, if null seller did not publish answer.
     */
    public function setAnswer(?Answer $answer): self
    {
        $this->initialized['answer'] = true;
        $this->answer = $answer;

        return $this;
    }

    public function getBuyer(): ?User
    {
        return $this->buyer;
    }

    public function setBuyer(?User $buyer): self
    {
        $this->initialized['buyer'] = true;
        $this->buyer = $buyer;

        return $this;
    }

    /**
     * Buyer's text comment.
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }

    /**
     * Buyer's text comment.
     */
    public function setComment(?string $comment): self
    {
        $this->initialized['comment'] = true;
        $this->comment = $comment;

        return $this;
    }

    /**
     * Creation datetime in ISO 8601 format.
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }

    /**
     * Creation datetime in ISO 8601 format.
     */
    public function setCreatedAt(?string $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Edition datetime in ISO 8601 format.
     */
    public function getEditedAt(): ?string
    {
        return $this->editedAt;
    }

    /**
     * Edition datetime in ISO 8601 format.
     */
    public function setEditedAt(?string $editedAt): self
    {
        $this->initialized['editedAt'] = true;
        $this->editedAt = $editedAt;

        return $this;
    }

    /**
     * If true this rating was not included in calculating average user rates.
     */
    public function getExcludedFromAverageRates(): ?bool
    {
        return $this->excludedFromAverageRates;
    }

    /**
     * If true this rating was not included in calculating average user rates.
     */
    public function setExcludedFromAverageRates(?bool $excludedFromAverageRates): self
    {
        $this->initialized['excludedFromAverageRates'] = true;
        $this->excludedFromAverageRates = $excludedFromAverageRates;

        return $this;
    }

    /**
     * The reason why the rating was excluded from calculating average user rates. The message is translated based on the value of the "Accept-Language" header and exists only when the rating was excluded.
     */
    public function getExcludedFromAverageRatesReason(): ?string
    {
        return $this->excludedFromAverageRatesReason;
    }

    /**
     * The reason why the rating was excluded from calculating average user rates. The message is translated based on the value of the "Accept-Language" header and exists only when the rating was excluded.
     */
    public function setExcludedFromAverageRatesReason(?string $excludedFromAverageRatesReason): self
    {
        $this->initialized['excludedFromAverageRatesReason'] = true;
        $this->excludedFromAverageRatesReason = $excludedFromAverageRatesReason;

        return $this;
    }

    /**
     * Rating id.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Rating id.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Last change (creation or latest edition) datetime in ISO 8601 format.
     */
    public function getLastChangedAt(): ?string
    {
        return $this->lastChangedAt;
    }

    /**
     * Last change (creation or latest edition) datetime in ISO 8601 format.
     */
    public function setLastChangedAt(?string $lastChangedAt): self
    {
        $this->initialized['lastChangedAt'] = true;
        $this->lastChangedAt = $lastChangedAt;

        return $this;
    }

    public function getOrder(): ?Order
    {
        return $this->order;
    }

    public function setOrder(?Order $order): self
    {
        $this->initialized['order'] = true;
        $this->order = $order;

        return $this;
    }

    public function getRates(): ?Rates
    {
        return $this->rates;
    }

    public function setRates(?Rates $rates): self
    {
        $this->initialized['rates'] = true;
        $this->rates = $rates;

        return $this;
    }

    /**
     * Whether buyer recommends the order.
     */
    public function getRecommended(): ?bool
    {
        return $this->recommended;
    }

    /**
     * Whether buyer recommends the order.
     */
    public function setRecommended(?bool $recommended): self
    {
        $this->initialized['recommended'] = true;
        $this->recommended = $recommended;

        return $this;
    }

    public function getRemoval(): ?Removal
    {
        return $this->removal;
    }

    public function setRemoval(?Removal $removal): self
    {
        $this->initialized['removal'] = true;
        $this->removal = $removal;

        return $this;
    }
}
