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

class CategorySuggestionResponse extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * List of categories matching with given phrase.
     *
     * @var list<CategorySuggestionCategoryNode>|null
     */
    protected $matchingCategories;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * List of categories matching with given phrase.
     *
     * @return list<CategorySuggestionCategoryNode>|null
     */
    public function getMatchingCategories(): ?array
    {
        return $this->matchingCategories;
    }

    /**
     * List of categories matching with given phrase.
     *
     * @param list<CategorySuggestionCategoryNode>|null $matchingCategories
     */
    public function setMatchingCategories(?array $matchingCategories): self
    {
        $this->initialized['matchingCategories'] = true;
        $this->matchingCategories = $matchingCategories;

        return $this;
    }
}
