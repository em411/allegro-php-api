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

class SaleProductOfferResponseV1productSetItemproduct extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Product id.
     *
     * @var string|null
     */
    protected $id;
    /**
     * @var ProductOfferResponsePublication|null
     */
    protected $publication;
    /**
     * Product parameters in the offer.
     *
     * @var list<ParameterProductOfferResponse>|null
     */
    protected $parameters;
    /**
     * Flag that indicates if any part of product was cocreated with using AI.
     *
     * @var bool|null
     */
    protected $isAiCoCreated;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Product id.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Product id.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getPublication(): ?ProductOfferResponsePublication
    {
        return $this->publication;
    }

    public function setPublication(?ProductOfferResponsePublication $publication): self
    {
        $this->initialized['publication'] = true;
        $this->publication = $publication;

        return $this;
    }

    /**
     * Product parameters in the offer.
     *
     * @return list<ParameterProductOfferResponse>|null
     */
    public function getParameters(): ?array
    {
        return $this->parameters;
    }

    /**
     * Product parameters in the offer.
     *
     * @param list<ParameterProductOfferResponse>|null $parameters
     */
    public function setParameters(?array $parameters): self
    {
        $this->initialized['parameters'] = true;
        $this->parameters = $parameters;

        return $this;
    }

    /**
     * Flag that indicates if any part of product was cocreated with using AI.
     */
    public function getIsAiCoCreated(): ?bool
    {
        return $this->isAiCoCreated;
    }

    /**
     * Flag that indicates if any part of product was cocreated with using AI.
     */
    public function setIsAiCoCreated(?bool $isAiCoCreated): self
    {
        $this->initialized['isAiCoCreated'] = true;
        $this->isAiCoCreated = $isAiCoCreated;

        return $this;
    }
}
