<?php
/**
 * File containing the FieldTypeProcessor base class.
 *
 * @copyright Copyright (C) 1999-2013 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version //autogentag//
 */

namespace eZ\Publish\Core\REST\Common;

/**
 * FieldTypeProcessor
 */
abstract class FieldTypeProcessor
{
    /**
     * Perform manipulations on a received $incomingValueHash
     *
     * This method is called by the REST server to allow a field type to pre
     * process the given $incomingValueHash before it is handled by {@link
     * eZ\Publish\SPI\FieldType\FieldType::fromHash()}. The $incomingValueHash
     * can be expected to conform to the rules that need to apply to hashes
     * accepted by fromHash(). The return value of this method replaces the
     * $incomingValueHash.
     *
     * @param mixed $incomingValueHash
     *
     * @return mixed Pre processed hash
     */
    public function preProcessValueHash( $incomingValueHash )
    {
        return $incomingValueHash;
    }

    /**
     * Perform manipulations on an a generated $outgoingValueHash
     *
     * This method is called by the REST server to allow a field type to post
     * process the given $outgoingValueHash, which was previously generated
     * using {@link eZ\Publish\SPI\FieldType\FieldType::toHash()}, before it is
     * sent to the client. The return value of this method replaces
     * $outgoingValueHash and must obey to the same rules as the original
     * $outgoingValueHash.
     *
     * @param mixed $outgoingValueHash
     *
     * @return mixed Post processed hash
     */
    public function postProcessValueHash( $outgoingValueHash )
    {
        return $outgoingValueHash;
    }

    /**
     * Perform manipulations on a received $incomingSettingsHash
     *
     * This method is called by the REST server to allow a field type to pre
     * process the given $incomingSettingsHash before it is handled by {@link
     * eZ\Publish\SPI\FieldType\FieldType::fieldSettingsFromHash()}. The
     * $incomingSettingsHash can be expected to conform to the rules that
     * need to apply to hashes accepted by fieldSettingsFromHash(). The return
     * value of this method replaces the $incomingSettingsHash.
     *
     * @param mixed $incomingSettingsHash
     *
     * @return mixed Pre processed hash
     */
    public function preProcessFieldSettingsHash( $incomingSettingsHash )
    {
        return $incomingSettingsHash;
    }

    /**
     * Perform manipulations on a received $outgoingSettingsHash
     *
     * This method is called by the REST server to allow a field type to post
     * process the given $outgoingSettingsHash, which was previously generated
     * using {@link eZ\Publish\SPI\FieldType\FieldType::fieldSettingsToHash()},
     * before it is sent to the client. The return value of this method replaces
     * $outgoingSettingsHash and must obey to the same rules as the original
     * $outgoingSettingsHash.
     *
     * @param mixed $outgoingSettingsHash
     *
     * @return mixed Post processed hash
     */
    public function postProcessFieldSettingsHash( $outgoingSettingsHash )
    {
        return $outgoingSettingsHash;
    }

    /**
     * Perform manipulations on a received $incomingValidatorConfigurationHash
     *
     * This method is called by the REST server to allow a field type to pre
     * process the given $incomingValidatorConfigurationHash before it is handled
     * by {@link eZ\Publish\SPI\FieldType\FieldType::validatorConfigurationFromHash()}.
     * The $incomingValidatorConfigurationHash can be expected to conform to the
     * rules that need to apply to hashes accepted by validatorConfigurationFromHash().
     * The return value of this method replaces the $incomingValidatorConfigurationHash.
     *
     * @param mixed $incomingValidatorConfigurationHash
     *
     * @return mixed Pre processed hash
     */
    public function preProcessValidatorConfigurationHash( $incomingValidatorConfigurationHash )
    {
        return $incomingValidatorConfigurationHash;
    }

    /**
     * Perform manipulations on a received $outgoingValidatorConfigurationHash
     *
     * This method is called by the REST server to allow a field type to post
     * process the given $outgoingValidatorConfigurationHash, which was previously generated
     * using {@link eZ\Publish\SPI\FieldType\FieldType::validatorConfigurationToHash()},
     * before it is sent to the client. The return value of this method replaces
     * $outgoingValidatorConfigurationHash and must obey to the same rules as the original
     * $outgoingValidatorConfigurationHash.
     *
     * @param mixed $outgoingValidatorConfigurationHash
     *
     * @return mixed Post processed hash
     */
    public function postProcessValidatorConfigurationHash( $outgoingValidatorConfigurationHash )
    {
        return $outgoingValidatorConfigurationHash;
    }
}
