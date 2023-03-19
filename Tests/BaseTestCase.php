<?php

namespace SkuzaLabs\Menus\Tests;

use Collective\Html\HtmlServiceProvider;
use SkuzaLabs\Menus\MenusServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

abstract class BaseTestCase extends OrchestraTestCase
{
    public function setUp() : void
    {
        parent::setUp();

        // $this->setUpDatabase();
    }

    protected function getPackageProviders($app)
    {
        return [
            HtmlServiceProvider::class,
            MenusServiceProvider::class,
        ];
    }

    /**
     * Set up the environment.
     *
     * @param \Illuminate\Foundation\Application $app
     */
    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('menus', [
            'styles' => [
                'navbar' => \SkuzaLabs\Menus\Presenters\Bootstrap\NavbarPresenter::class,
                'navbar-right' => \SkuzaLabs\Menus\Presenters\Bootstrap\NavbarRightPresenter::class,
                'nav-pills' => \SkuzaLabs\Menus\Presenters\Bootstrap\NavPillsPresenter::class,
                'nav-tab' => \SkuzaLabs\Menus\Presenters\Bootstrap\NavTabPresenter::class,
                'sidebar' => \SkuzaLabs\Menus\Presenters\Bootstrap\SidebarMenuPresenter::class,
                'navmenu' => \SkuzaLabs\Menus\Presenters\Bootstrap\NavMenuPresenter::class,
            ],

            'ordering' => false,
        ]);
    }
}
