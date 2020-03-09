<?php

Route::get('/', 'pagesController@index')->name('pages.home');
Route::get('/career', 'pagesController@career')->name('pages.career');
Route::get('/courses', 'pagesController@courses')->name('pages.courses');
Route::get('/admission', 'pagesController@admission')->name('pages.admission');
Route::get('/blog', 'pagesController@blog')->name('pages.blog');
Route::get('/demo', 'pagesController@demo')->name('pages.demo');
Route::get('/blog/show', 'pagesController@blogShow')->name('pages.blogShow');
