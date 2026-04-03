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

class OfferFilterDto extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Optional list of offer IDs to filter by. The list must contain between 1 and 1000 items. If not provided, all offers matching other criteria will be returned.
     *
     * @var list<string>|null
     */
    protected $ids;
    /**
     * Optional scope filter to narrow down offers by their Allegro Prices status. Supported values: 'WITH_DECLARATION' (offers with seller price reduction declaration), 'DISCOUNTED' (offers currently discounted in Allegro Prices program), 'EXCLUDED' (offers excluded from Allegro Prices program). If not provided, all offers regardless of scope will be returned.
     *
     * @var string|null
     */
    protected $scope;
    /**
     * Optional substatus filter to narrow down offers. Supported values: 'DISCOUNT_OPPORTUNITY' (offers with discount opportunity), 'DISCOUNT_RECOMMENDATION' (offers with discount recommendation). Can be combined with any scope value.
     *
     * @var string|null
     */
    protected $substatus;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Optional list of offer IDs to filter by. The list must contain between 1 and 1000 items. If not provided, all offers matching other criteria will be returned.
     *
     * @return list<string>|null
     */
    public function getIds(): ?array
    {
        return $this->ids;
    }

    /**
     * Optional list of offer IDs to filter by. The list must contain between 1 and 1000 items. If not provided, all offers matching other criteria will be returned.
     *
     * @param list<string>|null $ids
     */
    public function setIds(?array $ids): self
    {
        $this->initialized['ids'] = true;
        $this->ids = $ids;

        return $this;
    }

    /**
     * Optional scope filter to narrow down offers by their Allegro Prices status. Supported values: 'WITH_DECLARATION' (offers with seller price reduction declaration), 'DISCOUNTED' (offers currently discounted in Allegro Prices program), 'EXCLUDED' (offers excluded from Allegro Prices program). If not provided, all offers regardless of scope will be returned.
     */
    public function getScope(): ?string
    {
        return $this->scope;
    }

    /**
     * Optional scope filter to narrow down offers by their Allegro Prices status. Supported values: 'WITH_DECLARATION' (offers with seller price reduction declaration), 'DISCOUNTED' (offers currently discounted in Allegro Prices program), 'EXCLUDED' (offers excluded from Allegro Prices program). If not provided, all offers regardless of scope will be returned.
     */
    public function setScope(?string $scope): self
    {
        $this->initialized['scope'] = true;
        $this->scope = $scope;

        return $this;
    }

    /**
     * Optional substatus filter to narrow down offers. Supported values: 'DISCOUNT_OPPORTUNITY' (offers with discount opportunity), 'DISCOUNT_RECOMMENDATION' (offers with discount recommendation). Can be combined with any scope value.
     */
    public function getSubstatus(): ?string
    {
        return $this->substatus;
    }

    /**
     * Optional substatus filter to narrow down offers. Supported values: 'DISCOUNT_OPPORTUNITY' (offers with discount opportunity), 'DISCOUNT_RECOMMENDATION' (offers with discount recommendation). Can be combined with any scope value.
     */
    public function setSubstatus(?string $substatus): self
    {
        $this->initialized['substatus'] = true;
        $this->substatus = $substatus;

        return $this;
    }
}
