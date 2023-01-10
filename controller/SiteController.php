<?php

namespace controller;


use model\User;

class SiteController
{
    public function handle()
    {
        switch ($_SERVER["REQUEST_METHOD"]) {
            case "GET":
                $this->handleGet();
                break;
            case "POST":
                $this->handlePost();
                break;
        }
    }

    private function handleGet()
    {

        $content = '';
        switch ($_GET["path"]) {
            case 'users':
                $userModel = new User();
                $data = $userModel->getList();
                $properties = $userModel->properties;
                $content = $this->render(dirname(__FILE__) . '/../view/users.php', [$data, $properties]);
                break;
            case 'advertisements':
                $content = include dirname(__FILE__) . '/../view/advertisements.php';
                break;
        }

        echo $this->render(dirname(__FILE__) . '/../view/page.php', [$content]);

    }

    private function handlePost()
    {

    }

    function render($path, array $args = []): string
    {
        extract($args);

        ob_start();
        include ($path);
        $var=ob_get_contents();
        ob_end_clean();
        if (!$var) return ''; else return $var;
    }

}
