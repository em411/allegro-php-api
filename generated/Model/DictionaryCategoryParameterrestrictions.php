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

class DictionaryCategoryParameterrestrictions extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Indicates whether this parameter can have more than one value.
     *
     * @var bool|null
     */
    protected $multipleChoices;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Indicates whether this parameter can have more than one value.
     */
    public function getMultipleChoices(): ?bool
    {
        return $this->multipleChoices;
    }

    /**
     * Indicates whether this parameter can have more than one value.
     */
    public function setMultipleChoices(?bool $multipleChoices): self
    {
        $this->initialized['multipleChoices'] = true;
        $this->multipleChoices = $multipleChoices;

        return $this;
    }
}
