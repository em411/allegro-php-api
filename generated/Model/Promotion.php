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

class Promotion extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var bool|null
     */
    protected $emphasized1d;
    /**
     * @var bool|null
     */
    protected $emphasized10d;
    /**
     * @var bool|null
     */
    protected $departmentPage;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getEmphasized1d(): ?bool
    {
        return $this->emphasized1d;
    }

    public function setEmphasized1d(?bool $emphasized1d): self
    {
        $this->initialized['emphasized1d'] = true;
        $this->emphasized1d = $emphasized1d;

        return $this;
    }

    public function getEmphasized10d(): ?bool
    {
        return $this->emphasized10d;
    }

    public function setEmphasized10d(?bool $emphasized10d): self
    {
        $this->initialized['emphasized10d'] = true;
        $this->emphasized10d = $emphasized10d;

        return $this;
    }

    public function getDepartmentPage(): ?bool
    {
        return $this->departmentPage;
    }

    public function setDepartmentPage(?bool $departmentPage): self
    {
        $this->initialized['departmentPage'] = true;
        $this->departmentPage = $departmentPage;

        return $this;
    }
}
