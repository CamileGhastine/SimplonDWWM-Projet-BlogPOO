<?php

class Controller
{
    protected function render(string $view, array $datas): void
    {
        extract($datas);

        ob_start();
        require dirname(__DIR__) .  '/view/' . $view . '.php';
        $content = ob_get_clean();

        require dirname(__DIR__) . '/view/base.php';
    }
}
