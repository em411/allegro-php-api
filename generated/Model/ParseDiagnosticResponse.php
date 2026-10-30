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

class ParseDiagnosticResponse implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Machine-readable diagnostic code, e.g. `UNKNOWN_INGREDIENT`, `DUPLICATE_INGREDIENT_NAME`, `EMPTY_INGREDIENTS`.
     *
     * @var string|null
     */
    protected $code;
    /**
     * Human-readable, localized diagnostic message. Localized based on the `Accept-Language` header.
     *
     * @var string|null
     */
    protected $message;
    /**
     * Fragment of the submitted text (e.g. the offending ingredient or component name) the diagnostic refers to.
     *
     * @var string|null
     */
    protected $context;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Machine-readable diagnostic code, e.g. `UNKNOWN_INGREDIENT`, `DUPLICATE_INGREDIENT_NAME`, `EMPTY_INGREDIENTS`.
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Machine-readable diagnostic code, e.g. `UNKNOWN_INGREDIENT`, `DUPLICATE_INGREDIENT_NAME`, `EMPTY_INGREDIENTS`.
     */
    public function setCode(?string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;

        return $this;
    }

    /**
     * Human-readable, localized diagnostic message. Localized based on the `Accept-Language` header.
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * Human-readable, localized diagnostic message. Localized based on the `Accept-Language` header.
     */
    public function setMessage(?string $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;

        return $this;
    }

    /**
     * Fragment of the submitted text (e.g. the offending ingredient or component name) the diagnostic refers to.
     */
    public function getContext(): ?string
    {
        return $this->context;
    }

    /**
     * Fragment of the submitted text (e.g. the offending ingredient or component name) the diagnostic refers to.
     */
    public function setContext(?string $context): self
    {
        $this->initialized['context'] = true;
        $this->context = $context;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['code' => ['code', 'getCode', 'setCode'], 'message' => ['message', 'getMessage', 'setMessage'], 'context' => ['context', 'getContext', 'setContext']];
    }
}
