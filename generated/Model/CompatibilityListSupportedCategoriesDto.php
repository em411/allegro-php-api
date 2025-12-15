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

class CompatibilityListSupportedCategoriesDto extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * List with information about categories where compatibility list is supported. <a href=" https://developer.allegro.pl/compatibility_list/" target="_blank">Read more</a>.
     *
     * @var list<CompatibilityListSupportedCategoriesDtoSupportedCategoriesItem>|null
     */
    protected $supportedCategories;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * List with information about categories where compatibility list is supported. <a href=" https://developer.allegro.pl/compatibility_list/" target="_blank">Read more</a>.
     *
     * @return list<CompatibilityListSupportedCategoriesDtoSupportedCategoriesItem>|null
     */
    public function getSupportedCategories(): ?array
    {
        return $this->supportedCategories;
    }

    /**
     * List with information about categories where compatibility list is supported. <a href=" https://developer.allegro.pl/compatibility_list/" target="_blank">Read more</a>.
     *
     * @param list<CompatibilityListSupportedCategoriesDtoSupportedCategoriesItem>|null $supportedCategories
     */
    public function setSupportedCategories(?array $supportedCategories): self
    {
        $this->initialized['supportedCategories'] = true;
        $this->supportedCategories = $supportedCategories;

        return $this;
    }
}
