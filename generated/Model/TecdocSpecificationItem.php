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

class TecdocSpecificationItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Technical specification property name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Technical specification property values.
     *
     * @var list<string>|null
     */
    protected $values;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Technical specification property name.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Technical specification property name.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * Technical specification property values.
     *
     * @return list<string>|null
     */
    public function getValues(): ?array
    {
        return $this->values;
    }

    /**
     * Technical specification property values.
     *
     * @param list<string>|null $values
     */
    public function setValues(?array $values): self
    {
        $this->initialized['values'] = true;
        $this->values = $values;

        return $this;
    }
}
