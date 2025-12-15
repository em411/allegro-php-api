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

class ResponsiblePersonContact extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Email of responsible person.
     *
     * @var string|null
     */
    protected $email;
    /**
     * Phone number of responsible person. This field is optional.
     *
     * @var string|null
     */
    protected $phoneNumber;
    /**
     * URL address to contact form.
     *
     * @var string|null
     */
    protected $formUrl;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Email of responsible person.
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * Email of responsible person.
     */
    public function setEmail(?string $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;

        return $this;
    }

    /**
     * Phone number of responsible person. This field is optional.
     */
    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    /**
     * Phone number of responsible person. This field is optional.
     */
    public function setPhoneNumber(?string $phoneNumber): self
    {
        $this->initialized['phoneNumber'] = true;
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * URL address to contact form.
     */
    public function getFormUrl(): ?string
    {
        return $this->formUrl;
    }

    /**
     * URL address to contact form.
     */
    public function setFormUrl(?string $formUrl): self
    {
        $this->initialized['formUrl'] = true;
        $this->formUrl = $formUrl;

        return $this;
    }
}
