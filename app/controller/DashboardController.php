<?php

class DashboardController
{
    public function index()
    {
        echo 'Usuário Logado! <a href="http://localhost/sistemaLoginPhp/dashboard/logout">Logout</a>';
    }

    public function logout()
    {
        unset($_SESSION['usr']);
        session_destroy();

        header('Location: http://localhost/sistemaLoginPhp');
    }
}