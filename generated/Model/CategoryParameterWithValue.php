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

class CategoryParameterWithValue extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Id of another parameter with a value dictionary.
     *
     * @var string|null
     */
    protected $id;
    /**
     * A list of value ids. One of them must be chosen in order to fulfill this condition. Not empty.
     *
     * @var list<string>|null
     */
    protected $oneOfValueIds;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Id of another parameter with a value dictionary.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Id of another parameter with a value dictionary.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * A list of value ids. One of them must be chosen in order to fulfill this condition. Not empty.
     *
     * @return list<string>|null
     */
    public function getOneOfValueIds(): ?array
    {
        return $this->oneOfValueIds;
    }

    /**
     * A list of value ids. One of them must be chosen in order to fulfill this condition. Not empty.
     *
     * @param list<string>|null $oneOfValueIds
     */
    public function setOneOfValueIds(?array $oneOfValueIds): self
    {
        $this->initialized['oneOfValueIds'] = true;
        $this->oneOfValueIds = $oneOfValueIds;

        return $this;
    }
}
