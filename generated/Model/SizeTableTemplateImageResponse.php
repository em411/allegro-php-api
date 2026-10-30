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

class SizeTableTemplateImageResponse implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var list<Caption>|null
     */
    protected $captions;
    /**
     * @var string|null
     */
    protected $url;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * @return list<Caption>|null
     */
    public function getCaptions(): ?array
    {
        return $this->captions;
    }

    /**
     * @param list<Caption>|null $captions
     */
    public function setCaptions(?array $captions): self
    {
        $this->initialized['captions'] = true;
        $this->captions = $captions;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['captions' => ['captions', 'getCaptions', 'setCaptions'], 'url' => ['url', 'getUrl', 'setUrl']];
    }
}
