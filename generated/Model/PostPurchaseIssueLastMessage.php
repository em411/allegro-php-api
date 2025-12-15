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

class PostPurchaseIssueLastMessage extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Status of the last message in a dispute or claim:
     *   - *NEW* - The seller never sent a message in the chat. Latest message could have been sent by buyer or advisor.
     *   - *SELLER_REPLIED* - The last message was written by the seller.
     *   - *BUYER_REPLIED - The last message was written by the buyer and the seller has written at least one message previously.
     *   - *ALLEGRO_ADVISOR_REPLIED - The last message was written by an advisor and the seller has written at least one message previously.
     *
     * @var string|null
     */
    protected $status;
    /**
     * @var \DateTime|null
     */
    protected $createdAt;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Status of the last message in a dispute or claim:
     *   - *NEW* - The seller never sent a message in the chat. Latest message could have been sent by buyer or advisor.
     *   - *SELLER_REPLIED* - The last message was written by the seller.
     *   - *BUYER_REPLIED - The last message was written by the buyer and the seller has written at least one message previously.
     *   - *ALLEGRO_ADVISOR_REPLIED - The last message was written by an advisor and the seller has written at least one message previously.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Status of the last message in a dispute or claim:
     * - *NEW* - The seller never sent a message in the chat. Latest message could have been sent by buyer or advisor.
     * - *SELLER_REPLIED* - The last message was written by the seller.
     * - *BUYER_REPLIED - The last message was written by the buyer and the seller has written at least one message previously.
     * - *ALLEGRO_ADVISOR_REPLIED - The last message was written by an advisor and the seller has written at least one message previously.
     */
    public function setStatus(?string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

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
}
