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

class SizeTableTemplateResponse extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * size table template id.
     *
     * @var string|null
     */
    protected $id;
    /**
     * size table template name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * size table template image.
     *
     * @var SizeTableTemplateImageResponse|null
     */
    protected $image;
    /**
     * size table template headers.
     *
     * @var list<Header>|null
     */
    protected $headers;
    /**
     * size table template cells.
     *
     * @var list<Cells>|null
     */
    protected $values;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * size table template id.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * size table template id.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * size table template name.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * size table template name.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * size table template image.
     */
    public function getImage(): ?SizeTableTemplateImageResponse
    {
        return $this->image;
    }

    /**
     * size table template image.
     */
    public function setImage(?SizeTableTemplateImageResponse $image): self
    {
        $this->initialized['image'] = true;
        $this->image = $image;

        return $this;
    }

    /**
     * size table template headers.
     *
     * @return list<Header>|null
     */
    public function getHeaders(): ?array
    {
        return $this->headers;
    }

    /**
     * size table template headers.
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
     * size table template cells.
     *
     * @return list<Cells>|null
     */
    public function getValues(): ?array
    {
        return $this->values;
    }

    /**
     * size table template cells.
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
