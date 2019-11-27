<?php declare(strict_types = 1);

namespace Tests\api;

use ApiTester;

/**
 * Class PageCest
 * @package Tests\api
 * @author Paweł Ged <pawelged9903@gmail.com>
 */
class PageCest
{
    /**
     * @param ApiTester $I
     */
    public function whenSendRequestGetIndexPageViewWithData(ApiTester $I): void
    {
        $I->haveHttpHeader('content-type', 'application/json');
        $I->sendGET('http://budged.vh/');
        $I->seeResponseContains('<html');
    }
}
