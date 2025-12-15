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

class AlleDiscountGetSubmitCommandResponseOutputNewOfferParticipation extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The id of the participation created by submit offer command.
     *
     * @var string|null
     */
    protected $participationId;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The id of the participation created by submit offer command.
     */
    public function getParticipationId(): ?string
    {
        return $this->participationId;
    }

    /**
     * The id of the participation created by submit offer command.
     */
    public function setParticipationId(?string $participationId): self
    {
        $this->initialized['participationId'] = true;
        $this->participationId = $participationId;

        return $this;
    }
}
