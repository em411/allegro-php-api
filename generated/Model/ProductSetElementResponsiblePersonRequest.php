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

class ProductSetElementResponsiblePersonRequest extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Reference to the responsible person configured using <a href="https://developer.allegro.pl/documentation#tag/Responsible-persons">Responsible Persons API</a>. Provide either id or name - id will be used if both are provided. Setting this object to null will result in no responsible person assigned to this product.
     *
     * @var ProductSetElementResponsiblePersonRequestResponsiblePerson|null
     */
    protected $responsiblePerson;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
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
}
