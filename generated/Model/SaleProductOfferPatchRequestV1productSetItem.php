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

class SaleProductOfferPatchRequestV1productSetItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * You should enter the product identifier (UUID or EAN) or a complete product definition.
     *
     * @var mixed|null
     */
    protected $product;
    /**
     * The number of a given product included in a single offer sold as an element of a product set. <small>**Note:** For number of sets available in stock, use `stock.available` property.</small>.
     *
     * @var ProductSetElementQuantityQuantity|null
     */
    protected $quantity;
    /**
     * Reference to the responsible person configured using <a href="https://developer.allegro.pl/documentation#tag/Responsible-persons">Responsible Persons API</a>. Provide either id or name - id will be used if both are provided. Setting this object to null will result in no responsible person assigned to this product.
     *
     * @var ProductSetElementResponsiblePersonRequestResponsiblePerson|null
     */
    protected $responsiblePerson;
    /**
     * Reference to the responsible producer configured using <a href="https://developer.allegro.pl/documentation#tag/Responsible-producers">Responsible Producers API</a>.
     *
     * @var ProductSetElementResponsibleProducerRequest|null
     */
    protected $responsibleProducer;
    /**
     * Product's safety information. You can indicate it as:
     *   - `ATTACHMENTS` - if you add attachments.  Reference <a href="https://developer.allegro.pl/documentation#operation/createOfferAttachmentUsingPOST">Docs</a>
     *   - `TEXT` - if you provide product safety information in the form of a text description.
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
     * You should enter the product identifier (UUID or EAN) or a complete product definition.
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * You should enter the product identifier (UUID or EAN) or a complete product definition.
     */
    public function setProduct($product): self
    {
        $this->initialized['product'] = true;
        $this->product = $product;

        return $this;
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

    /**
     * Reference to the responsible person configured using <a href="https://developer.allegro.pl/documentation#tag/Responsible-persons">Responsible Persons API</a>. Provide either id or name - id will be used if both are provided. Setting this object to null will result in no responsible person assigned to this product.
     */
    public function getResponsiblePerson(): ?ProductSetElementResponsiblePersonRequestResponsiblePerson
    {
        return $this->responsiblePerson;
    }

    /**
     * Reference to the responsible person configured using <a href="https://developer.allegro.pl/documentation#tag/Responsible-persons">Responsible Persons API</a>. Provide either id or name - id will be used if both are provided. Setting this object to null will result in no responsible person assigned to this product.
     */
    public function setResponsiblePerson(?ProductSetElementResponsiblePersonRequestResponsiblePerson $responsiblePerson): self
    {
        $this->initialized['responsiblePerson'] = true;
        $this->responsiblePerson = $responsiblePerson;

        return $this;
    }

    /**
     * Reference to the responsible producer configured using <a href="https://developer.allegro.pl/documentation#tag/Responsible-producers">Responsible Producers API</a>.
     */
    public function getResponsibleProducer(): ?ProductSetElementResponsibleProducerRequest
    {
        return $this->responsibleProducer;
    }

    /**
     * Reference to the responsible producer configured using <a href="https://developer.allegro.pl/documentation#tag/Responsible-producers">Responsible Producers API</a>.
     */
    public function setResponsibleProducer(?ProductSetElementResponsibleProducerRequest $responsibleProducer): self
    {
        $this->initialized['responsibleProducer'] = true;
        $this->responsibleProducer = $responsibleProducer;

        return $this;
    }

    /**
     * Product's safety information. You can indicate it as:
     *   - `ATTACHMENTS` - if you add attachments.  Reference <a href="https://developer.allegro.pl/documentation#operation/createOfferAttachmentUsingPOST">Docs</a>
     *   - `TEXT` - if you provide product safety information in the form of a text description.
     */
    public function getSafetyInformation()
    {
        return $this->safetyInformation;
    }

    /**
     * Product's safety information. You can indicate it as:
     * - `ATTACHMENTS` - if you add attachments.  Reference <a href="https://developer.allegro.pl/documentation#operation/createOfferAttachmentUsingPOST">Docs</a>
     * - `TEXT` - if you provide product safety information in the form of a text description.
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
