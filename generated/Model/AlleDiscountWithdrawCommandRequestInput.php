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

class AlleDiscountWithdrawCommandRequestInput implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The id of the offer participation you wish to withdraw. Participation id can be found using `GET /sale/alle-discount/{campaignId}/submitted-offers` or `GET /sale/alle-discount/submit-offer-commands` endpoints.
     *
     * @var string|null
     */
    protected $participationId;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The id of the offer participation you wish to withdraw. Participation id can be found using `GET /sale/alle-discount/{campaignId}/submitted-offers` or `GET /sale/alle-discount/submit-offer-commands` endpoints.
     */
    public function getParticipationId(): ?string
    {
        return $this->participationId;
    }

    /**
     * The id of the offer participation you wish to withdraw. Participation id can be found using `GET /sale/alle-discount/{campaignId}/submitted-offers` or `GET /sale/alle-discount/submit-offer-commands` endpoints.
     */
    public function setParticipationId(?string $participationId): self
    {
        $this->initialized['participationId'] = true;
        $this->participationId = $participationId;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['participationId' => ['participationId', 'getParticipationId', 'setParticipationId']];
    }
}
