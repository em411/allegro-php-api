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

class CategoryTaxSettings extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * A list of tax subjects.
     *
     * @var list<TaxSubject>|null
     */
    protected $subjects;
    /**
     * A list of tax rates.
     *
     * @var list<TaxRate>|null
     */
    protected $rates;
    /**
     * A list of tax exemptions.
     *
     * @var list<TaxExemption>|null
     */
    protected $exemptions;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * A list of tax subjects.
     *
     * @return list<TaxSubject>|null
     */
    public function getSubjects(): ?array
    {
        return $this->subjects;
    }

    /**
     * A list of tax subjects.
     *
     * @param list<TaxSubject>|null $subjects
     */
    public function setSubjects(?array $subjects): self
    {
        $this->initialized['subjects'] = true;
        $this->subjects = $subjects;

        return $this;
    }

    /**
     * A list of tax rates.
     *
     * @return list<TaxRate>|null
     */
    public function getRates(): ?array
    {
        return $this->rates;
    }

    /**
     * A list of tax rates.
     *
     * @param list<TaxRate>|null $rates
     */
    public function setRates(?array $rates): self
    {
        $this->initialized['rates'] = true;
        $this->rates = $rates;

        return $this;
    }

    /**
     * A list of tax exemptions.
     *
     * @return list<TaxExemption>|null
     */
    public function getExemptions(): ?array
    {
        return $this->exemptions;
    }

    /**
     * A list of tax exemptions.
     *
     * @param list<TaxExemption>|null $exemptions
     */
    public function setExemptions(?array $exemptions): self
    {
        $this->initialized['exemptions'] = true;
        $this->exemptions = $exemptions;

        return $this;
    }
}
