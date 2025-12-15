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

class OfferRules extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * List of assigned rules.
     *
     * @var list<OfferRulesRulesItem>|null
     */
    protected $rules;
    /**
     * The date the rule assignments to offer were last modified in ISO 8601 format.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * List of assigned rules.
     *
     * @return list<OfferRulesRulesItem>|null
     */
    public function getRules(): ?array
    {
        return $this->rules;
    }

    /**
     * List of assigned rules.
     *
     * @param list<OfferRulesRulesItem>|null $rules
     */
    public function setRules(?array $rules): self
    {
        $this->initialized['rules'] = true;
        $this->rules = $rules;

        return $this;
    }

    /**
     * The date the rule assignments to offer were last modified in ISO 8601 format.
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    /**
     * The date the rule assignments to offer were last modified in ISO 8601 format.
     */
    public function setUpdatedAt(?\DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
