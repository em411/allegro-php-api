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

class ModificationTextSafetyInformation extends ModificationSafetyInformation
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Safety warnings and instructions for the product in plain text form, if the information cannot be provided through attachments. Text can't be longer than 5000 characters.
     *
     * @var string|null
     */
    protected $description;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Safety warnings and instructions for the product in plain text form, if the information cannot be provided through attachments. Text can't be longer than 5000 characters.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Safety warnings and instructions for the product in plain text form, if the information cannot be provided through attachments. Text can't be longer than 5000 characters.
     */
    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }
}
