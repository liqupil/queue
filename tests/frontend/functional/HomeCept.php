<?php

use tests\frontend\FunctionalTester;

/* @var $scenario Codeception\Scenario */

$I = new FunctionalTester($scenario);
$I->wantTo('ensure that home page works');
$I->amOnPage(Yii::$app->homeUrl);
$I->see('Kviku Queue');
$I->seeLink('About');
$I->click('About');
$I->see('Lorem ipsum');
