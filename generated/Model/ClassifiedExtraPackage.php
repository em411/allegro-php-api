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

class ClassifiedExtraPackage extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The classifieds extra package ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Extra package with this flag set to true will be recreated when offer is being republished.
     *
     * @var bool|null
     */
    protected $republish;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The classifieds extra package ID.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * The classifieds extra package ID.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Extra package with this flag set to true will be recreated when offer is being republished.
     */
    public function getRepublish(): ?bool
    {
        return $this->republish;
    }

    /**
     * Extra package with this flag set to true will be recreated when offer is being republished.
     */
    public function setRepublish(?bool $republish): self
    {
        $this->initialized['republish'] = true;
        $this->republish = $republish;

        return $this;
    }
}
