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

class AdditionalPropertyDto extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * ID of the additional property.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Translated name of the additional property: 'Sending code' | 'Kod nadania'.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Translated description of the additional property.
     *
     * @var string|null
     */
    protected $description;
    /**
     * Defines if the additional property is mandatory or optional.
     *
     * @var bool|null
     */
    protected $required;
    /**
     * If 'false', the additional property value can be set in request, 'true' means that it is set by carrier and will be available only in /shipment-management/shipments/{shipmentId} response.
     *
     * @var bool|null
     */
    protected $readOnly;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * ID of the additional property.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * ID of the additional property.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Translated name of the additional property: 'Sending code' | 'Kod nadania'.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Translated name of the additional property: 'Sending code' | 'Kod nadania'.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * Translated description of the additional property.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Translated description of the additional property.
     */
    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    /**
     * Defines if the additional property is mandatory or optional.
     */
    public function getRequired(): ?bool
    {
        return $this->required;
    }

    /**
     * Defines if the additional property is mandatory or optional.
     */
    public function setRequired(?bool $required): self
    {
        $this->initialized['required'] = true;
        $this->required = $required;

        return $this;
    }

    /**
     * If 'false', the additional property value can be set in request, 'true' means that it is set by carrier and will be available only in /shipment-management/shipments/{shipmentId} response.
     */
    public function getReadOnly(): ?bool
    {
        return $this->readOnly;
    }

    /**
     * If 'false', the additional property value can be set in request, 'true' means that it is set by carrier and will be available only in /shipment-management/shipments/{shipmentId} response.
     */
    public function setReadOnly(?bool $readOnly): self
    {
        $this->initialized['readOnly'] = true;
        $this->readOnly = $readOnly;

        return $this;
    }
}
