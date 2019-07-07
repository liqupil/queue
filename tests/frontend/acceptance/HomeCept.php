<?php

use tests\frontend\AcceptanceTester;

/* @var $scenario Codeception\Scenario */

$I = new AcceptanceTester($scenario);
$I->wantTo('ensure that home page works');
$I->amOnPage(Yii::$app->homeUrl);
$I->see('Kviku Queue');
$I->seeLink('About');
$I->click('About');
$I->seeInCurrentUrl('/page/about');
