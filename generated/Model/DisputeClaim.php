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

class DisputeClaim extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Type of the buyer's expectations for the dispute outcome.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Details of the buyer's expectations for the dispute.
     *
     * @var string|null
     */
    protected $description;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Type of the buyer's expectations for the dispute outcome.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Type of the buyer's expectations for the dispute outcome.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * Details of the buyer's expectations for the dispute.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Details of the buyer's expectations for the dispute.
     */
    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }
}
