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
     * @var null
     */
    protected static $instance =  null;

    /**
     * @var MenuItem[]
     */
    protected $menu;

    /**
     * MenuWithAuthentication constructor.
     */
//    public function __construct()
//    {
//
//    }


    /**
     * @param $id
     * @return Menuitem
     */
    public static function menu($id)
    {
        return new MenuItem($id);


    }

    /**
     * @return null|static
     */
    public static function instance ($id){


        if (is_null (static::$instance)){
            return static::$instance = new static($id);
        }
        return static::$instance;
    }

    /**
     * @return mixed
     */
    public function getMenu()
    {
        return $this->menu->items;
    }

}