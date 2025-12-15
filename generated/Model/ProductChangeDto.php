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

class ProductChangeDto extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var ProductChangeDtoProduct|null
     */
    protected $product;
    /**
     * List of changed product parameters.
     *
     * @var list<ChangedParameterDto>|null
     */
    protected $changedParameters;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getProduct(): ?ProductChangeDtoProduct
    {
        return $this->product;
    }

    public function setProduct(?ProductChangeDtoProduct $product): self
    {
        $this->initialized['product'] = true;
        $this->product = $product;

        return $this;
    }

    /**
     * List of changed product parameters.
     *
     * @return list<ChangedParameterDto>|null
     */
    public function getChangedParameters(): ?array
    {
        return $this->changedParameters;
    }

    /**
     * List of changed product parameters.
     *
     * @param list<ChangedParameterDto>|null $changedParameters
     */
    public function setChangedParameters(?array $changedParameters): self
    {
        $this->initialized['changedParameters'] = true;
        $this->changedParameters = $changedParameters;

        return $this;
    }
}
