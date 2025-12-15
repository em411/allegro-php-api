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

class ProductSetElementSafetyInformationRequest extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Product's safety information. You can indicate it as:
     *   - `ATTACHMENTS` - if you add attachments.  Reference <a href="https://developer.allegro.pl/documentation#operation/createOfferAttachmentUsingPOST">Docs</a>
     *   - `TEXT` - if you provide product safety information in the form of a text description.
     *
     * @var mixed|null
     */
    protected $safetyInformation;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Product's safety information. You can indicate it as:
     *   - `ATTACHMENTS` - if you add attachments.  Reference <a href="https://developer.allegro.pl/documentation#operation/createOfferAttachmentUsingPOST">Docs</a>
     *   - `TEXT` - if you provide product safety information in the form of a text description.
     */
    public function getSafetyInformation()
    {
        return $this->safetyInformation;
    }

    /**
     * Product's safety information. You can indicate it as:
     * - `ATTACHMENTS` - if you add attachments.  Reference <a href="https://developer.allegro.pl/documentation#operation/createOfferAttachmentUsingPOST">Docs</a>
     * - `TEXT` - if you provide product safety information in the form of a text description.
     */
    public function setSafetyInformation($safetyInformation): self
    {
        $this->initialized['safetyInformation'] = true;
        $this->safetyInformation = $safetyInformation;

        return $this;
    }
}
