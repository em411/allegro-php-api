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

class CustomerReturnRefundRejectionRequest implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Refund rejection.
     *
     * @var CustomerReturnRefundRejectionRequestRejection|null
     */
    protected $rejection;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Refund rejection.
     */
    public function getRejection(): ?CustomerReturnRefundRejectionRequestRejection
    {
        return $this->rejection;
    }

    /**
     * Refund rejection.
     */
    public function setRejection(?CustomerReturnRefundRejectionRequestRejection $rejection): self
    {
        $this->initialized['rejection'] = true;
        $this->rejection = $rejection;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['rejection' => ['rejection', 'getRejection', 'setRejection']];
    }
}
