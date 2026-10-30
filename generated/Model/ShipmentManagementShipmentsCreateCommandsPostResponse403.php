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

class ShipmentManagementShipmentsCreateCommandsPostResponse403 implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Array of errors.
     *
     * @var list<Error403>|null
     */
    protected $errors;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Array of errors.
     *
     * @return list<Error403>|null
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    /**
     * Array of errors.
     *
     * @param list<Error403>|null $errors
     */
    public function setErrors(?array $errors): self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['errors' => ['errors', 'getErrors', 'setErrors']];
    }
}
