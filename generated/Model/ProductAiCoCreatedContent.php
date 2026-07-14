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

class ProductAiCoCreatedContent extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * List of images declared as generated using artificial intelligence. If an image is not present in this list, it was not declared as AI-generated.
     *
     * @var list<AiCoCreatedImage>|null
     */
    protected $images;
    /**
     * Each path points to a specific field co-created by AI.
     *
     * @var list<string>|null
     */
    protected $paths;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * List of images declared as generated using artificial intelligence. If an image is not present in this list, it was not declared as AI-generated.
     *
     * @return list<AiCoCreatedImage>|null
     */
    public function getImages(): ?array
    {
        return $this->images;
    }

    /**
     * List of images declared as generated using artificial intelligence. If an image is not present in this list, it was not declared as AI-generated.
     *
     * @param list<AiCoCreatedImage>|null $images
     */
    public function setImages(?array $images): self
    {
        $this->initialized['images'] = true;
        $this->images = $images;

        return $this;
    }

    /**
     * Each path points to a specific field co-created by AI.
     *
     * @return list<string>|null
     */
    public function getPaths(): ?array
    {
        return $this->paths;
    }

    /**
     * Each path points to a specific field co-created by AI.
     *
     * @param list<string>|null $paths
     */
    public function setPaths(?array $paths): self
    {
        $this->initialized['paths'] = true;
        $this->paths = $paths;

        return $this;
    }
}
