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

class OfferImageUploadResponse extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Date of file expiration (removal from the server). We will remove it unless you use it in your offer.
     *
     * @var \DateTime|null
     */
    protected $expiresAt;
    /**
     * Link to the uploaded image.
     *
     * @var string|null
     */
    protected $location;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Date of file expiration (removal from the server). We will remove it unless you use it in your offer.
     */
    public function getExpiresAt(): ?\DateTime
    {
        return $this->expiresAt;
    }

    /**
     * Date of file expiration (removal from the server). We will remove it unless you use it in your offer.
     */
    public function setExpiresAt(?\DateTime $expiresAt): self
    {
        $this->initialized['expiresAt'] = true;
        $this->expiresAt = $expiresAt;

        return $this;
    }

    /**
     * Link to the uploaded image.
     */
    public function getLocation(): ?string
    {
        return $this->location;
    }

    /**
     * Link to the uploaded image.
     */
    public function setLocation(?string $location): self
    {
        $this->initialized['location'] = true;
        $this->location = $location;

        return $this;
    }
}
