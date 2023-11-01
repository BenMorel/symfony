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

abstract class AbstractHandlerEvent
{
    private Envelope $envelope;
    private string $handlerName;

    public function __construct(Envelope $envelope, string $handlerName)
    {
        $this->envelope = $envelope;
        $this->handlerName = $handlerName;
    }

    public function getEnvelope(): Envelope
    {
        return $this->envelope;
    }

    public function getHandlerName(): string
    {
        return $this->handlerName;
    }
}
