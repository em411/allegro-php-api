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

class BadgeApplicationProcess extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var string|null
     */
    protected $status;
    /**
     * A list of rejection reasons for the badge application. Returned for process.status = DECLINED only.
     *
     * @var list<BadgeApplicationRejectionReason>|null
     */
    protected $rejectionReasons;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }

    /**
     * A list of rejection reasons for the badge application. Returned for process.status = DECLINED only.
     *
     * @return list<BadgeApplicationRejectionReason>|null
     */
    public function getRejectionReasons(): ?array
    {
        return $this->rejectionReasons;
    }

    /**
     * A list of rejection reasons for the badge application. Returned for process.status = DECLINED only.
     *
     * @param list<BadgeApplicationRejectionReason>|null $rejectionReasons
     */
    public function setRejectionReasons(?array $rejectionReasons): self
    {
        $this->initialized['rejectionReasons'] = true;
        $this->rejectionReasons = $rejectionReasons;

        return $this;
    }
}
