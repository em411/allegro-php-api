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

class PublicTablesDto extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var list<PublicTableDto>|null
     */
    protected $tables;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * @return list<PublicTableDto>|null
     */
    public function getTables(): ?array
    {
        return $this->tables;
    }

    /**
     * @param list<PublicTableDto>|null $tables
     */
    public function setTables(?array $tables): self
    {
        $this->initialized['tables'] = true;
        $this->tables = $tables;

        return $this;
    }
}
