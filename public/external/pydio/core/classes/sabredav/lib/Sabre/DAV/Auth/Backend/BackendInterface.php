<?php

namespace Sabre\DAV\Auth\Backend;

/**
 * This is the base class for any authentication object.
 *
 * @copyright Copyright (C) 2007-2013 Rooftop Solutions. All rights reserved.
 * @author Evert Pot (http://www.rooftopsolutions.nl/)
 * @license http://code.google.com/p/sabredav/wiki/License Modified BSD License
 */
interface BackendInterface
{
    /**
     * Authenticates the user based on the current request.
     *
     * If authentication is successful, true must be returned.
     * If authentication fails, an exception must be thrown.
     *
     * @param \Sabre\DAV\Server $server
     * @param string $realm
     * @return bool
     */
    public function authenticate(\Sabre\DAV\Server $server,$realm);

    /**
     * Returns information about the currently logged in username.
     *
     * If nobody is currently logged in, this method should return null.
     *
     * @return string|null
     */
    public function getCurrentUser();

}
