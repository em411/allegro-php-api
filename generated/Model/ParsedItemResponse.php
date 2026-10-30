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

class ParsedItemResponse implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Name of the parsed component. May be null if the text describes a single, unnamed ingredients list.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Ingredients parsed for this component.
     *
     * @var list<ParsedIngredientResponse>|null
     */
    protected $ingredients;
    /**
     * Errors detected while parsing this component.
     *
     * @var list<ParseDiagnosticResponse>|null
     */
    protected $errors;
    /**
     * Non-critical issues detected while parsing this component.
     *
     * @var list<ParseDiagnosticResponse>|null
     */
    protected $warnings;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Name of the parsed component. May be null if the text describes a single, unnamed ingredients list.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Name of the parsed component. May be null if the text describes a single, unnamed ingredients list.
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * Ingredients parsed for this component.
     *
     * @return list<ParsedIngredientResponse>|null
     */
    public function getIngredients(): ?array
    {
        return $this->ingredients;
    }

    /**
     * Ingredients parsed for this component.
     *
     * @param list<ParsedIngredientResponse>|null $ingredients
     */
    public function setIngredients(?array $ingredients): self
    {
        $this->initialized['ingredients'] = true;
        $this->ingredients = $ingredients;

        return $this;
    }

    /**
     * Errors detected while parsing this component.
     *
     * @return list<ParseDiagnosticResponse>|null
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    /**
     * Errors detected while parsing this component.
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
     * Non-critical issues detected while parsing this component.
     *
     * @return list<ParseDiagnosticResponse>|null
     */
    public function getWarnings(): ?array
    {
        return $this->warnings;
    }

    /**
     * Non-critical issues detected while parsing this component.
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
        return ['name' => ['name', 'getName', 'setName'], 'ingredients' => ['ingredients', 'getIngredients', 'setIngredients'], 'errors' => ['errors', 'getErrors', 'setErrors'], 'warnings' => ['warnings', 'getWarnings', 'setWarnings']];
    }
}
