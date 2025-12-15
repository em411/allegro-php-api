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

class Courier extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Supported courier ids are ALLEGRO, DB_SCHENKER, DHL, DPD, DPD_SK, INPOST, ORLEN, POCZTA_POLSKA, SUUS, UPS. If requested courier is not supported then use OTHER value and provide courier name in name field.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Courier name to be provided only if id is OTHER, otherwise it's ignored.
     *
     * @var string|null
     */
    protected $name;
    /**
     * List of tracking numbers.
     *
     * @var list<string>|null
     */
    protected $trackingNumbers;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Supported courier ids are ALLEGRO, DB_SCHENKER, DHL, DPD, DPD_SK, INPOST, ORLEN, POCZTA_POLSKA, SUUS, UPS. If requested courier is not supported then use OTHER value and provide courier name in name field.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Supported courier ids are ALLEGRO, DB_SCHENKER, DHL, DPD, DPD_SK, INPOST, ORLEN, POCZTA_POLSKA, SUUS, UPS. If requested courier is not supported then use OTHER value and provide courier name in name field.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Courier name to be provided only if id is OTHER, otherwise it's ignored.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Courier name to be provided only if id is OTHER, otherwise it's ignored.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * List of tracking numbers.
     *
     * @return list<string>|null
     */
    public function getTrackingNumbers(): ?array
    {
        return $this->trackingNumbers;
    }

    /**
     * List of tracking numbers.
     *
     * @param list<string>|null $trackingNumbers
     */
    public function setTrackingNumbers(?array $trackingNumbers): self
    {
        $this->initialized['trackingNumbers'] = true;
        $this->trackingNumbers = $trackingNumbers;

        return $this;
    }
}
