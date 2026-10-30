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

class ProductSetElementSafetyInformationResponse implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Contains information about product's safety. It can be returned as:
     *  - `ATTACHMENTS` - when it was provided as attachments.  Reference <a href="https://developer.allegro.pl/documentation#operation/createOfferAttachmentUsingPOST">Docs</a>
     *  - `TEXT` - when the product's safety information was provided as text description.
     *  - `NO_SAFETY_INFORMATION` - when no safety information was provided.
     *
     * @var TextSafetyInformation|AttachmentsSafetyInformation|NoSafetyInformation|null
     */
    protected $safetyInformation;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Contains information about product's safety. It can be returned as:
     *  - `ATTACHMENTS` - when it was provided as attachments.  Reference <a href="https://developer.allegro.pl/documentation#operation/createOfferAttachmentUsingPOST">Docs</a>
     *  - `TEXT` - when the product's safety information was provided as text description.
     *  - `NO_SAFETY_INFORMATION` - when no safety information was provided.
     *
     * @return TextSafetyInformation|AttachmentsSafetyInformation|NoSafetyInformation|null
     */
    public function getSafetyInformation()
    {
        return $this->safetyInformation;
    }

    /**
     * Contains information about product's safety. It can be returned as:
     * - `ATTACHMENTS` - when it was provided as attachments.  Reference <a href="https://developer.allegro.pl/documentation#operation/createOfferAttachmentUsingPOST">Docs</a>
     * - `TEXT` - when the product's safety information was provided as text description.
     * - `NO_SAFETY_INFORMATION` - when no safety information was provided.
     *
     * @param TextSafetyInformation|AttachmentsSafetyInformation|NoSafetyInformation|null $safetyInformation
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
