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

class CommandTaskWithPriceSubjectSubject extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Offer identifier, which was modified in the request.
     *
     * @var string|null
     */
    protected $offerId;
    /**
     * A field, which was modified in the request.
     *
     * @var string|null
     */
    protected $field;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Offer identifier, which was modified in the request.
     */
    public function getOfferId(): ?string
    {
        return $this->offerId;
    }

    /**
     * Offer identifier, which was modified in the request.
     */
    public function setOfferId(?string $offerId): self
    {
        $this->initialized['offerId'] = true;
        $this->offerId = $offerId;

        return $this;
    }

    /**
     * A field, which was modified in the request.
     */
    public function getField(): ?string
    {
        return $this->field;
    }

    /**
     * A field, which was modified in the request.
     */
    public function setField(?string $field): self
    {
        $this->initialized['field'] = true;
        $this->field = $field;

        return $this;
    }
}
