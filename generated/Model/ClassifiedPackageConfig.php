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

class ClassifiedPackageConfig extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var list<ClassifiedExtension>|null
     */
    protected $extensions;
    /**
     * The classifieds package ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The classifieds package name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * A list of additional promotions included in the package.
     *
     * @var list<ClassifiedPromotion>|null
     */
    protected $promotions;
    /**
     * @var ClassifiedPublication|null
     */
    protected $publication;
    /**
     * @var string|null
     */
    protected $type;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * @return list<ClassifiedExtension>|null
     */
    public function getExtensions(): ?array
    {
        return $this->extensions;
    }

    /**
     * @param list<ClassifiedExtension>|null $extensions
     */
    public function setExtensions(?array $extensions): self
    {
        $this->initialized['extensions'] = true;
        $this->extensions = $extensions;

        return $this;
    }

    /**
     * The classifieds package ID.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * The classifieds package ID.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * The classifieds package name.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * The classifieds package name.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * A list of additional promotions included in the package.
     *
     * @return list<ClassifiedPromotion>|null
     */
    public function getPromotions(): ?array
    {
        return $this->promotions;
    }

    /**
     * A list of additional promotions included in the package.
     *
     * @param list<ClassifiedPromotion>|null $promotions
     */
    public function setPromotions(?array $promotions): self
    {
        $this->initialized['promotions'] = true;
        $this->promotions = $promotions;

        return $this;
    }

    public function getPublication(): ?ClassifiedPublication
    {
        return $this->publication;
    }

    public function setPublication(?ClassifiedPublication $publication): self
    {
        $this->initialized['publication'] = true;
        $this->publication = $publication;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }
}
