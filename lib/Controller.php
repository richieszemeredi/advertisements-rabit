<?php

namespace lib;

class Controller
{
    public function handle()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $this->handleGet();
        }
    }

    private function handleGet()
    {
        $content = '';

        if (key_exists("path", $_GET)) {
            $controller = (dirname(__FILE__) . '/../controller/' . ucfirst($_GET["path"]) . 'Controller.php');

            if (file_exists($controller)) {
                include_once $controller;
                $controller = 'controller\\' . ucfirst($_GET["path"]) . 'Controller';
                $controllerClass = new $controller;

                $content = $controllerClass->index();
            } else {
                $content = $this->notFound();
            }
        } else {
            $content = $this->index();
        }

        echo $this->render(dirname(__FILE__) . '/../view/page.php', ['content' => $content]);
    }

    public function index(): string
    {
        return $this->render(dirname(__FILE__) . '/../view/index.php');
    }

    private function notFound(): string
    {
        return $this->render(dirname(__FILE__) . '/../view/404.php');
    }

    public function render($path, array $args = []): string
    {
        extract($args);
        ob_start();
        include($path);
        $view = ob_get_contents();
        ob_end_clean();
        if ($view) {
            return $view;
        } else {
            throw new \Exception('View file not found!');
        }
    }

}
