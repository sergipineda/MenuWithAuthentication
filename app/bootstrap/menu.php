<?php

//name/title
//url
//Icona
//Té submenus


//home
MenuWithAuthentication::menu()
    ->title('Home')
    ->icon('fa-dashboard')
    ->url('/home')
    ->rol('home')
    ->permission('home')
    ->user('sergi pineda');

//Another link

MenuWithAuthentication::menu()
    ->title('Another Link')
    ->user(5);

//Menu Multileve

MenuWithAuthentication::menu()->title('Multilevel')->icon('fa-credit-card');
  MenuWithAuthentication::menu()->title('Link in level 2')->icon('fa-briefcase');
  MenuWithAuthentication::menu()->title('Link in level 2')->icon('fa-user');

MenuWithAuthentication::menu()
    ->title('Últim menú')
    ->icon('fa-dashboard')
    ->url('http://www.google.es');

