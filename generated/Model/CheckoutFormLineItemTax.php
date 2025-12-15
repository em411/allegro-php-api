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

class CheckoutFormLineItemTax extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The tax rate.
     *
     * @var string|null
     */
    protected $rate;
    /**
     * The subject of taxation.
     *
     * @var string|null
     */
    protected $subject;
    /**
     * The exemption of taxation.
     *
     * @var string|null
     */
    protected $exemption;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The tax rate.
     */
    public function getRate(): ?string
    {
        return $this->rate;
    }

    /**
     * The tax rate.
     */
    public function setRate(?string $rate): self
    {
        $this->initialized['rate'] = true;
        $this->rate = $rate;

        return $this;
    }

    /**
     * The subject of taxation.
     */
    public function getSubject(): ?string
    {
        return $this->subject;
    }

    /**
     * The subject of taxation.
     */
    public function setSubject(?string $subject): self
    {
        $this->initialized['subject'] = true;
        $this->subject = $subject;

        return $this;
    }

    /**
     * The exemption of taxation.
     */
    public function getExemption(): ?string
    {
        return $this->exemption;
    }

    /**
     * The exemption of taxation.
     */
    public function setExemption(?string $exemption): self
    {
        $this->initialized['exemption'] = true;
        $this->exemption = $exemption;

        return $this;
    }
}
