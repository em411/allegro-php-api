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

class OfferImageLinkUploadRequest extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * URL of the image. It has to contain domain name, not an IP address. Currently we support http and https protocols. When using https the certificate chain needs to be valid.
     *
     * @var string|null
     */
    protected $url;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * URL of the image. It has to contain domain name, not an IP address. Currently we support http and https protocols. When using https the certificate chain needs to be valid.
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * URL of the image. It has to contain domain name, not an IP address. Currently we support http and https protocols. When using https the certificate chain needs to be valid.
     */
    public function setUrl(?string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;

        return $this;
    }
}
