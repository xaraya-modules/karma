<?php
/**
 * Karma Module
 *
 * @package modules
 * @subpackage karma
 * @category Third Party Xaraya Module
 * @version 1.0.0
 * @copyright (C) 2019 Luetolf-Carroll GmbH
 * @license GPL {@link http://www.gnu.org/licenses/gpl.html}
 * @author Marc Lutolf <marc@luetolf-carroll.com>
 */
/**
 * Return the options for the user menu
 *
 */

function karma_userapi_getmenulinks()
{
    $menulinks = [];

    if (xarSecurity::check('ViewKarma', 0)) {
        $menulinks[] = ['url'   => xarController::URL(
            'karma',
            'user',
            'main'
        ),
                              'title' => xarML(''),
                              'label' => xarML(''), ];
    }

    return $menulinks;
}
