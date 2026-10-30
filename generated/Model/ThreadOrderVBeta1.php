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

class ThreadOrderVBeta1 implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var string|null
     */
    protected $id;
    /**
     * @var list<ThreadOrderOfferVBeta1>|null
     */
    protected $offers;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * @return list<ThreadOrderOfferVBeta1>|null
     */
    public function getOffers(): ?array
    {
        return $this->offers;
    }

    /**
     * @param list<ThreadOrderOfferVBeta1>|null $offers
     */
    public function setOffers(?array $offers): self
    {
        $this->initialized['offers'] = true;
        $this->offers = $offers;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['id' => ['id', 'getId', 'setId'], 'offers' => ['offers', 'getOffers', 'setOffers']];
    }
}
