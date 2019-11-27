<?php declare(strict_types = 1);

namespace Tests\acceptance;

use AcceptanceTester;

/**
 * Class NavigationPageCest
 * @package Tests\acceptance
 * @author Paweł Ged <pawelged9903@gmail.com>
 */
class NavigationPageCest
{
    /**
     * @param AcceptanceTester $I
     */
    public function textNavigationPage(AcceptanceTester $I): void
    {
        $I->amOnPage('http://budged.vh');
        $I->see('BUDOWA DOMÓW I NIE TYLKO');
        $I->seeElement('.main-nav');
        $I->click('a[href="http://budged.vh/galeria"]');
        $I->amOnPage('http://budged.vh/galeria');
        $I->see('Galeria');
    }
}
