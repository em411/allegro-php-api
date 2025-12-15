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

class OfferAttachment extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var string|null
     */
    protected $id;
    /**
     * offer attachment type.
     *
     * @var string|null
     */
    protected $type;
    /**
     * @var AttachmentFile|null
     */
    protected $file;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * offer attachment type.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * offer attachment type.
     */
    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    public function getFile(): ?AttachmentFile
    {
        return $this->file;
    }

    public function setFile(?AttachmentFile $file): self
    {
        $this->initialized['file'] = true;
        $this->file = $file;

        return $this;
    }
}
