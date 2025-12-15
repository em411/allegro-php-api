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

class OfferRatingSizeFeedbackItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Identifier of sizeFeedback: BIGGER, FIT, SMALLER.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Count of sizeFeedback responses.
     *
     * @var int|null
     */
    protected $count;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Identifier of sizeFeedback: BIGGER, FIT, SMALLER.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Identifier of sizeFeedback: BIGGER, FIT, SMALLER.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * Count of sizeFeedback responses.
     */
    public function getCount(): ?int
    {
        return $this->count;
    }

    /**
     * Count of sizeFeedback responses.
     */
    public function setCount(?int $count): self
    {
        $this->initialized['count'] = true;
        $this->count = $count;

        return $this;
    }
}
