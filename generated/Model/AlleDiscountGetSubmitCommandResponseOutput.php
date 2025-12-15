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

class AlleDiscountGetSubmitCommandResponseOutput extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Status field possible values:
     *   - NEW - command processing has not started.
     *   - IN_PROGRESS - command is being processed.
     *   - FAILED - processing of the command failed. Offer will not participate in AlleDiscount.
     *   - SUCCESSFUL - processing of the command was successful. New participation was created but in some cases it still may be denied.
     *     To make sure that the offer is participating in AlleDiscount, check the participation status in
     *     'GET /sale/alle-discount/{campaignId}/submitted-offers`.
     *
     * @var string|null
     */
    protected $status;
    /**
     * Command creation date. ISO 8601 format.
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * Command update date. ISO 8601 format.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * Object containing info about created participation in AlleDiscount, contains the id of the created participation.
     *
     * @var AlleDiscountGetSubmitCommandResponseOutputNewOfferParticipation|null
     */
    protected $newOfferParticipation;
    /**
     * @var list<ErrorsHolder>|null
     */
    protected $errors;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Status field possible values:
     *   - NEW - command processing has not started.
     *   - IN_PROGRESS - command is being processed.
     *   - FAILED - processing of the command failed. Offer will not participate in AlleDiscount.
     *   - SUCCESSFUL - processing of the command was successful. New participation was created but in some cases it still may be denied.
     *     To make sure that the offer is participating in AlleDiscount, check the participation status in
     *     'GET /sale/alle-discount/{campaignId}/submitted-offers`.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Status field possible values:
     * - NEW - command processing has not started.
     * - IN_PROGRESS - command is being processed.
     * - FAILED - processing of the command failed. Offer will not participate in AlleDiscount.
     * - SUCCESSFUL - processing of the command was successful. New participation was created but in some cases it still may be denied.
     * To make sure that the offer is participating in AlleDiscount, check the participation status in
     * 'GET /sale/alle-discount/{campaignId}/submitted-offers`.
     */
    public function setStatus(?string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }

    /**
     * Command creation date. ISO 8601 format.
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * Command creation date. ISO 8601 format.
     */
    public function setCreatedAt(?\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Command update date. ISO 8601 format.
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    /**
     * Command update date. ISO 8601 format.
     */
    public function setUpdatedAt(?\DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Object containing info about created participation in AlleDiscount, contains the id of the created participation.
     */
    public function getNewOfferParticipation(): ?AlleDiscountGetSubmitCommandResponseOutputNewOfferParticipation
    {
        return $this->newOfferParticipation;
    }

    /**
     * Object containing info about created participation in AlleDiscount, contains the id of the created participation.
     */
    public function setNewOfferParticipation(?AlleDiscountGetSubmitCommandResponseOutputNewOfferParticipation $newOfferParticipation): self
    {
        $this->initialized['newOfferParticipation'] = true;
        $this->newOfferParticipation = $newOfferParticipation;

        return $this;
    }

    /**
     * @return list<ErrorsHolder>|null
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    /**
     * @param list<ErrorsHolder>|null $errors
     */
    public function setErrors(?array $errors): self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;

        return $this;
    }
}
