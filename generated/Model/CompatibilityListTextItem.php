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

class CompatibilityListTextItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var string|null
     */
    protected $type;
    /**
     * Text description of the compatible item. Maximum length of the text depends on category where compatible item is used. Should be used in categories where TEXT version of compatible list is supported. See <a href="/documentation/#tag/Compatibility-List/paths/~1sale~1compatibility-list~1supported-categories/get"> supported-categories</a> resource. <a href="../../compatibility_list" target="_blank">Read more</a>.
     *
     * @var string|null
     */
    protected $text;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * Text description of the compatible item. Maximum length of the text depends on category where compatible item is used. Should be used in categories where TEXT version of compatible list is supported. See <a href="/documentation/#tag/Compatibility-List/paths/~1sale~1compatibility-list~1supported-categories/get"> supported-categories</a> resource. <a href="../../compatibility_list" target="_blank">Read more</a>.
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * Text description of the compatible item. Maximum length of the text depends on category where compatible item is used. Should be used in categories where TEXT version of compatible list is supported. See <a href="/documentation/#tag/Compatibility-List/paths/~1sale~1compatibility-list~1supported-categories/get"> supported-categories</a> resource. <a href="../../compatibility_list" target="_blank">Read more</a>.
     */
    public function setText(?string $text): self
    {
        $this->initialized['text'] = true;
        $this->text = $text;

        return $this;
    }
}
