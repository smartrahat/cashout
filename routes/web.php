<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

/** Dashboard Routes */
Route::get('/','DashboardController@index');
Route::get('dashboard2','DashboardController@index2');

/** Layout Routes */
Route::get('layout/top-nav','LayoutController@topNav');
Route::get('layout/boxed','LayoutController@boxed');
Route::get('layout/fixed','LayoutController@fixed');
Route::get('layout/sidebar-collapse','LayoutController@sidebarCollapse');

/** Widget Routes */
Route::get('widgets','WidgetController@index');

/** Chart Routes */
Route::get('chart/chartjs','ChartController@chartjs');
Route::get('chart/morris','ChartController@morris');
Route::get('chart/flot','ChartController@flot');
Route::get('chart/inline-chart','ChartController@inlineChart');

/** UI Element Routes */
Route::get('ui/general','UIElementsController@general');
Route::get('ui/icons','UIElementsController@icons');
Route::get('ui/buttons','UIElementsController@buttons');
Route::get('ui/sliders','UIElementsController@sliders');
Route::get('ui/timeline','UIElementsController@timeline');
Route::get('ui/modals','UIElementsController@modals');

/** Form Routes */
Route::get('form/general','FormController@general');
Route::post('form/general','FormController@general');
Route::get('form/advance','FormController@advance');
Route::get('form/editor','FormController@editor');

/** Table Routes */
Route::get('table/simple','TableController@simple');
Route::get('table/data','TableController@data');

/** Calendar Routes */
Route::get('calendar','CalendarController@index');

/** Mail Box Routes */
Route::get('mail/inbox','MailBoxController@inbox');
Route::get('mail/compose','MailBoxController@compose');
Route::get('mail/read','MailBoxController@read');

/** Example Pages Routes */
Route::get('example/invoice','ExamplesController@invoice');
Route::get('example/profile','ExamplesController@profile');
Route::get('example/login','ExamplesController@login');
Route::get('example/register','ExamplesController@register');
Route::get('example/reset','ExamplesController@reset');
Route::get('example/lockscreen','ExamplesController@lockscreen');
Route::get('example/404','ExamplesController@error404');
Route::get('example/500','ExamplesController@error500');
Route::get('example/blank','ExamplesController@blank');
Route::get('example/pace','ExamplesController@pace');
Route::get('example/invoice-print','ExamplesController@invoicePrint');