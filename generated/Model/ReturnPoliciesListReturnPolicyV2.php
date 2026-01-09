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

class ReturnPoliciesListReturnPolicyV2 extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var int|null
     */
    protected $count;
    /**
     * @var list<ReturnPolicyResponseV2>|null
     */
    protected $returnPolicies;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getCount(): ?int
    {
        return $this->count;
    }

    public function setCount(?int $count): self
    {
        $this->initialized['count'] = true;
        $this->count = $count;

        return $this;
    }

    /**
     * @return list<ReturnPolicyResponseV2>|null
     */
    public function getReturnPolicies(): ?array
    {
        return $this->returnPolicies;
    }

    /**
     * @param list<ReturnPolicyResponseV2>|null $returnPolicies
     */
    public function setReturnPolicies(?array $returnPolicies): self
    {
        $this->initialized['returnPolicies'] = true;
        $this->returnPolicies = $returnPolicies;

        return $this;
    }
}
