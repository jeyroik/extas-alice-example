<?php
namespace extas\components\plugins\steps;

use extas\components\plugins\Plugin;
use extas\interfaces\yandex\calls\IAliceCall;
use extas\interfaces\yandex\responses\IAliceResponse;
use extas\interfaces\yandex\skills\steps\IStep;

/**
 * Class PluginStepDemoTest
 *
 * @package extas\components\plugins\steps
 * @author jeyroik@gmail.com
 */
class PluginStepDemoTest extends Plugin
{
    /**
     * @param IAliceCall $call
     * @param IAliceResponse $response
     * @param IStep $step
     */
    public function __invoke($call, &$response, $step)
    {
        $response->setText('pong');
    }
}
