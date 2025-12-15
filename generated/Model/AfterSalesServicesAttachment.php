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

class AfterSalesServicesAttachment extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The Id of the attachment.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Attachment file name.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Direct link to the attachment.
     *
     * @var string|null
     */
    protected $url;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The Id of the attachment.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * The Id of the attachment.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Attachment file name.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Attachment file name.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * Direct link to the attachment.
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * Direct link to the attachment.
     */
    public function setUrl(?string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;

        return $this;
    }
}
