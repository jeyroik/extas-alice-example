<?php
namespace extas\components\plugins\steps;

use extas\components\plugins\Plugin;
use extas\interfaces\yandex\calls\IAliceCall;
use extas\interfaces\yandex\responses\IAliceResponse;
use extas\interfaces\yandex\skills\steps\IStep;

/**
 * Class PluginStepDemoHelp
 * 
 * @package extas\components\plugins\steps
 * @author jeyroik@gmail.com
 */
class PluginStepDemoHelp extends Plugin
{
    /**
     * @param IAliceCall $call
     * @param IAliceResponse $response
     * @param IStep $step
     */
    public function __invoke($call, &$response, $step)
    {
        $response->setText('Здравствуйте, это тестовый сценарий.');
    }
}
