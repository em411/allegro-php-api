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

class PostPurchaseIssueChatResponse implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var list<PostPurchaseIssueChatMessage>|null
     */
    protected $chat;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * @return list<PostPurchaseIssueChatMessage>|null
     */
    public function getChat(): ?array
    {
        return $this->chat;
    }

    /**
     * @param list<PostPurchaseIssueChatMessage>|null $chat
     */
    public function setChat(?array $chat): self
    {
        $this->initialized['chat'] = true;
        $this->chat = $chat;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['chat' => ['chat', 'getChat', 'setChat']];
    }
}
