<?php
namespace MenuWithAuthentication\Menu;

/**
 * Created by PhpStorm.
 * User: sergi
 * Date: 14/12/15
 * Time: 17:45
 */
class Menuitem
{
    /**
     * @var
     */
    protected $title;
    /**
     * @var
     */
    protected $url;
    /**
     * @var
     */
    protected $role;
    /**
     * @var
     */
    protected $icon;
    /**
     * @var
     */
    protected $user;
    /**
     * @var
     */
    protected $permission;


    /**
     * Menuitem constructor.
     */
    public function __construct()
    {

    }

    /**
     * @param null $title
     * @return $this
     */
    public function title($title=null)
    {
        if ($title==null){
            return $this->title;
        }
        $this->title = $title;
        return $this;
    }

    /**
     * @param null $icon
     * @return $this
     */
    public function icon($icon=null)
    {
        if ($icon==null){
            return $this->icon;
        }
        $this->icon = $icon;
        return $this;
    }

    /**
     * @param null $url
     * @return $this
     */
    public function url($url=null)
    {
        if ($url==null){
            return $this->url;
        }
        $this->url = $url;
        return $this;
    }

    /**
     * @param null $role
     * @return $this
     */
    public function role($role=null)
    {
        if ($role==null){
            return $this->role;
        }
        $this->role = $role;
        return $this;
    }

    /**
     * @param null $permission
     * @return $this
     */
    public function permission($permission=null)
    {
        if ($permission==null){
            return $this->permission;
        }
        $this->permission = $permission;
        return $this;
    }

    /**
     * @param null $user
     * @return $this
     */
    public function user($user=null)
    {
        if ($user==null){
            return $this->user;
        }
        $this->user = $user;
        return $this;
    }

    function __toString()
    {
        return $this->render();
    }

    private function render()
    {
        $data = array();
        $data['url'] = $this->url;
        $data['icon'] = $this->icon;
        $data['permission'] = $this->permission;
//        $data['role'] = $this->role;
//        $data['user'] = $this->user;
//        $data['title'] = $this->title;
        return (String) view('menu.menuitem',$data);
    }

}