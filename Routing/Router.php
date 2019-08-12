<?php

namespace Route;

use Route\Route;

Route::get('/', 'index');
Route::get('/keys', 'keys');
Route::get('/show', 'show');
Route::get('/edit', 'edit');
Route::get('/delete', 'delete');
Route::post('/insert', 'insert');
Route::get('/editForm', 'editForm');
Route::get('/searchForm', 'searchForm');
Route::get('/insertForm', 'insertForm');
Route::get('/select_server', 'select_server');
Route::get('/server_remove', 'server_remove');
Route::post('/searchResualt', 'searchResualt');
Route::get('/server_register', 'server_register');
Route::post('/save_new_server', 'save_new_server');