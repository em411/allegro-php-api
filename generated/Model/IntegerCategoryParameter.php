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

class IntegerCategoryParameter extends CategoryParameter
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The restrictions on values of this parameter.
     *
     * @var IntegerCategoryParameterRestrictions|null
     */
    protected $restrictions;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The restrictions on values of this parameter.
     */
    public function getRestrictions(): ?IntegerCategoryParameterRestrictions
    {
        return $this->restrictions;
    }

    /**
     * The restrictions on values of this parameter.
     */
    public function setRestrictions(?IntegerCategoryParameterRestrictions $restrictions): self
    {
        $this->initialized['restrictions'] = true;
        $this->restrictions = $restrictions;

        return $this;
    }

    public function definedProperties(): array
    {
        return array_merge(parent::definedProperties(), ['restrictions' => ['restrictions', 'getRestrictions', 'setRestrictions']]);
    }
}
