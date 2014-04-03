<?php

Route::get('/home', 'HomeController@getIndex');

Route::controller('/create', 'CreateController');

Route::controller('/explore', 'ExploreController');

Route::controller('/', 'HomeController');

?>