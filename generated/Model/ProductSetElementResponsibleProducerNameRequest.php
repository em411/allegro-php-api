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

class ProductSetElementResponsibleProducerNameRequest extends ProductSetElementResponsibleProducerRequest
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Name of responsible producer. **Note:** This refers to the <code>name</code> property and not the <code>producerData.tradeName</code> property of responsible producer defined using <a href="https://developer.allegro.pl/documentation#tag/Responsible-producers">Responsible Producers API</a>.
     *
     * @var string|null
     */
    protected $name;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Name of responsible producer. **Note:** This refers to the <code>name</code> property and not the <code>producerData.tradeName</code> property of responsible producer defined using <a href="https://developer.allegro.pl/documentation#tag/Responsible-producers">Responsible Producers API</a>.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Name of responsible producer. **Note:** This refers to the <code>name</code> property and not the <code>producerData.tradeName</code> property of responsible producer defined using <a href="https://developer.allegro.pl/documentation#tag/Responsible-producers">Responsible Producers API</a>.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }
}
