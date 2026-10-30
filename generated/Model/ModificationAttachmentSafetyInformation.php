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

class ModificationAttachmentSafetyInformation extends ModificationSafetyInformation
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Full list of safety information attachments.
     *
     * @var list<ModificationAttachmentSafetyInformationAttachmentsItem>|null
     */
    protected $attachments;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Full list of safety information attachments.
     *
     * @return list<ModificationAttachmentSafetyInformationAttachmentsItem>|null
     */
    public function getAttachments(): ?array
    {
        return $this->attachments;
    }

    /**
     * Full list of safety information attachments.
     *
     * @param list<ModificationAttachmentSafetyInformationAttachmentsItem>|null $attachments
     */
    public function setAttachments(?array $attachments): self
    {
        $this->initialized['attachments'] = true;
        $this->attachments = $attachments;

        return $this;
    }

    public function definedProperties(): array
    {
        return array_merge(parent::definedProperties(), ['attachments' => ['attachments', 'getAttachments', 'setAttachments']]);
    }
}
