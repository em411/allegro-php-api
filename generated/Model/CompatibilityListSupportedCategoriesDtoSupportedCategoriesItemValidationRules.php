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

class CompatibilityListSupportedCategoriesDtoSupportedCategoriesItemValidationRules extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Maximum number of items allowed on compatibility list.
     *
     * @var int|null
     */
    protected $maxRows;
    /**
     * Maximum length of single item on the list.
     *
     * @var int|null
     */
    protected $maxCharactersPerLine;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Maximum number of items allowed on compatibility list.
     */
    public function getMaxRows(): ?int
    {
        return $this->maxRows;
    }

    /**
     * Maximum number of items allowed on compatibility list.
     */
    public function setMaxRows(?int $maxRows): self
    {
        $this->initialized['maxRows'] = true;
        $this->maxRows = $maxRows;

        return $this;
    }

    /**
     * Maximum length of single item on the list.
     */
    public function getMaxCharactersPerLine(): ?int
    {
        return $this->maxCharactersPerLine;
    }

    /**
     * Maximum length of single item on the list.
     */
    public function setMaxCharactersPerLine(?int $maxCharactersPerLine): self
    {
        $this->initialized['maxCharactersPerLine'] = true;
        $this->maxCharactersPerLine = $maxCharactersPerLine;

        return $this;
    }
}
