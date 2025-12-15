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

class CheckoutFormNoteReference extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Seller's note for the order.
     *
     * @var string|null
     */
    protected $text;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Seller's note for the order.
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * Seller's note for the order.
     */
    public function setText(?string $text): self
    {
        $this->initialized['text'] = true;
        $this->text = $text;

        return $this;
    }
}
