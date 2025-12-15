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

class RefusalMessage extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Detailed message.
     *
     * @var string|null
     */
    protected $text;
    /**
     * Optional link that redirects to page associated with refusal reason.
     *
     * @var string|null
     */
    protected $link;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Detailed message.
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * Detailed message.
     */
    public function setText(?string $text): self
    {
        $this->initialized['text'] = true;
        $this->text = $text;

        return $this;
    }

    /**
     * Optional link that redirects to page associated with refusal reason.
     */
    public function getLink(): ?string
    {
        return $this->link;
    }

    /**
     * Optional link that redirects to page associated with refusal reason.
     */
    public function setLink(?string $link): self
    {
        $this->initialized['link'] = true;
        $this->link = $link;

        return $this;
    }
}
