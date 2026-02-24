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

class SubsidySubmitOffersCommand extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Optional custom command identifier. If not provided, a UUID will be generated automatically.
     *
     * @var string|null
     */
    protected $commandId;
    /**
     * List of offers to submit (1-1000 offers, must not contain duplicates).
     *
     * @var list<SubsidyOfferToSubmit>|null
     */
    protected $offers;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Optional custom command identifier. If not provided, a UUID will be generated automatically.
     */
    public function getCommandId(): ?string
    {
        return $this->commandId;
    }

    /**
     * Optional custom command identifier. If not provided, a UUID will be generated automatically.
     */
    public function setCommandId(?string $commandId): self
    {
        $this->initialized['commandId'] = true;
        $this->commandId = $commandId;

        return $this;
    }

    /**
     * List of offers to submit (1-1000 offers, must not contain duplicates).
     *
     * @return list<SubsidyOfferToSubmit>|null
     */
    public function getOffers(): ?array
    {
        return $this->offers;
    }

    /**
     * List of offers to submit (1-1000 offers, must not contain duplicates).
     *
     * @param list<SubsidyOfferToSubmit>|null $offers
     */
    public function setOffers(?array $offers): self
    {
        $this->initialized['offers'] = true;
        $this->offers = $offers;

        return $this;
    }
}
