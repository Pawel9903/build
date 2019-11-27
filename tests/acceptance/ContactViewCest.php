<?php declare(strict_types = 1);

namespace Tests\acceptance;

use AcceptanceTester;

/**
 * Class ContactViewCest
 * @package Tests\acceptance
 * @author Paweł Ged <pawelged9903@gmail.com>
 */
class ContactViewCest
{
    /**
     * @param AcceptanceTester $I
     */
    public function sendContactMessageExpectSuccess(AcceptanceTester $I): void
    {
        $I->amOnPage('http://budged.vh/kontakt');
        $I->see('Kontakt');
        $I->fillField('input[name="name"]', 'Jan Kowalski');
        $I->fillField('input[id="email"]', 'Kowalski@example.com');
        $I->fillField('#tel', '+ 00 000 000 000');
        $I->fillField('textarea[name="description"]', 'Message');
        $I->click('#submit');
        $I->see('success');
    }
}
