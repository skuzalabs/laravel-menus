<?php

return [

    'styles' => [
        'navbar' => \SkuzaLabs\Menus\Presenters\Bootstrap\NavbarPresenter::class,
        'navbar-right' => \SkuzaLabs\Menus\Presenters\Bootstrap\NavbarRightPresenter::class,
        'nav-pills' => \SkuzaLabs\Menus\Presenters\Bootstrap\NavPillsPresenter::class,
        'nav-tab' => \SkuzaLabs\Menus\Presenters\Bootstrap\NavTabPresenter::class,
        'sidebar' => \SkuzaLabs\Menus\Presenters\Bootstrap\SidebarMenuPresenter::class,
        'navmenu' => \SkuzaLabs\Menus\Presenters\Bootstrap\NavMenuPresenter::class,
        'adminlte' => \SkuzaLabs\Menus\Presenters\Admin\AdminltePresenter::class,
        'zurbmenu' => \SkuzaLabs\Menus\Presenters\Foundation\ZurbMenuPresenter::class,
    ],

    'ordering' => false,

];
