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

class ProductParameterProposal extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Parameter identifier.
     *
     * @var string|null
     */
    protected $id;
    /**
     * List of proposed product parameter change statuses.
     *
     * @var list<ProductParameterValueProposal>|null
     */
    protected $values;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Parameter identifier.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Parameter identifier.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * List of proposed product parameter change statuses.
     *
     * @return list<ProductParameterValueProposal>|null
     */
    public function getValues(): ?array
    {
        return $this->values;
    }

    /**
     * List of proposed product parameter change statuses.
     *
     * @param list<ProductParameterValueProposal>|null $values
     */
    public function setValues(?array $values): self
    {
        $this->initialized['values'] = true;
        $this->values = $values;

        return $this;
    }
}
