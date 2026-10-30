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

class ProductSetElementSafetyInformationRequest implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Product's safety information. You can indicate it as:
     *   - `ATTACHMENTS` - if you add attachments.  Reference <a href="https://developer.allegro.pl/documentation#operation/createOfferAttachmentUsingPOST">Docs</a>
     *   - `TEXT` - if you provide product safety information in the form of a text description.
     *
     * @var TextSafetyInformation|AttachmentsSafetyInformation|null
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
     *
     * @return TextSafetyInformation|AttachmentsSafetyInformation|null
     */
    public function getSafetyInformation()
    {
        return $this->safetyInformation;
    }

    /**
     * Product's safety information. You can indicate it as:
     * - `ATTACHMENTS` - if you add attachments.  Reference <a href="https://developer.allegro.pl/documentation#operation/createOfferAttachmentUsingPOST">Docs</a>
     * - `TEXT` - if you provide product safety information in the form of a text description.
     *
     * @param TextSafetyInformation|AttachmentsSafetyInformation|null $safetyInformation
     */
    public function setSafetyInformation($safetyInformation): self
    {
        $this->initialized['safetyInformation'] = true;
        $this->safetyInformation = $safetyInformation;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['safetyInformation' => ['safetyInformation', 'getSafetyInformation', 'setSafetyInformation']];
    }
}
