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

class AdditionalEmailsResponse extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var list<AdditionalEmail>|null
     */
    protected $additionalEmails;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * @return list<AdditionalEmail>|null
     */
    public function getAdditionalEmails(): ?array
    {
        return $this->additionalEmails;
    }

    /**
     * @param list<AdditionalEmail>|null $additionalEmails
     */
    public function setAdditionalEmails(?array $additionalEmails): self
    {
        $this->initialized['additionalEmails'] = true;
        $this->additionalEmails = $additionalEmails;

        return $this;
    }
}
