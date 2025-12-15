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

class BillingEntryTax extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Optional tax rate shown as a number in the range 0-100.
     *
     * @var string|null
     */
    protected $percentage;
    /**
     * Optional annotation explaining the tax rate.
     *
     * @var string|null
     */
    protected $annotation;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Optional tax rate shown as a number in the range 0-100.
     */
    public function getPercentage(): ?string
    {
        return $this->percentage;
    }

    /**
     * Optional tax rate shown as a number in the range 0-100.
     */
    public function setPercentage(?string $percentage): self
    {
        $this->initialized['percentage'] = true;
        $this->percentage = $percentage;

        return $this;
    }

    /**
     * Optional annotation explaining the tax rate.
     */
    public function getAnnotation(): ?string
    {
        return $this->annotation;
    }

    /**
     * Optional annotation explaining the tax rate.
     */
    public function setAnnotation(?string $annotation): self
    {
        $this->initialized['annotation'] = true;
        $this->annotation = $annotation;

        return $this;
    }
}
