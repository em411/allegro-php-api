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

class CompatibilityList extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Type of the compatibility list, two values are acceptable: `MANUAL`, `PRODUCT_BASED`. <ul> <li>`MANUAL` -  for offers not associated with product - compatibility list is created with items provided by user directly in the body of the request.</li> <li>`PRODUCT_BASED` - for offers associated with product - if compatibility list is provided in the product details (GET/sale/products/{productId}), it needs to be included in the offer in unchanged form. </li> </ul>.
     *
     * @var string|null
     */
    protected $type = 'MANUAL';

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Type of the compatibility list, two values are acceptable: `MANUAL`, `PRODUCT_BASED`. <ul> <li>`MANUAL` -  for offers not associated with product - compatibility list is created with items provided by user directly in the body of the request.</li> <li>`PRODUCT_BASED` - for offers associated with product - if compatibility list is provided in the product details (GET/sale/products/{productId}), it needs to be included in the offer in unchanged form. </li> </ul>.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Type of the compatibility list, two values are acceptable: `MANUAL`, `PRODUCT_BASED`. <ul> <li>`MANUAL` -  for offers not associated with product - compatibility list is created with items provided by user directly in the body of the request.</li> <li>`PRODUCT_BASED` - for offers associated with product - if compatibility list is provided in the product details (GET/sale/products/{productId}), it needs to be included in the offer in unchanged form. </li> </ul>.
     */
    public function setType(?string $type)
    {
        $this->initialized['type'] = true;
        $this->type = $type;
    }
}
