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

use Em411\Allegro\Api\Runtime\AdditionalAndPatternProperties;
use Em411\Allegro\Api\Runtime\AdditionalPropertiesInterface;

class AiCoCreatedContent implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * List of images to be labeled as "AI" during the initial upload.  If an image is not present in this list, it will not be labeled as "AI".
     *
     * @var list<AiCoCreatedImage>|null
     */
    protected $images;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * List of images to be labeled as "AI" during the initial upload.  If an image is not present in this list, it will not be labeled as "AI".
     *
     * @return list<AiCoCreatedImage>|null
     */
    public function getImages(): ?array
    {
        return $this->images;
    }

    /**
     * List of images to be labeled as "AI" during the initial upload.  If an image is not present in this list, it will not be labeled as "AI".
     *
     * @param list<AiCoCreatedImage>|null $images
     */
    public function setImages(?array $images): self
    {
        $this->initialized['images'] = true;
        $this->images = $images;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['images' => ['images', 'getImages', 'setImages']];
    }
}
