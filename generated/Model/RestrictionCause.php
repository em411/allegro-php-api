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

class RestrictionCause extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Type of return policy restrictions. Required if range of policy is set to RESTRICTED or DISABLED, otherwise must be empty. Selected restriction depends on the chosen range of policy. Values 'ALCOHOL', 'FULLY_IMPLEMENTED_SERVICE' and 'BOOKED_SERVICE' are deprecated and should no longer be used. Read more info [PL](https://developer.allegro.pl/tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-zarzadzac-warunkami-zwrotow) / [EN](https://developer.allegro.pl/tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-manage-return-policies).
     *
     * @var string|null
     */
    protected $name;
    /**
     * @var string|null
     */
    protected $description;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Type of return policy restrictions. Required if range of policy is set to RESTRICTED or DISABLED, otherwise must be empty. Selected restriction depends on the chosen range of policy. Values 'ALCOHOL', 'FULLY_IMPLEMENTED_SERVICE' and 'BOOKED_SERVICE' are deprecated and should no longer be used. Read more info [PL](https://developer.allegro.pl/tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-zarzadzac-warunkami-zwrotow) / [EN](https://developer.allegro.pl/tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-manage-return-policies).
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Type of return policy restrictions. Required if range of policy is set to RESTRICTED or DISABLED, otherwise must be empty. Selected restriction depends on the chosen range of policy. Values 'ALCOHOL', 'FULLY_IMPLEMENTED_SERVICE' and 'BOOKED_SERVICE' are deprecated and should no longer be used. Read more info [PL](https://developer.allegro.pl/tutorials/jak-zarzadzac-ofertami-7GzB2L37ase#jak-zarzadzac-warunkami-zwrotow) / [EN](https://developer.allegro.pl/tutorials/how-to-process-list-of-offers-m09BKA5v8H3#how-to-manage-return-policies).
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }
}
