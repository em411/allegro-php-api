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

class OfferQuotesDto implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var int|null
     */
    protected $count;
    /**
     * @var list<OfferQuoteDto>|null
     */
    protected $quotes;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getCount(): ?int
    {
        return $this->count;
    }

    public function setCount(?int $count): self
    {
        $this->initialized['count'] = true;
        $this->count = $count;

        return $this;
    }

    /**
     * @return list<OfferQuoteDto>|null
     */
    public function getQuotes(): ?array
    {
        return $this->quotes;
    }

    /**
     * @param list<OfferQuoteDto>|null $quotes
     */
    public function setQuotes(?array $quotes): self
    {
        $this->initialized['quotes'] = true;
        $this->quotes = $quotes;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['count' => ['count', 'getCount', 'setCount'], 'quotes' => ['quotes', 'getQuotes', 'setQuotes']];
    }
}
