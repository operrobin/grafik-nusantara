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


use Illuminate\Support\Facades\Route;

Route::get('/', 'PageController@index');
Route::get('/koleksi', 'PageController@koleksi')->name('koleksi');
Route::get('/koleksi/{id}', 'PageController@koleksiDetail')->name('koleksiDetail');
Route::get('/jurnal', 'PageController@jurnal')->name('jurnal');
Route::get('/jurnal/{id}', 'PageController@jurnalDetail')->name('jurnalDetail');
Route::get('/data', 'PageController@data')->name('data');
Route::get('/tentang', 'PageController@tentang')->name('tentang');
Route::get('/submit', 'PageController@submit')->name('submit');
Route::post('/submit', 'PageController@sendSubmit')->name('sendSubmit');


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('admin-users')->name('admin-users/')->group(static function() {
            Route::get('/',                                             'AdminUsersController@index')->name('index');
            Route::get('/create',                                       'AdminUsersController@create')->name('create');
            Route::post('/',                                            'AdminUsersController@store')->name('store');
            Route::get('/{adminUser}/impersonal-login',                 'AdminUsersController@impersonalLogin')->name('impersonal-login');
            Route::get('/{adminUser}/edit',                             'AdminUsersController@edit')->name('edit');
            Route::post('/{adminUser}',                                 'AdminUsersController@update')->name('update');
            Route::delete('/{adminUser}',                               'AdminUsersController@destroy')->name('destroy');
            Route::get('/{adminUser}/resend-activation',                'AdminUsersController@resendActivationEmail')->name('resendActivationEmail');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::get('/profile',                                      'ProfileController@editProfile')->name('edit-profile');
        Route::post('/profile',                                     'ProfileController@updateProfile')->name('update-profile');
        Route::get('/password',                                     'ProfileController@editPassword')->name('edit-password');
        Route::post('/password',                                    'ProfileController@updatePassword')->name('update-password');
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('collection-types')->name('collection-types/')->group(static function() {
            Route::get('/',                                             'CollectionTypesController@index')->name('index');
            Route::get('/create',                                       'CollectionTypesController@create')->name('create');
            Route::post('/',                                            'CollectionTypesController@store')->name('store');
            Route::get('/{collectionType}/edit',                        'CollectionTypesController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'CollectionTypesController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{collectionType}',                            'CollectionTypesController@update')->name('update');
            Route::delete('/{collectionType}',                          'CollectionTypesController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('collection-categories')->name('collection-categories/')->group(static function() {
            Route::get('/',                                             'CollectionCategoriesController@index')->name('index');
            Route::get('/create',                                       'CollectionCategoriesController@create')->name('create');
            Route::post('/',                                            'CollectionCategoriesController@store')->name('store');
            Route::get('/{collectionCategory}/edit',                    'CollectionCategoriesController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'CollectionCategoriesController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{collectionCategory}',                        'CollectionCategoriesController@update')->name('update');
            Route::delete('/{collectionCategory}',                      'CollectionCategoriesController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('collections')->name('collections/')->group(static function() {
            Route::get('/',                                             'CollectionsController@index')->name('index');
            Route::get('/create',                                       'CollectionsController@create')->name('create');
            Route::post('/',                                            'CollectionsController@store')->name('store');
            Route::get('/{collection}/edit',                            'CollectionsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'CollectionsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{collection}',                                'CollectionsController@update')->name('update');
            Route::delete('/{collection}',                              'CollectionsController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('journals')->name('journals/')->group(static function() {
            Route::get('/',                                             'JournalsController@index')->name('index');
            Route::get('/create',                                       'JournalsController@create')->name('create');
            Route::post('/',                                            'JournalsController@store')->name('store');
            Route::get('/{journal}/edit',                               'JournalsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'JournalsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{journal}',                                   'JournalsController@update')->name('update');
            Route::delete('/{journal}',                                 'JournalsController@destroy')->name('destroy');
        });
    });
});


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('configs')->name('configs/')->group(static function() {
            Route::get('/',                                             'ConfigsController@index')->name('index');
            Route::get('/create',                                       'ConfigsController@create')->name('create');
            Route::post('/',                                            'ConfigsController@store')->name('store');
            Route::get('/{config}/edit',                                'ConfigsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'ConfigsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{config}',                                    'ConfigsController@update')->name('update');
            Route::delete('/{config}',                                  'ConfigsController@destroy')->name('destroy');
        });
    });
});


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('email-configs')->name('email-configs/')->group(static function() {
            Route::get('/',                                             'EmailConfigsController@index')->name('index');
            Route::get('/create',                                       'EmailConfigsController@create')->name('create');
            Route::post('/',                                            'EmailConfigsController@store')->name('store');
            Route::get('/{emailConfig}/edit',                           'EmailConfigsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'EmailConfigsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{emailConfig}',                               'EmailConfigsController@update')->name('update');
            Route::delete('/{emailConfig}',                             'EmailConfigsController@destroy')->name('destroy');
        });
    });
});
