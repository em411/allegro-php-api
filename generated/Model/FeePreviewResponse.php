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

class FeePreviewResponse extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * An array of commissions.
     *
     * @var list<CommissionResponse>|null
     */
    protected $commissions;
    /**
     * An array of quotes.
     *
     * @var list<QuoteResponse>|null
     */
    protected $quotes;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * An array of commissions.
     *
     * @return list<CommissionResponse>|null
     */
    public function getCommissions(): ?array
    {
        return $this->commissions;
    }

    /**
     * An array of commissions.
     *
     * @param list<CommissionResponse>|null $commissions
     */
    public function setCommissions(?array $commissions): self
    {
        $this->initialized['commissions'] = true;
        $this->commissions = $commissions;

        return $this;
    }

    /**
     * An array of quotes.
     *
     * @return list<QuoteResponse>|null
     */
    public function getQuotes(): ?array
    {
        return $this->quotes;
    }

    /**
     * An array of quotes.
     *
     * @param list<QuoteResponse>|null $quotes
     */
    public function setQuotes(?array $quotes): self
    {
        $this->initialized['quotes'] = true;
        $this->quotes = $quotes;

        return $this;
    }
}
