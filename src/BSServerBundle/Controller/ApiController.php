<?php

namespace BSServerBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;

class ApiController extends FOSRestController
{
    public function optionsProductAction() { }

    public function getAvailableAction() {
        $data = [
            [
                'id' => 1,
                'name' => 'Produkt 1',
                'amount' => 4,
            ],[
                'id' => 2,
                'name' => 'Produkt 2',
                'amount' => 12,
            ],[
                'id' => 3,
                'name' => 'Produkt 3',
                'amount' => 0,
            ],[
                'id' => 4,
                'name' => 'Produkt 4',
                'amount' => 6,
            ],[
                'id' => 5,
                'name' => 'Produkt 5',
                'amount' => 2,
            ]
        ];
        $view = $this->view($data,200);
        return $this->handleView($view);
    }
}
