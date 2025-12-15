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

class BadgeApplicationRejectionReason extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Code corresponding to the message. For more information visit <a href="/badge/#6" target="_blank">the list of available codes</a>.
     *
     * @var string|null
     */
    protected $code;
    /**
     * List of messages with rejection reasons.
     *
     * @var list<BadgeApplicationRejectionReasonMessage>|null
     */
    protected $messages;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Code corresponding to the message. For more information visit <a href="/badge/#6" target="_blank">the list of available codes</a>.
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Code corresponding to the message. For more information visit <a href="/badge/#6" target="_blank">the list of available codes</a>.
     */
    public function setCode(?string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;

        return $this;
    }

    /**
     * List of messages with rejection reasons.
     *
     * @return list<BadgeApplicationRejectionReasonMessage>|null
     */
    public function getMessages(): ?array
    {
        return $this->messages;
    }

    /**
     * List of messages with rejection reasons.
     *
     * @param list<BadgeApplicationRejectionReasonMessage>|null $messages
     */
    public function setMessages(?array $messages): self
    {
        $this->initialized['messages'] = true;
        $this->messages = $messages;

        return $this;
    }
}
