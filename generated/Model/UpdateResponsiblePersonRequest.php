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

class UpdateResponsiblePersonRequest extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Responsible person ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Internal name of responsible person in dictionary (visible only to you). Can't start or end with whitespace. Can't contain whitespaces other than space. Can't contain multiple spaces in a row.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Responsible person personal data.
     *
     * @var UpdateResponsiblePersonRequestPersonalData|null
     */
    protected $personalData;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Responsible person ID.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Responsible person ID.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Internal name of responsible person in dictionary (visible only to you). Can't start or end with whitespace. Can't contain whitespaces other than space. Can't contain multiple spaces in a row.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Internal name of responsible person in dictionary (visible only to you). Can't start or end with whitespace. Can't contain whitespaces other than space. Can't contain multiple spaces in a row.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * Responsible person personal data.
     */
    public function getPersonalData(): ?UpdateResponsiblePersonRequestPersonalData
    {
        return $this->personalData;
    }

    /**
     * Responsible person personal data.
     */
    public function setPersonalData(?UpdateResponsiblePersonRequestPersonalData $personalData): self
    {
        $this->initialized['personalData'] = true;
        $this->personalData = $personalData;

        return $this;
    }
}
