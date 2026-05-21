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

class CompatibilityListIdItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var string|null
     */
    protected $type;
    /**
     * Id of the compatible item. Should be used in categories where ID version of compatible list is supported. See <a href="/documentation/#tag/Compatibility-List/paths/~1sale~1compatibility-list~1supported-categories/get"> supported-categories</a> resource. <a href="../../compatibility_list" target="_blank">Read more</a>.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Text description of the compatible item. When creating (POST) or updating (PATCH) a compatibility list the field is ignored.
     *
     * @var string|null
     */
    protected $text;
    /**
     * @var list<CompatibilityListIdItemAdditionalInfo>|null
     */
    protected $additionalInfo;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * Id of the compatible item. Should be used in categories where ID version of compatible list is supported. See <a href="/documentation/#tag/Compatibility-List/paths/~1sale~1compatibility-list~1supported-categories/get"> supported-categories</a> resource. <a href="../../compatibility_list" target="_blank">Read more</a>.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Id of the compatible item. Should be used in categories where ID version of compatible list is supported. See <a href="/documentation/#tag/Compatibility-List/paths/~1sale~1compatibility-list~1supported-categories/get"> supported-categories</a> resource. <a href="../../compatibility_list" target="_blank">Read more</a>.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Text description of the compatible item. When creating (POST) or updating (PATCH) a compatibility list the field is ignored.
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * Text description of the compatible item. When creating (POST) or updating (PATCH) a compatibility list the field is ignored.
     */
    public function setText(?string $text): self
    {
        $this->initialized['text'] = true;
        $this->text = $text;

        return $this;
    }

    /**
     * @return list<CompatibilityListIdItemAdditionalInfo>|null
     */
    public function getAdditionalInfo(): ?array
    {
        return $this->additionalInfo;
    }

    /**
     * @param list<CompatibilityListIdItemAdditionalInfo>|null $additionalInfo
     */
    public function setAdditionalInfo(?array $additionalInfo): self
    {
        $this->initialized['additionalInfo'] = true;
        $this->additionalInfo = $additionalInfo;

        return $this;
    }
}
