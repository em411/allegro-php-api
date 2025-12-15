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

class CustomerReturnItemReason extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Possible values: "NONE", "MISTAKE", "TRANSPORT", "DAMAGED", "NOT_AS_DESCRIBED", "DONT_LIKE_IT", "OVERDUE_DELIVERY", "INCOMPLETE", "HIDDEN_FLAW", "OTHER_FLAW", "DIFFERENT", "COUNTERFEIT", "NOT_NEW", "TOO_LARGE", "TOO_SMALL", "NOT_AS_EXPECTED", "ORDERED_FOR_COMPARISON".
     *
     * @var string|null
     */
    protected $type;
    /**
     * @var string|null
     */
    protected $userComment;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Possible values: "NONE", "MISTAKE", "TRANSPORT", "DAMAGED", "NOT_AS_DESCRIBED", "DONT_LIKE_IT", "OVERDUE_DELIVERY", "INCOMPLETE", "HIDDEN_FLAW", "OTHER_FLAW", "DIFFERENT", "COUNTERFEIT", "NOT_NEW", "TOO_LARGE", "TOO_SMALL", "NOT_AS_EXPECTED", "ORDERED_FOR_COMPARISON".
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Possible values: "NONE", "MISTAKE", "TRANSPORT", "DAMAGED", "NOT_AS_DESCRIBED", "DONT_LIKE_IT", "OVERDUE_DELIVERY", "INCOMPLETE", "HIDDEN_FLAW", "OTHER_FLAW", "DIFFERENT", "COUNTERFEIT", "NOT_NEW", "TOO_LARGE", "TOO_SMALL", "NOT_AS_EXPECTED", "ORDERED_FOR_COMPARISON".
     */
    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    public function getUserComment(): ?string
    {
        return $this->userComment;
    }

    public function setUserComment(?string $userComment): self
    {
        $this->initialized['userComment'] = true;
        $this->userComment = $userComment;

        return $this;
    }
}
