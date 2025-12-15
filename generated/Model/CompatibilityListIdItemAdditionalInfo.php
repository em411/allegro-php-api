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

class CompatibilityListIdItemAdditionalInfo extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Additional information describing the compatible item. E.g. for cars it can be an engine code or an equipment version.
     *
     * @var string|null
     */
    protected $value;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Additional information describing the compatible item. E.g. for cars it can be an engine code or an equipment version.
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * Additional information describing the compatible item. E.g. for cars it can be an engine code or an equipment version.
     */
    public function setValue(?string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;

        return $this;
    }
}
