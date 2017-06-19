<?php
/**
 * @group SampleApp
 */
class SampleAppCest
{
    public function _before(FunctionalTester $I)
    {
    }

    public function _after(FunctionalTester $I)
    {
    }

    public function ページを開いた時にHomeが表示されていることを確認できる(FunctionalTester $I)
    {
        $I->amOnPage('/hoge/test');
        $I->seeResponseCodeIs(200);
        $I->see('Home testttt', '.main');
    }
}
