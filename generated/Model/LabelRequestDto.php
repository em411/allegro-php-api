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

class LabelRequestDto extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var list<string>|null
     */
    protected $shipmentIds;
    /**
     * Label page format. Only for PDF file.
     *
     * @var string|null
     */
    protected $pageSize;
    /**
     * Put additional cut lines. Only for PDF file with A4 size.
     *
     * @var bool|null
     */
    protected $cutLine;
    /**
     * Set of parameters for creating extra labels with shipment summary report. If null then report will be omitted.
     *
     * @var LabelRequestDtoSummaryReport|null
     */
    protected $summaryReport;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * @return list<string>|null
     */
    public function getShipmentIds(): ?array
    {
        return $this->shipmentIds;
    }

    /**
     * @param list<string>|null $shipmentIds
     */
    public function setShipmentIds(?array $shipmentIds): self
    {
        $this->initialized['shipmentIds'] = true;
        $this->shipmentIds = $shipmentIds;

        return $this;
    }

    /**
     * Label page format. Only for PDF file.
     */
    public function getPageSize(): ?string
    {
        return $this->pageSize;
    }

    /**
     * Label page format. Only for PDF file.
     */
    public function setPageSize(?string $pageSize): self
    {
        $this->initialized['pageSize'] = true;
        $this->pageSize = $pageSize;

        return $this;
    }

    /**
     * Put additional cut lines. Only for PDF file with A4 size.
     */
    public function getCutLine(): ?bool
    {
        return $this->cutLine;
    }

    /**
     * Put additional cut lines. Only for PDF file with A4 size.
     */
    public function setCutLine(?bool $cutLine): self
    {
        $this->initialized['cutLine'] = true;
        $this->cutLine = $cutLine;

        return $this;
    }

    /**
     * Set of parameters for creating extra labels with shipment summary report. If null then report will be omitted.
     */
    public function getSummaryReport(): ?LabelRequestDtoSummaryReport
    {
        return $this->summaryReport;
    }

    /**
     * Set of parameters for creating extra labels with shipment summary report. If null then report will be omitted.
     */
    public function setSummaryReport(?LabelRequestDtoSummaryReport $summaryReport): self
    {
        $this->initialized['summaryReport'] = true;
        $this->summaryReport = $summaryReport;

        return $this;
    }
}
