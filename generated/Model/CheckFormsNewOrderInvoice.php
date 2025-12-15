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

class CheckFormsNewOrderInvoice extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var CheckFormsNewOrderInvoiceFile|null
     */
    protected $file;
    /**
     * @var string|null
     */
    protected $invoiceNumber;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getFile(): ?CheckFormsNewOrderInvoiceFile
    {
        return $this->file;
    }

    public function setFile(?CheckFormsNewOrderInvoiceFile $file): self
    {
        $this->initialized['file'] = true;
        $this->file = $file;

        return $this;
    }

    public function getInvoiceNumber(): ?string
    {
        return $this->invoiceNumber;
    }

    public function setInvoiceNumber(?string $invoiceNumber): self
    {
        $this->initialized['invoiceNumber'] = true;
        $this->invoiceNumber = $invoiceNumber;

        return $this;
    }
}
