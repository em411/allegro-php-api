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

class MessageToSellerSettings extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Specify message to seller type.
     *  * `OPTIONAL`: buyer is able to enter a message for the seller
     *  * `HIDDEN`: there is no message box for the seller
     *  * `REQUIRED`: buyer is forced to enter a message for the seller (limited to categories with `sellerCanRequirePurchaseComments` option).
     *
     * @var string|null
     */
    protected $mode;
    /**
     * Specify hint for REQUIRED message displayed for buyer.
     *
     * @var string|null
     */
    protected $hint;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Specify message to seller type.
     *  * `OPTIONAL`: buyer is able to enter a message for the seller
     *  * `HIDDEN`: there is no message box for the seller
     *  * `REQUIRED`: buyer is forced to enter a message for the seller (limited to categories with `sellerCanRequirePurchaseComments` option).
     */
    public function getMode(): ?string
    {
        return $this->mode;
    }

    /**
     * Specify message to seller type.
     * `OPTIONAL`: buyer is able to enter a message for the seller
     * `HIDDEN`: there is no message box for the seller
     * `REQUIRED`: buyer is forced to enter a message for the seller (limited to categories with `sellerCanRequirePurchaseComments` option).
     */
    public function setMode(?string $mode): self
    {
        $this->initialized['mode'] = true;
        $this->mode = $mode;

        return $this;
    }

    /**
     * Specify hint for REQUIRED message displayed for buyer.
     */
    public function getHint(): ?string
    {
        return $this->hint;
    }

    /**
     * Specify hint for REQUIRED message displayed for buyer.
     */
    public function setHint(?string $hint): self
    {
        $this->initialized['hint'] = true;
        $this->hint = $hint;

        return $this;
    }
}
