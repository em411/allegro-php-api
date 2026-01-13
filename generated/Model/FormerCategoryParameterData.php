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

class FormerCategoryParameterData extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Former IDs which this parameter had in this category earlier. This field is not visible in JSON as long as there is no former ID. Otherwise the array contains at least one ID.
     *
     * @var list<string>|null
     */
    protected $ids;
    /**
     * Former names which this parameter had earlier. This field is not visible in JSON as long as there is no former name. Otherwise the array contains at least one name.
     *
     * @var list<string>|null
     */
    protected $names;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Former IDs which this parameter had in this category earlier. This field is not visible in JSON as long as there is no former ID. Otherwise the array contains at least one ID.
     *
     * @return list<string>|null
     */
    public function getIds(): ?array
    {
        return $this->ids;
    }

    /**
     * Former IDs which this parameter had in this category earlier. This field is not visible in JSON as long as there is no former ID. Otherwise the array contains at least one ID.
     *
     * @param list<string>|null $ids
     */
    public function setIds(?array $ids): self
    {
        $this->initialized['ids'] = true;
        $this->ids = $ids;

        return $this;
    }

    /**
     * Former names which this parameter had earlier. This field is not visible in JSON as long as there is no former name. Otherwise the array contains at least one name.
     *
     * @return list<string>|null
     */
    public function getNames(): ?array
    {
        return $this->names;
    }

    /**
     * Former names which this parameter had earlier. This field is not visible in JSON as long as there is no former name. Otherwise the array contains at least one name.
     *
     * @param list<string>|null $names
     */
    public function setNames(?array $names): self
    {
        $this->initialized['names'] = true;
        $this->names = $names;

        return $this;
    }
}
