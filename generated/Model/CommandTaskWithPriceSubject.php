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

class CommandTaskWithPriceSubject extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * A pair of values which can uniquely identify a modification from the request.
     *
     * @var CommandTaskWithPriceSubjectSubject|null
     */
    protected $subject;
    /**
     * General fail reason. You should check the errors structure to get more detailed information of the encountered errors.
     *
     * @var string|null
     */
    protected $message;
    /**
     * Available statuses: NEW, SUCCESS, FAIL.
     *
     * @var string|null
     */
    protected $status;
    /**
     * The list of error objects explaining the problems with command processing for the given offer.
     *
     * @var list<Error>|null
     */
    protected $errors;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * A pair of values which can uniquely identify a modification from the request.
     */
    public function getSubject(): ?CommandTaskWithPriceSubjectSubject
    {
        return $this->subject;
    }

    /**
     * A pair of values which can uniquely identify a modification from the request.
     */
    public function setSubject(?CommandTaskWithPriceSubjectSubject $subject): self
    {
        $this->initialized['subject'] = true;
        $this->subject = $subject;

        return $this;
    }

    /**
     * General fail reason. You should check the errors structure to get more detailed information of the encountered errors.
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * General fail reason. You should check the errors structure to get more detailed information of the encountered errors.
     */
    public function setMessage(?string $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;

        return $this;
    }

    /**
     * Available statuses: NEW, SUCCESS, FAIL.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Available statuses: NEW, SUCCESS, FAIL.
     */
    public function setStatus(?string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }

    /**
     * The list of error objects explaining the problems with command processing for the given offer.
     *
     * @return list<Error>|null
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    /**
     * The list of error objects explaining the problems with command processing for the given offer.
     *
     * @param list<Error>|null $errors
     */
    public function setErrors(?array $errors): self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;

        return $this;
    }
}
