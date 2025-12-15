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

class OfferEventEndedOfferpublication extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Indicates the reason for ending the offer:
     *  - `USER` - offer ended by the seller.
     *  - `ADMIN` - offer ended by an admin.
     *  - `EXPIRATION` - offer duration had expired (valid for offers with specified duration).
     *  - `EMPTY_STOCK` - offer ended because all available items had been sold out.
     *  - `PRODUCT_DETACHMENT` - offer ended because its link to the product was removed. Status will only occur
     *    if the base marketplace of offer requires full productization.
     *  - `ERROR` - offer ended due to internal problem with offer publication. The publication command responded with
     *    success status, but further processing failed.
     *  - `UNKNOWN` - in rare cases the reason might be unknown.
     *
     * @var string|null
     */
    protected $endedBy;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Indicates the reason for ending the offer:
     *  - `USER` - offer ended by the seller.
     *  - `ADMIN` - offer ended by an admin.
     *  - `EXPIRATION` - offer duration had expired (valid for offers with specified duration).
     *  - `EMPTY_STOCK` - offer ended because all available items had been sold out.
     *  - `PRODUCT_DETACHMENT` - offer ended because its link to the product was removed. Status will only occur
     *    if the base marketplace of offer requires full productization.
     *  - `ERROR` - offer ended due to internal problem with offer publication. The publication command responded with
     *    success status, but further processing failed.
     *  - `UNKNOWN` - in rare cases the reason might be unknown.
     */
    public function getEndedBy(): ?string
    {
        return $this->endedBy;
    }

    /**
     * Indicates the reason for ending the offer:
     * - `USER` - offer ended by the seller.
     * - `ADMIN` - offer ended by an admin.
     * - `EXPIRATION` - offer duration had expired (valid for offers with specified duration).
     * - `EMPTY_STOCK` - offer ended because all available items had been sold out.
     * - `PRODUCT_DETACHMENT` - offer ended because its link to the product was removed. Status will only occur
     * if the base marketplace of offer requires full productization.
     * - `ERROR` - offer ended due to internal problem with offer publication. The publication command responded with
     * success status, but further processing failed.
     * - `UNKNOWN` - in rare cases the reason might be unknown.
     */
    public function setEndedBy(?string $endedBy): self
    {
        $this->initialized['endedBy'] = true;
        $this->endedBy = $endedBy;

        return $this;
    }
}
