<?php
namespace extas\components\plugins\calls;

use extas\components\plugins\Plugin;

/**
 * Class PluginCallGetJson
 *
 * @package extas\components\plugins\alice
 * @author jeyroik@gmail.com
 */
class PluginCallGetJson extends Plugin
{
    /**
     * @param $yandexCall
     */
    public function __invoke(&$yandexCall)
    {
        if (isset($_REQUEST['json'])) {
            $get = json_decode(base64_decode($_REQUEST['json']), true);
            $get && $yandexCall = $get;
        }
    }
}
