<?php

/**
 * File containing the SignalDispatcher class.
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 *
 * @version //autogentag//
 */

namespace eZ\Publish\Core\SignalSlot;

/**
 * Dispatches Signals to their assigned Slots.
 *
 * An instance of this class is required by each object that needs to send
 * Signals. It is recommended, that a SignalDispatcher works together with a
 * {@link SlotFactory} to get hold of the actual Slots that listen for a given
 * Signal, which it originally only knows by their identifier.
 *
 * @internal
 */
abstract class SignalDispatcher
{
    /**
     * Receive the given $signal, react on it, and return data for use by receive after transaction
     *
     * Will only forward signal to Slots implementing {@see CollectorSlot}.
     *
     * @deprecated This method is for internal use, you may use it but it might change from one release to the next.
     *
     * @param Signal $signal
     * @return mixed Must be fully export & re-creatable, and not contain external object references, resources or similar.
     */
    abstract public function collect(Signal $signal);

    /**
     * Emits the given $signal.
     *
     * All assigned slots will eventually receive the $signal
     *
     * @param Signal $signal
     * @param mixed[] $collected Array of data returned by {@see collect()}
     */
    abstract public function emit(Signal $signal, array $collected = array());
}
