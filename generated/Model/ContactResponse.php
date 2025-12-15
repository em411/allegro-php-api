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

class ContactResponse extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var string|null
     */
    protected $id;
    /**
     * @var string|null
     */
    protected $name;
    /**
     * @var list<EmailResponse>|null
     */
    protected $emails;
    /**
     * @var list<PhonesResponse>|null
     */
    protected $phones;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * @return list<EmailResponse>|null
     */
    public function getEmails(): ?array
    {
        return $this->emails;
    }

    /**
     * @param list<EmailResponse>|null $emails
     */
    public function setEmails(?array $emails): self
    {
        $this->initialized['emails'] = true;
        $this->emails = $emails;

        return $this;
    }

    /**
     * @return list<PhonesResponse>|null
     */
    public function getPhones(): ?array
    {
        return $this->phones;
    }

    /**
     * @param list<PhonesResponse>|null $phones
     */
    public function setPhones(?array $phones): self
    {
        $this->initialized['phones'] = true;
        $this->phones = $phones;

        return $this;
    }
}
