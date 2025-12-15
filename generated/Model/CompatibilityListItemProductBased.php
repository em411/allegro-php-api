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

class CompatibilityListItemProductBased extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Text description of the compatible item.
     *
     * @var string|null
     */
    protected $text;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Text description of the compatible item.
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * Text description of the compatible item.
     */
    public function setText(?string $text): self
    {
        $this->initialized['text'] = true;
        $this->text = $text;

        return $this;
    }
}
