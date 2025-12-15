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

class RequirementChange extends CategoryParametersScheduledBaseChange
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Category parameter scheduled change category data.
     *
     * @var CategoryParametersScheduledBaseChangeCategory|null
     */
    protected $category;
    /**
     * Category parameter scheduled change parameter data.
     *
     * @var CategoryParametersScheduledBaseChangeParameter|null
     */
    protected $parameter;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Category parameter scheduled change category data.
     */
    public function getCategory(): ?CategoryParametersScheduledBaseChangeCategory
    {
        return $this->category;
    }

    /**
     * Category parameter scheduled change category data.
     */
    public function setCategory(?CategoryParametersScheduledBaseChangeCategory $category): self
    {
        $this->initialized['category'] = true;
        $this->category = $category;

        return $this;
    }

    /**
     * Category parameter scheduled change parameter data.
     */
    public function getParameter(): ?CategoryParametersScheduledBaseChangeParameter
    {
        return $this->parameter;
    }

    /**
     * Category parameter scheduled change parameter data.
     */
    public function setParameter(?CategoryParametersScheduledBaseChangeParameter $parameter): self
    {
        $this->initialized['parameter'] = true;
        $this->parameter = $parameter;

        return $this;
    }
}
