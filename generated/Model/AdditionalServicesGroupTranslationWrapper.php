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

class AdditionalServicesGroupTranslationWrapper extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var list<AdditionalServiceTranslation>|null
     */
    protected $translation;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * @return list<AdditionalServiceTranslation>|null
     */
    public function getTranslation(): ?array
    {
        return $this->translation;
    }

    /**
     * @param list<AdditionalServiceTranslation>|null $translation
     */
    public function setTranslation(?array $translation): self
    {
        $this->initialized['translation'] = true;
        $this->translation = $translation;

        return $this;
    }
}
