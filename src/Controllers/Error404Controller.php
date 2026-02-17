<?php

namespace Encanto\Projeto\Controllers;

class Error404Controller implements Controller
{
    public function processaRequisicao(): void
    {
        http_response_code(404);
    }
}