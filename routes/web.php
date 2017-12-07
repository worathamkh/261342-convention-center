<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/version', function () use ($router) {
    return $router->app->version();
});

$router->get('/', 'IndexController@index');

$router->get('/room', 'RoomController@index');
$router->post('/room', 'RoomController@store');

$router->get('/zone', 'ZoneController@index');
$router->post('/zone', 'ZoneController@store');

$router->get('/seat', 'SeatController@index');
$router->post('/seat', 'SeatController@store');

$router->get('/convention', 'ConventionController@index');
$router->post('/convention', 'ConventionController@store');

// $router->get('/registered', 'RegisteredController@index');
// $router->post('/registered', 'RegisteredController@store');

$router->get('/host', 'HostController@index');
$router->post('/host', 'HostController@store');

$router->get('/attendee', 'AttendeeController@index');
$router->post('/attendee', 'AttendeeController@store');

$router->get('/hosting', 'HostingController@index');
$router->post('/hosting', 'HostingController@store');

$router->get('/expecting', 'ExpectingController@index');
$router->post('/expecting', 'ExpectingController@store');

$router->get('/following', 'FollowingController@index');
$router->post('/following', 'FollowingController@store');

$router->get('/attendance', 'AttendanceController@index');
$router->post('/attendance', 'AttendanceController@store');

$router->get('/roomtype', 'RoomTypeController@index');

// $router->get('/posts', 'PostController@index');
// $router->get('/posts/{id}', 'PostController@post');
//
// $router->get('registered', [
//     'as' => 'registered.index', 'uses' => 'RegisteredController@index'
// ]);
