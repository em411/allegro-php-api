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

class CampaignRefusalReason extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Code corresponding to the message. For more information visit the list of available codes: <a href="../../tutorials/jak-przypisac-oferte-kampanii-GRaj0q6Gwuy#bledy-i-powody-odrzucenia" target="_blank">PL</a> / <a href="../../tutorials/how-to-submit-offers-to-campaigns-AgGjd6EmyH4#errors-and-reasons-for-rejection" target="_blank">EN</a>.
     *
     * @var string|null
     */
    protected $code;
    /**
     * List of refusal messages.
     *
     * @var list<RefusalMessage>|null
     */
    protected $messages;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Code corresponding to the message. For more information visit the list of available codes: <a href="../../tutorials/jak-przypisac-oferte-kampanii-GRaj0q6Gwuy#bledy-i-powody-odrzucenia" target="_blank">PL</a> / <a href="../../tutorials/how-to-submit-offers-to-campaigns-AgGjd6EmyH4#errors-and-reasons-for-rejection" target="_blank">EN</a>.
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Code corresponding to the message. For more information visit the list of available codes: <a href="../../tutorials/jak-przypisac-oferte-kampanii-GRaj0q6Gwuy#bledy-i-powody-odrzucenia" target="_blank">PL</a> / <a href="../../tutorials/how-to-submit-offers-to-campaigns-AgGjd6EmyH4#errors-and-reasons-for-rejection" target="_blank">EN</a>.
     */
    public function setCode(?string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;

        return $this;
    }

    /**
     * List of refusal messages.
     *
     * @return list<RefusalMessage>|null
     */
    public function getMessages(): ?array
    {
        return $this->messages;
    }

    /**
     * List of refusal messages.
     *
     * @param list<RefusalMessage>|null $messages
     */
    public function setMessages(?array $messages): self
    {
        $this->initialized['messages'] = true;
        $this->messages = $messages;

        return $this;
    }
}
