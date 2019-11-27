<?php declare(strict_types = 1);

namespace Tests\api;

use ApiTester;

class MailControllerCest
{
    /**
     * @param ApiTester $I
     */
    public function testWhenSendRequestToContactMailExpectCorrect(ApiTester $I): void
    {
        $I->haveHttpHeader('content-type', 'application/json');
        $I->sendPOST('http://budged.vh/kontakt/wyslij/', [
            'name' => 'example name',
            'email' => 'example@example.com',
            'description' => 'example description',
        ]);
        $I->seeResponseContains('success');
    }
}
