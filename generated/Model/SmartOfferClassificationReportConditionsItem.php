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

class SmartOfferClassificationReportConditionsItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Technical condition name.
     *
     * @var string|null
     */
    protected $code;
    /**
     * Condition name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Brief condition description, might contain useful instructions to help making that particular condition pass.
     *
     * @var string|null
     */
    protected $description;
    /**
     * Indicates whether this condition is met.
     *
     * @var bool|null
     */
    protected $fulfilled;
    /**
     * Set of delivery methods that meet this condition. May be null if the condition does not apply to delivery methods.
     *
     * @var list<DeliveryMethodId>|null
     */
    protected $passedDeliveryMethods;
    /**
     * Set of delivery methods that fail to meet this condition. May be null if the condition does not apply to delivery methods.
     *
     * @var list<DeliveryMethodId>|null
     */
    protected $failedDeliveryMethods;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Technical condition name.
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Technical condition name.
     */
    public function setCode(?string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;

        return $this;
    }

    /**
     * Condition name.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Condition name.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * Brief condition description, might contain useful instructions to help making that particular condition pass.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Brief condition description, might contain useful instructions to help making that particular condition pass.
     */
    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    /**
     * Indicates whether this condition is met.
     */
    public function getFulfilled(): ?bool
    {
        return $this->fulfilled;
    }

    /**
     * Indicates whether this condition is met.
     */
    public function setFulfilled(?bool $fulfilled): self
    {
        $this->initialized['fulfilled'] = true;
        $this->fulfilled = $fulfilled;

        return $this;
    }

    /**
     * Set of delivery methods that meet this condition. May be null if the condition does not apply to delivery methods.
     *
     * @return list<DeliveryMethodId>|null
     */
    public function getPassedDeliveryMethods(): ?array
    {
        return $this->passedDeliveryMethods;
    }

    /**
     * Set of delivery methods that meet this condition. May be null if the condition does not apply to delivery methods.
     *
     * @param list<DeliveryMethodId>|null $passedDeliveryMethods
     */
    public function setPassedDeliveryMethods(?array $passedDeliveryMethods): self
    {
        $this->initialized['passedDeliveryMethods'] = true;
        $this->passedDeliveryMethods = $passedDeliveryMethods;

        return $this;
    }

    /**
     * Set of delivery methods that fail to meet this condition. May be null if the condition does not apply to delivery methods.
     *
     * @return list<DeliveryMethodId>|null
     */
    public function getFailedDeliveryMethods(): ?array
    {
        return $this->failedDeliveryMethods;
    }

    /**
     * Set of delivery methods that fail to meet this condition. May be null if the condition does not apply to delivery methods.
     *
     * @param list<DeliveryMethodId>|null $failedDeliveryMethods
     */
    public function setFailedDeliveryMethods(?array $failedDeliveryMethods): self
    {
        $this->initialized['failedDeliveryMethods'] = true;
        $this->failedDeliveryMethods = $failedDeliveryMethods;

        return $this;
    }
}
