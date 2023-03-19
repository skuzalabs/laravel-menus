<?php

namespace SkuzaLabs\Menus\Presenters;

use SkuzaLabs\Menus\MenuItem;

interface PresenterInterface
{
    /**
     * Get open tag wrapper.
     *
     * @return string
     */
    public function getOpenTagWrapper();

    /**
     * Get close tag wrapper.
     *
     * @return string
     */
    public function getCloseTagWrapper();

    /**
     * Get menu tag without dropdown wrapper.
     *
     * @param \SkuzaLabs\Menus\MenuItem $item
     *
     * @return string
     */
    public function getMenuWithoutDropdownWrapper(MenuItem $item);

    /**
     * Get divider tag wrapper.
     *
     * @return string
     */
    public function getDividerWrapper();

    /**
     * Get divider tag wrapper.
     *
     * @param \SkuzaLabs\Menus\MenuItem $item
     *
     * @return mixed
     */
    public function getHeaderWrapper(MenuItem $item);

    /**
     * Get menu tag with dropdown wrapper.
     *
     * @param \SkuzaLabs\Menus\MenuItem $item
     *
     * @return string
     */
    public function getMenuWithDropDownWrapper(MenuItem $item);

    /**
     * Get child menu items.
     *
     * @param \SkuzaLabs\Menus\MenuItem $item
     *
     * @return string
     */
    public function getChildMenuItems(MenuItem $item);
}
