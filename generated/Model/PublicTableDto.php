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

class PublicTableDto extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * size table headers.
     *
     * @var list<Header>|null
     */
    protected $headers;
    /**
     * size table id.
     *
     * @var string|null
     */
    protected $id;
    /**
     * size table name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * @var JustId|null
     */
    protected $template;
    /**
     * size table cells.
     *
     * @var list<Cells>|null
     */
    protected $values;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * size table headers.
     *
     * @return list<Header>|null
     */
    public function getHeaders(): ?array
    {
        return $this->headers;
    }

    /**
     * size table headers.
     *
     * @param list<Header>|null $headers
     */
    public function setHeaders(?array $headers): self
    {
        $this->initialized['headers'] = true;
        $this->headers = $headers;

        return $this;
    }

    /**
     * size table id.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * size table id.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * size table name.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * size table name.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    public function getTemplate(): ?JustId
    {
        return $this->template;
    }

    public function setTemplate(?JustId $template): self
    {
        $this->initialized['template'] = true;
        $this->template = $template;

        return $this;
    }

    /**
     * size table cells.
     *
     * @return list<Cells>|null
     */
    public function getValues(): ?array
    {
        return $this->values;
    }

    /**
     * size table cells.
     *
     * @param list<Cells>|null $values
     */
    public function setValues(?array $values): self
    {
        $this->initialized['values'] = true;
        $this->values = $values;

        return $this;
    }
}
