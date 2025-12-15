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

class AdditionalMarketplacePublication extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The publication status of the offer on additional marketplace. The possible values:
     *
     *   - *NOT_REQUESTED* - seller has not declared a willingness to list this offer on given marketplace
     *   - *PENDING* - seller declared a willingness to list this offer on given marketplace, but the process has not started yet; e.g. the offer is not published yet
     *   - *IN_PROGRESS* - we process the offer's qualification for given marketplace; the offer is not listed yet
     *   - *APPROVED* - the offer is approved to list on given marketplace
     *   - *REFUSED* - the offer is refused to list on given marketplace
     *
     * @var string|null
     */
    protected $status;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The publication status of the offer on additional marketplace. The possible values:
     *
     *   - *NOT_REQUESTED* - seller has not declared a willingness to list this offer on given marketplace
     *   - *PENDING* - seller declared a willingness to list this offer on given marketplace, but the process has not started yet; e.g. the offer is not published yet
     *   - *IN_PROGRESS* - we process the offer's qualification for given marketplace; the offer is not listed yet
     *   - *APPROVED* - the offer is approved to list on given marketplace
     *   - *REFUSED* - the offer is refused to list on given marketplace
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * The publication status of the offer on additional marketplace. The possible values:
     *
     * - *NOT_REQUESTED* - seller has not declared a willingness to list this offer on given marketplace
     * - *PENDING* - seller declared a willingness to list this offer on given marketplace, but the process has not started yet; e.g. the offer is not published yet
     * - *IN_PROGRESS* - we process the offer's qualification for given marketplace; the offer is not listed yet
     * - *APPROVED* - the offer is approved to list on given marketplace
     * - *REFUSED* - the offer is refused to list on given marketplace
     */
    public function setStatus(?string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }
}
