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

class DictionaryCategoryProductParameter extends CategoryProductParameter
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The restrictions on values of this parameter.
     *
     * @var DictionaryCategoryProductParameterRestrictions|null
     */
    protected $restrictions;
    /**
     * Defines the values accepted for this parameter.
     *
     * @var list<DictionaryCategoryProductParameterDictionaryItem>|null
     */
    protected $dictionary;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The restrictions on values of this parameter.
     */
    public function getRestrictions(): ?DictionaryCategoryProductParameterRestrictions
    {
        return $this->restrictions;
    }

    /**
     * The restrictions on values of this parameter.
     */
    public function setRestrictions(?DictionaryCategoryProductParameterRestrictions $restrictions): self
    {
        $this->initialized['restrictions'] = true;
        $this->restrictions = $restrictions;

        return $this;
    }

    /**
     * Defines the values accepted for this parameter.
     *
     * @return list<DictionaryCategoryProductParameterDictionaryItem>|null
     */
    public function getDictionary(): ?array
    {
        return $this->dictionary;
    }

    /**
     * Defines the values accepted for this parameter.
     *
     * @param list<DictionaryCategoryProductParameterDictionaryItem>|null $dictionary
     */
    public function setDictionary(?array $dictionary): self
    {
        $this->initialized['dictionary'] = true;
        $this->dictionary = $dictionary;

        return $this;
    }

    public function definedProperties(): array
    {
        return array_merge(parent::definedProperties(), ['restrictions' => ['restrictions', 'getRestrictions', 'setRestrictions'], 'dictionary' => ['dictionary', 'getDictionary', 'setDictionary']]);
    }
}
