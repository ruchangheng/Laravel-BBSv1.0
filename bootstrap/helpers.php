<?php

/*
 * 当前路由转换为CSS类名
 * */
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}