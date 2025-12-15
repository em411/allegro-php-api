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

class ProductSetElementDeposits extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Array of different deposits that are added to given product.
     *
     * @var list<ProductDeposit>|null
     */
    protected $deposits;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Array of different deposits that are added to given product.
     *
     * @return list<ProductDeposit>|null
     */
    public function getDeposits(): ?array
    {
        return $this->deposits;
    }

    /**
     * Array of different deposits that are added to given product.
     *
     * @param list<ProductDeposit>|null $deposits
     */
    public function setDeposits(?array $deposits): self
    {
        $this->initialized['deposits'] = true;
        $this->deposits = $deposits;

        return $this;
    }
}
