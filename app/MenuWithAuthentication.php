<?php
/**
 * Created by PhpStorm.
 * User: sergi
 * Date: 14/12/15
 * Time: 18:18
 */

namespace MenuWithAuthentication;


use MenuWithAuthentication\Menu\Menuitem;

class MenuWithAuthentication
{

    /**
     * MenuWithAuthentication constructor.
     */
    public function __construct()
    {

    }
    public function menu()
    {
        $menu = new MenuItem();
        return $menu;

    }

}