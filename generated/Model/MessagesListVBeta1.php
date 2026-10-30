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

class MessagesListVBeta1 extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var list<MessageVBeta1>|null
     */
    protected $messages;
    /**
     * @var MessagesListVBeta1NextPage|null
     */
    protected $nextPage;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * @return list<MessageVBeta1>|null
     */
    public function getMessages(): ?array
    {
        return $this->messages;
    }

    /**
     * @param list<MessageVBeta1>|null $messages
     */
    public function setMessages(?array $messages): self
    {
        $this->initialized['messages'] = true;
        $this->messages = $messages;

        return $this;
    }

    public function getNextPage(): ?MessagesListVBeta1NextPage
    {
        return $this->nextPage;
    }

    public function setNextPage(?MessagesListVBeta1NextPage $nextPage): self
    {
        $this->initialized['nextPage'] = true;
        $this->nextPage = $nextPage;

        return $this;
    }
}
