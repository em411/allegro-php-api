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

use Em411\Allegro\Api\Runtime\AdditionalAndPatternProperties;
use Em411\Allegro\Api\Runtime\AdditionalPropertiesInterface;

class NewOrderInvoiceFileWithMetadata implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Invoice file in a binary format (PDF only).
     *
     * @var string|resource|\Psr\Http\Message\StreamInterface|null
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

    /**
     * Invoice file in a binary format (PDF only).
     *
     * @return string|resource|\Psr\Http\Message\StreamInterface|null
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Invoice file in a binary format (PDF only).
     *
     * @param string|resource|\Psr\Http\Message\StreamInterface|null $file
     */
    public function setFile($file): self
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

    public function definedProperties(): array
    {
        return ['file' => ['file', 'getFile', 'setFile'], 'invoiceNumber' => ['invoiceNumber', 'getInvoiceNumber', 'setInvoiceNumber']];
    }
}
