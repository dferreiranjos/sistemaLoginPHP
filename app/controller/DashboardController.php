<?php

class DashboardController
{
    public function index()
    {
        // echo 'Usuário Logado! <a href="http://localhost/sistemaLoginPhp/dashboard/logout">Logout</a>';

        $loader = new \Twig\Loader\FilesystemLoader('app/view');
        $twig = new \Twig\Environment($loader, [
            'cache' => '/path/to/compilation_cache',
            'auto_reload'=>true,
        ]);
        $template = $twig->load('dashboard.html');
        $parameters['name_user'] = $_SESSION['usr']['name_user'];

        return $template->render($parameters);
    }

    public function logout()
    {
        unset($_SESSION['usr']);
        session_destroy();

        header('Location: http://localhost/sistemaLoginPhp');
    }
}