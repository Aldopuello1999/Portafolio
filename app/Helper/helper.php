<?php

function SetAction($routeName){

    return  request()->routeIs($routeName) ? 'active' : '' ;

}
