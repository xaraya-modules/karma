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
 * Create a new item of the tags object
 *
 */

sys::import('modules.dynamicdata.class.objects.master');

function karma_adminapi_new_tag($args)
{
    $tag = DataObjectMaster::getObject(['name' => 'karma_tags']);
    $itemid = $tag->createItem($args);
    return $itemid;
}
