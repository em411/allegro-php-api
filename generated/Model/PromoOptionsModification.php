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

class PromoOptionsModification implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Type of modification to be applied.
     *
     * @var string|null
     */
    protected $modificationType;
    /**
     * Type of promotion package to be changed/removed.
     *
     * @var string|null
     */
    protected $packageType;
    /**
     * Promotion package identifier.
     *
     * @var string|null
     */
    protected $packageId;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Type of modification to be applied.
     */
    public function getModificationType(): ?string
    {
        return $this->modificationType;
    }

    /**
     * Type of modification to be applied.
     */
    public function setModificationType(?string $modificationType): self
    {
        $this->initialized['modificationType'] = true;
        $this->modificationType = $modificationType;

        return $this;
    }

    /**
     * Type of promotion package to be changed/removed.
     */
    public function getPackageType(): ?string
    {
        return $this->packageType;
    }

    /**
     * Type of promotion package to be changed/removed.
     */
    public function setPackageType(?string $packageType): self
    {
        $this->initialized['packageType'] = true;
        $this->packageType = $packageType;

        return $this;
    }

    /**
     * Promotion package identifier.
     */
    public function getPackageId(): ?string
    {
        return $this->packageId;
    }

    /**
     * Promotion package identifier.
     */
    public function setPackageId(?string $packageId): self
    {
        $this->initialized['packageId'] = true;
        $this->packageId = $packageId;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['modificationType' => ['modificationType', 'getModificationType', 'setModificationType'], 'packageType' => ['packageType', 'getPackageType', 'setPackageType'], 'packageId' => ['packageId', 'getPackageId', 'setPackageId']];
    }
}
