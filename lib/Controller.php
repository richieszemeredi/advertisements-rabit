<?php

namespace lib;

/**
 * Handles requests and rendering pages.
 */
class Controller
{
    /**
     * Handles incoming requests.
     *
     * TODO: Implement other type of requests.
     *
     * @return void
     */
    public function handle(): void
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $this->handleGet();
        }
    }

    /**
     * Handles GET requests.
     * Calls the corresponding controller's index method.
     *
     * TODO: Implement subpaths.
     *
     * @return void
     */
    private function handleGet(): void
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

    /**
     * Renders the base site of the path.
     *
     * @return string
     */
    public function index(): string
    {
        return $this->render(dirname(__FILE__) . '/../view/index.php');
    }

    /**
     * Renders the 404 page.
     *
     * @return string
     */
    private function notFound(): string
    {
        return $this->render(dirname(__FILE__) . '/../view/404.php');
    }

    /**
     * Renders a page into a variable based on a path, and embeds given variables to be accessed on the rendered page.
     *
     * @param string $path
     * @param array $args
     * @return string
     */
    public function render(string $path, array $args = []): string
    {
        extract($args);
        ob_start();
        include($path);
        $view = ob_get_contents();
        ob_end_clean();
        if ($view) {
            return $view;
        } else {
            return '';
        }
    }
}
