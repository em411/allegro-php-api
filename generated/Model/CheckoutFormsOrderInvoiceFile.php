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

class CheckoutFormsOrderInvoiceFile extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var string|null
     */
    protected $name;
    /**
     * @var \DateTime|null
     */
    protected $uploadedAt;
    /**
     * @var CheckoutFormsOrderInvoiceFileSecurityVerification|null
     */
    protected $securityVerification;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
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

    public function getUploadedAt(): ?\DateTime
    {
        return $this->uploadedAt;
    }

    public function setUploadedAt(?\DateTime $uploadedAt): self
    {
        $this->initialized['uploadedAt'] = true;
        $this->uploadedAt = $uploadedAt;

        return $this;
    }

    public function getSecurityVerification(): ?CheckoutFormsOrderInvoiceFileSecurityVerification
    {
        return $this->securityVerification;
    }

    public function setSecurityVerification(?CheckoutFormsOrderInvoiceFileSecurityVerification $securityVerification): self
    {
        $this->initialized['securityVerification'] = true;
        $this->securityVerification = $securityVerification;

        return $this;
    }
}
