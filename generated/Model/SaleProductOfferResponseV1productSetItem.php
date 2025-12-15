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

class SaleProductOfferResponseV1productSetItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The number of a given product included in a single offer sold as an element of a product set. <small>**Note:** For number of sets available in stock, use `stock.available` property.</small>.
     *
     * @var ProductSetElementQuantityQuantity|null
     */
    protected $quantity;
    /**
     * @var SaleProductOfferResponseV1productSetItemproduct|null
     */
    protected $product;
    /**
     * Reference to the responsible person configured using <a href="https://developer.allegro.pl/documentation#tag/Responsible-persons">Responsible Persons API</a>. Note that this is a different field than <code>responsibleProducer</code>.
     *
     * @var SaleProductOfferResponseV1productSetItemresponsiblePerson|null
     */
    protected $responsiblePerson;
    /**
     * Reference to the responsible producer configured using Responsible Producer API. Note that this is a different field than <code>responsiblePerson</code>.
     *
     * @var SaleProductOfferResponseV1productSetItemresponsibleProducer|null
     */
    protected $responsibleProducer;
    /**
     * Contains information about product's safety. It can be returned as:
     *  - `ATTACHMENTS` - when it was provided as attachments.  Reference <a href="https://developer.allegro.pl/documentation#operation/createOfferAttachmentUsingPOST">Docs</a>
     *  - `TEXT` - when the product's safety information was provided as text description.
     *  - `NO_SAFETY_INFORMATION` - when no safety information was provided.
     *
     * @var mixed|null
     */
    protected $safetyInformation;
    /**
     * Allows you to declare that the product was introduced before 13 Dec 2024 and therefore does not require GPSR data. It can be set only with the selected values of the Condition parameter.
     *
     * @var bool|null
     */
    protected $marketedBeforeGPSRObligation;
    /**
     * Array of different deposits that are added to given product.
     *
     * @var list<ProductDeposit>|null
     */
    protected $deposits;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The number of a given product included in a single offer sold as an element of a product set. <small>**Note:** For number of sets available in stock, use `stock.available` property.</small>.
     */
    public function getQuantity(): ?ProductSetElementQuantityQuantity
    {
        return $this->quantity;
    }

    /**
     * The number of a given product included in a single offer sold as an element of a product set. <small>**Note:** For number of sets available in stock, use `stock.available` property.</small>.
     */
    public function setQuantity(?ProductSetElementQuantityQuantity $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;

        return $this;
    }

    public function getProduct(): ?SaleProductOfferResponseV1productSetItemproduct
    {
        return $this->product;
    }

    public function setProduct(?SaleProductOfferResponseV1productSetItemproduct $product): self
    {
        $this->initialized['product'] = true;
        $this->product = $product;

        return $this;
    }

    /**
     * Reference to the responsible person configured using <a href="https://developer.allegro.pl/documentation#tag/Responsible-persons">Responsible Persons API</a>. Note that this is a different field than <code>responsibleProducer</code>.
     */
    public function getResponsiblePerson(): ?SaleProductOfferResponseV1productSetItemresponsiblePerson
    {
        return $this->responsiblePerson;
    }

    /**
     * Reference to the responsible person configured using <a href="https://developer.allegro.pl/documentation#tag/Responsible-persons">Responsible Persons API</a>. Note that this is a different field than <code>responsibleProducer</code>.
     */
    public function setResponsiblePerson(?SaleProductOfferResponseV1productSetItemresponsiblePerson $responsiblePerson): self
    {
        $this->initialized['responsiblePerson'] = true;
        $this->responsiblePerson = $responsiblePerson;

        return $this;
    }

    /**
     * Reference to the responsible producer configured using Responsible Producer API. Note that this is a different field than <code>responsiblePerson</code>.
     */
    public function getResponsibleProducer(): ?SaleProductOfferResponseV1productSetItemresponsibleProducer
    {
        return $this->responsibleProducer;
    }

    /**
     * Reference to the responsible producer configured using Responsible Producer API. Note that this is a different field than <code>responsiblePerson</code>.
     */
    public function setResponsibleProducer(?SaleProductOfferResponseV1productSetItemresponsibleProducer $responsibleProducer): self
    {
        $this->initialized['responsibleProducer'] = true;
        $this->responsibleProducer = $responsibleProducer;

        return $this;
    }

    /**
     * Contains information about product's safety. It can be returned as:
     *  - `ATTACHMENTS` - when it was provided as attachments.  Reference <a href="https://developer.allegro.pl/documentation#operation/createOfferAttachmentUsingPOST">Docs</a>
     *  - `TEXT` - when the product's safety information was provided as text description.
     *  - `NO_SAFETY_INFORMATION` - when no safety information was provided.
     */
    public function getSafetyInformation()
    {
        return $this->safetyInformation;
    }

    /**
     * Contains information about product's safety. It can be returned as:
     * - `ATTACHMENTS` - when it was provided as attachments.  Reference <a href="https://developer.allegro.pl/documentation#operation/createOfferAttachmentUsingPOST">Docs</a>
     * - `TEXT` - when the product's safety information was provided as text description.
     * - `NO_SAFETY_INFORMATION` - when no safety information was provided.
     */
    public function setSafetyInformation($safetyInformation): self
    {
        $this->initialized['safetyInformation'] = true;
        $this->safetyInformation = $safetyInformation;

        return $this;
    }

    /**
     * Allows you to declare that the product was introduced before 13 Dec 2024 and therefore does not require GPSR data. It can be set only with the selected values of the Condition parameter.
     */
    public function getMarketedBeforeGPSRObligation(): ?bool
    {
        return $this->marketedBeforeGPSRObligation;
    }

    /**
     * Allows you to declare that the product was introduced before 13 Dec 2024 and therefore does not require GPSR data. It can be set only with the selected values of the Condition parameter.
     */
    public function setMarketedBeforeGPSRObligation(?bool $marketedBeforeGPSRObligation): self
    {
        $this->initialized['marketedBeforeGPSRObligation'] = true;
        $this->marketedBeforeGPSRObligation = $marketedBeforeGPSRObligation;

        return $this;
    }

    /**
     * Array of different deposits that are added to given product.
     *
     * @return list<ProductDeposit>|null
     */
    public function getDeposits(): ?array
    {
        return $this->deposits;
    }

    /**
     * Array of different deposits that are added to given product.
     *
     * @param list<ProductDeposit>|null $deposits
     */
    public function setDeposits(?array $deposits): self
    {
        $this->initialized['deposits'] = true;
        $this->deposits = $deposits;

        return $this;
    }
}
