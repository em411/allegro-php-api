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

class MessageRelatedObject extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var MessageOffer|null
     */
    protected $offer;
    /**
     * @var MessageOrder|null
     */
    protected $order;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getOffer(): ?MessageOffer
    {
        return $this->offer;
    }

    public function setOffer(?MessageOffer $offer): self
    {
        $this->initialized['offer'] = true;
        $this->offer = $offer;

        return $this;
    }

    public function getOrder(): ?MessageOrder
    {
        return $this->order;
    }

    public function setOrder(?MessageOrder $order): self
    {
        $this->initialized['order'] = true;
        $this->order = $order;

        return $this;
    }
}
