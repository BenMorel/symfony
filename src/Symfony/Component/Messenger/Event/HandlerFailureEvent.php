<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Messenger\Event;

use Symfony\Component\Messenger\Envelope;

/**
 * Event dispatched after a handler fails.
 */
final class HandlerFailureEvent extends AbstractHandlerEvent
{
    private \Throwable $exception;

    public function __construct(Envelope $envelope, string $handlerName, \Throwable $exception)
    {
        parent::__construct($envelope, $handlerName);

        $this->exception = $exception;
    }

    public function getException(): \Throwable
    {
        return $this->exception;
    }
}
