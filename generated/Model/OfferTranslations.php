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

class OfferTranslations extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var list<OfferTranslation>|null
     */
    protected $translations;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * @return list<OfferTranslation>|null
     */
    public function getTranslations(): ?array
    {
        return $this->translations;
    }

    /**
     * @param list<OfferTranslation>|null $translations
     */
    public function setTranslations(?array $translations): self
    {
        $this->initialized['translations'] = true;
        $this->translations = $translations;

        return $this;
    }
}
