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

class CategoryParametersScheduledChangesResponse implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The list of scheduled changes.
     *
     * @var list<CategoryParametersScheduledBaseChange>|null
     */
    protected $scheduledChanges;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The list of scheduled changes.
     *
     * @return list<CategoryParametersScheduledBaseChange>|null
     */
    public function getScheduledChanges(): ?array
    {
        return $this->scheduledChanges;
    }

    /**
     * The list of scheduled changes.
     *
     * @param list<CategoryParametersScheduledBaseChange>|null $scheduledChanges
     */
    public function setScheduledChanges(?array $scheduledChanges): self
    {
        $this->initialized['scheduledChanges'] = true;
        $this->scheduledChanges = $scheduledChanges;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['scheduledChanges' => ['scheduledChanges', 'getScheduledChanges', 'setScheduledChanges']];
    }
}
