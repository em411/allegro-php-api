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

class ModificationResponsibleProducer extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The ID of a responsible producer configured using the <a href="#tag/Responsible-producers">Responsible Producers API</a>.
     *
     * _Note: if the offer contains multiple products, the responsible producer will only be changed for the first product._
     *
     * @var string|null
     */
    protected $id;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The ID of a responsible producer configured using the <a href="#tag/Responsible-producers">Responsible Producers API</a>.
     *
     * _Note: if the offer contains multiple products, the responsible producer will only be changed for the first product._
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * The ID of a responsible producer configured using the <a href="#tag/Responsible-producers">Responsible Producers API</a>.
     *
     * _Note: if the offer contains multiple products, the responsible producer will only be changed for the first product._
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }
}
