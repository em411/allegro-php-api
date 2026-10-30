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

class ProductParseResult implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Identifier of the product this parsing result refers to.
     *
     * @var string|null
     */
    protected $productId;
    /**
     * Components successfully parsed out of the submitted ingredients text.
     *
     * @var list<ParsedItemResponse>|null
     */
    protected $items;
    /**
     * Errors that prevented parts of the ingredients text from being parsed.
     *
     * @var list<ParseDiagnosticResponse>|null
     */
    protected $errors;
    /**
     * Non-critical issues found during parsing, e.g. an ingredient unknown to the ingredients collection.
     *
     * @var list<ParseDiagnosticResponse>|null
     */
    protected $warnings;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Identifier of the product this parsing result refers to.
     */
    public function getProductId(): ?string
    {
        return $this->productId;
    }

    /**
     * Identifier of the product this parsing result refers to.
     */
    public function setProductId(?string $productId): self
    {
        $this->initialized['productId'] = true;
        $this->productId = $productId;

        return $this;
    }

    /**
     * Components successfully parsed out of the submitted ingredients text.
     *
     * @return list<ParsedItemResponse>|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }

    /**
     * Components successfully parsed out of the submitted ingredients text.
     *
     * @param list<ParsedItemResponse>|null $items
     */
    public function setItems(?array $items): self
    {
        $this->initialized['items'] = true;
        $this->items = $items;

        return $this;
    }

    /**
     * Errors that prevented parts of the ingredients text from being parsed.
     *
     * @return list<ParseDiagnosticResponse>|null
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    /**
     * Errors that prevented parts of the ingredients text from being parsed.
     *
     * @param list<ParseDiagnosticResponse>|null $errors
     */
    public function setErrors(?array $errors): self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;

        return $this;
    }

    /**
     * Non-critical issues found during parsing, e.g. an ingredient unknown to the ingredients collection.
     *
     * @return list<ParseDiagnosticResponse>|null
     */
    public function getWarnings(): ?array
    {
        return $this->warnings;
    }

    /**
     * Non-critical issues found during parsing, e.g. an ingredient unknown to the ingredients collection.
     *
     * @param list<ParseDiagnosticResponse>|null $warnings
     */
    public function setWarnings(?array $warnings): self
    {
        $this->initialized['warnings'] = true;
        $this->warnings = $warnings;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['productId' => ['productId', 'getProductId', 'setProductId'], 'items' => ['items', 'getItems', 'setItems'], 'errors' => ['errors', 'getErrors', 'setErrors'], 'warnings' => ['warnings', 'getWarnings', 'setWarnings']];
    }
}
