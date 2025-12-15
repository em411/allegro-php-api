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

class CheckoutFormPaymentReference extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Payment id.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Payment type.
     *
     * @var string|null
     */
    protected $type;
    /**
     * Payment provider:
     *   * `PAYU` - processed by PAYU operator.
     *   * `P24` - processed by PRZELEWY24 operator.
     *   * `AF` - processed by Allegro Finance operator.
     *   * `OFFLINE` - offline payment.
     *   * `EPT` - extended payment term with Allegro Pay Business.
     *
     * @var string|null
     */
    protected $provider;
    /**
     * Date when the event occurred.
     *
     * @var \DateTime|null
     */
    protected $finishedAt;
    /**
     * The price data.
     *
     * @var Price|null
     */
    protected $paidAmount;
    /**
     * The price data.
     *
     * @var Price|null
     */
    protected $reconciliation;
    /**
     * Payment additional features:
     *  - `ALLEGRO_PAY` - The payment was made using Allegro Pay.
     *
     * @var list<string>|null
     */
    protected $features;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Payment id.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Payment id.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Payment type.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Payment type.
     */
    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * Payment provider:
     *   * `PAYU` - processed by PAYU operator.
     *   * `P24` - processed by PRZELEWY24 operator.
     *   * `AF` - processed by Allegro Finance operator.
     *   * `OFFLINE` - offline payment.
     *   * `EPT` - extended payment term with Allegro Pay Business.
     */
    public function getProvider(): ?string
    {
        return $this->provider;
    }

    /**
     * Payment provider:
     * `PAYU` - processed by PAYU operator.
     * `P24` - processed by PRZELEWY24 operator.
     * `AF` - processed by Allegro Finance operator.
     * `OFFLINE` - offline payment.
     * `EPT` - extended payment term with Allegro Pay Business.
     */
    public function setProvider(?string $provider): self
    {
        $this->initialized['provider'] = true;
        $this->provider = $provider;

        return $this;
    }

    /**
     * Date when the event occurred.
     */
    public function getFinishedAt(): ?\DateTime
    {
        return $this->finishedAt;
    }

    /**
     * Date when the event occurred.
     */
    public function setFinishedAt(?\DateTime $finishedAt): self
    {
        $this->initialized['finishedAt'] = true;
        $this->finishedAt = $finishedAt;

        return $this;
    }

    /**
     * The price data.
     */
    public function getPaidAmount(): ?Price
    {
        return $this->paidAmount;
    }

    /**
     * The price data.
     */
    public function setPaidAmount(?Price $paidAmount): self
    {
        $this->initialized['paidAmount'] = true;
        $this->paidAmount = $paidAmount;

        return $this;
    }

    /**
     * The price data.
     */
    public function getReconciliation(): ?Price
    {
        return $this->reconciliation;
    }

    /**
     * The price data.
     */
    public function setReconciliation(?Price $reconciliation): self
    {
        $this->initialized['reconciliation'] = true;
        $this->reconciliation = $reconciliation;

        return $this;
    }

    /**
     * Payment additional features:
     *  - `ALLEGRO_PAY` - The payment was made using Allegro Pay.
     *
     * @return list<string>|null
     */
    public function getFeatures(): ?array
    {
        return $this->features;
    }

    /**
     * Payment additional features:
     * - `ALLEGRO_PAY` - The payment was made using Allegro Pay.
     *
     * @param list<string>|null $features
     */
    public function setFeatures(?array $features): self
    {
        $this->initialized['features'] = true;
        $this->features = $features;

        return $this;
    }
}
