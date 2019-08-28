<?php
namespace extas\components\plugins\steps;

use extas\components\plugins\Plugin;
use extas\components\SystemContainer;
use extas\interfaces\yandex\calls\IAliceCall;
use extas\interfaces\yandex\responses\cards\ICard;
use extas\interfaces\yandex\responses\cards\ICardRepository;
use extas\interfaces\yandex\responses\IAliceResponse;
use extas\interfaces\yandex\skills\steps\IStep;

/**
 * Class PluginStepDemoStart
 * 
 * @package extas\components\plugins\steps
 * @author jeyroik@gmail.com
 */
class PluginStepDemoStart extends Plugin
{
    /**
     * @param IAliceCall $call
     * @param IAliceResponse $response
     * @param IStep $step
     */
    public function __invoke($call, &$response, $step)
    {
        /**
         * @var $cardRepo ICardRepository
         * @var $card ICard
         */
        $cardRepo = SystemContainer::getItem(ICardRepository::class);
        $card = $cardRepo->one([ICard::FIELD__NAME => 'test.image.list']);
        
        if ($card) {
            $response->setCard($card->build());
        } else {
            $response->setText('Missed card test.image.list');
        }
    }
}
