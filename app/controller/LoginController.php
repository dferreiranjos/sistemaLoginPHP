<?php

class LoginController
{
    public function index()
    {

        // user references
        // https://packagist.org
        // https://twig.symfony.com/doc/3.x/api.html

        $loader = new \Twig\Loader\FilesystemLoader('app/view');
        $twig = new \Twig\Environment($loader, [
            'cache' => '/path/to/compilation_cache',
            'auto_reload'=>true,
        ]);
        $template = $twig->load('login.html');

        return $template->render();
    }

    public function check()
    {

        try {
            $user = new User;
            $user->setEmail($_POST['email']);
            $user->setPassword($_POST['password']);
            $user->validateLogin();
            header('Location: http://localhost/sistemaLoginPhp/dashboard');
        } catch (\Exception $e) {
            header('Location: http://localhost/sistemaLoginPhp/');
        }

        
    }


}