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

class UserRatingVBeta1 extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Seller's answer, if null seller did not publish answer.
     *
     * @var AnswerVBeta1|null
     */
    protected $answer;
    /**
     * @var User|null
     */
    protected $buyer;
    /**
     * @var CommentVBeta1|null
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
     * @var Exclusion|null
     */
    protected $exclusion;
    /**
     * Rating id.
     *
     * @var string|null
     */
    protected $id;
    /**
     * List of the justifications chosen by the buyer while creating rating.
     *
     * @var list<Justification>|null
     */
    protected $justifications;
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
     * Whether buyer recommends the order.
     *
     * @var bool|null
     */
    protected $recommended;
    /**
     * @var RemovalVBeta1|null
     */
    protected $removal;
    /**
     * Whether the rating is the first negative in the last 30 days.
     *
     * @var bool|null
     */
    protected $firstNegativeReviewInLast30Days;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Seller's answer, if null seller did not publish answer.
     */
    public function getAnswer(): ?AnswerVBeta1
    {
        return $this->answer;
    }

    /**
     * Seller's answer, if null seller did not publish answer.
     */
    public function setAnswer(?AnswerVBeta1 $answer): self
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

    public function getComment(): ?CommentVBeta1
    {
        return $this->comment;
    }

    public function setComment(?CommentVBeta1 $comment): self
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

    public function getExclusion(): ?Exclusion
    {
        return $this->exclusion;
    }

    public function setExclusion(?Exclusion $exclusion): self
    {
        $this->initialized['exclusion'] = true;
        $this->exclusion = $exclusion;

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
     * List of the justifications chosen by the buyer while creating rating.
     *
     * @return list<Justification>|null
     */
    public function getJustifications(): ?array
    {
        return $this->justifications;
    }

    /**
     * List of the justifications chosen by the buyer while creating rating.
     *
     * @param list<Justification>|null $justifications
     */
    public function setJustifications(?array $justifications): self
    {
        $this->initialized['justifications'] = true;
        $this->justifications = $justifications;

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

    public function getRemoval(): ?RemovalVBeta1
    {
        return $this->removal;
    }

    public function setRemoval(?RemovalVBeta1 $removal): self
    {
        $this->initialized['removal'] = true;
        $this->removal = $removal;

        return $this;
    }

    /**
     * Whether the rating is the first negative in the last 30 days.
     */
    public function getFirstNegativeReviewInLast30Days(): ?bool
    {
        return $this->firstNegativeReviewInLast30Days;
    }

    /**
     * Whether the rating is the first negative in the last 30 days.
     */
    public function setFirstNegativeReviewInLast30Days(?bool $firstNegativeReviewInLast30Days): self
    {
        $this->initialized['firstNegativeReviewInLast30Days'] = true;
        $this->firstNegativeReviewInLast30Days = $firstNegativeReviewInLast30Days;

        return $this;
    }
}
