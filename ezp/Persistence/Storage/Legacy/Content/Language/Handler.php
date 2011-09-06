<?php
/**
 * File containing the Language Handler class
 *
 * @copyright Copyright (C) 1999-2011 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version //autogentag//
 */

namespace ezp\Persistence\Storage\Legacy\Content\Language;
use ezp\Persistence\Content\Language,
    ezp\Persistence\Content\Language\Handler as BaseLanguageHandler,
    ezp\Persistence\Content\Language\CreateStruct;

/**
 * Language Handler
 */
class Handler implements BaseLanguageHandler
{
    /**
     * Create a new language
     *
     * @param \ezp\Persistence\Content\Language\CreateStruct $struct
     * @return \ezp\Persistence\Content\Language
     */
    public function create( CreateStruct $struct )
    {
        throw new \RuntimeException( "Not implemented, yet" );
    }

    /**
     * Update language
     *
     * @param \ezp\Persistence\Content\Language $struct
     */
    public function update( Language $struct )
    {
        throw new \RuntimeException( "Not implemented, yet" );
    }

    /**
     * Get language by id
     *
     * @param mixed $id
     * @return \ezp\Persistence\Content\Language
     * @throws \ezp\Base\Exception\NotFound If language could not be found by $id
     */
    public function load( $id )
    {
        throw new \RuntimeException( "Not implemented, yet" );
    }

    /**
     * Get all languages
     *
     * @return \ezp\Persistence\Content\Language[]
     */
    public function loadAll()
    {
        throw new \RuntimeException( "Not implemented, yet" );
    }

    /**
     * Delete a language
     *
     * @todo Might throw an exception if the language is still associated with some content / types / (...) ?
     *
     * @param mixed $id
     */
    public function delete( $id )
    {
        throw new \RuntimeException( "Not implemented, yet" );
    }
}
?>
