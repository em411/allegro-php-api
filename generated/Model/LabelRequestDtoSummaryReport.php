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

class LabelRequestDtoSummaryReport extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Selecting the generator behavior. Indicating where the reports are to be attached: all at the end of the file or separately after each label.
     *
     * @var string|null
     */
    protected $placement;
    /**
     * Not-empty list of fields printed on the report.
     *
     * @var list<string>|null
     */
    protected $fields;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Selecting the generator behavior. Indicating where the reports are to be attached: all at the end of the file or separately after each label.
     */
    public function getPlacement(): ?string
    {
        return $this->placement;
    }

    /**
     * Selecting the generator behavior. Indicating where the reports are to be attached: all at the end of the file or separately after each label.
     */
    public function setPlacement(?string $placement): self
    {
        $this->initialized['placement'] = true;
        $this->placement = $placement;

        return $this;
    }

    /**
     * Not-empty list of fields printed on the report.
     *
     * @return list<string>|null
     */
    public function getFields(): ?array
    {
        return $this->fields;
    }

    /**
     * Not-empty list of fields printed on the report.
     *
     * @param list<string>|null $fields
     */
    public function setFields(?array $fields): self
    {
        $this->initialized['fields'] = true;
        $this->fields = $fields;

        return $this;
    }
}
