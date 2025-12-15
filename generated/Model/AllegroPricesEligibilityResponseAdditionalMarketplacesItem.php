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

class AllegroPricesEligibilityResponseAdditionalMarketplacesItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var string|null
     */
    protected $consent;
    /**
     * @var AllegroPricesQualificationResponse|null
     */
    protected $qualification;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getConsent(): ?string
    {
        return $this->consent;
    }

    public function setConsent(?string $consent): self
    {
        $this->initialized['consent'] = true;
        $this->consent = $consent;

        return $this;
    }

    public function getQualification(): ?AllegroPricesQualificationResponse
    {
        return $this->qualification;
    }

    public function setQualification(?AllegroPricesQualificationResponse $qualification): self
    {
        $this->initialized['qualification'] = true;
        $this->qualification = $qualification;

        return $this;
    }
}
