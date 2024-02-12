<?php

namespace App\controllers;

use App\models\Dealer;

class DealerController extends CoreController
{

    public function showDealers()
    {
        $dealer = new Dealer;
        $dealers = $dealer->findDealers();
        $this->show('dealer', ['dealers' => $dealers]);
    }
}
