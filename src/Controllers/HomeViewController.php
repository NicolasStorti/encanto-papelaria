<?php

namespace Encanto\Projeto\Controllers;

class HomeViewController implements Controller
{
    public function processaRequisicao(): void
    {
        require_once __DIR__ . '/../../view/home.php';
    }
}