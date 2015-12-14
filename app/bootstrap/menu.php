<?php

//name/title
//url
//Icona
//Té submenus



//home
use MenuWithAuthentication\MenuWithAuthentication;

MenuWithAuthentication::menu('home')
    ->title('Home')
    ->icon('fa-dashboard')
    ->url('/home')
    ->role('home')
    ->permission('home')
    ->user('sergipineda@iesebre.com');

//Another link

MenuWithAuthentication::menu('anotherlink')
    ->title('Another Link')
    ->user(5);

//Menu Multileve

MenuWithAuthentication::menu('multi')->title('Multilevel')->icon('fa-credit-card');
  MenuWithAuthentication::menu('link2')->title('Link in level 2')->icon('fa-briefcase');
  MenuWithAuthentication::menu('link3')->title('Link in level 2')->icon('fa-user');

MenuWithAuthentication::menu('link')
    ->title('Últim menú')
    ->icon('fa-dashboard')
    ->url('http://www.google.es');

//$menuHome = MenuWithAuthentication\::menu('home');