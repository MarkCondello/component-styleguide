<?php

use Illuminate\Support\Facades\Route;

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

Route::view('/', 'welcome')->name('home');
Route::view('reference', 'demo-pages/styleguide-reference')->name('reference');

Route::group([
    'prefix' => 'layouts',
    'as' => 'layouts.'
    ], function(){
        Route::view('/list', 'demo-pages/list')->name('list');
}); 

Route::group([
    'as' => 'styleguide.'
], 
function(){
    Route::group([
        'prefix' => 'globals',
        'as' => 'globals.'
    ],
    function(){
        Route::view('/', 'styleguide/globals/index')->name('index');
        Route::view('/colours', 'styleguide/globals/colours')->name('colours');
        Route::view('/typography', 'styleguide/globals/typography')->name('typo');
    });
    Route::group([
        'prefix' => 'components',
        'as' => 'components.'
    ],
    function(){
        Route::view('/date-pickers', 'styleguide/components/date-pickers')->name('date-pickers'); // need to create npm package for this one
        Route::view('/modals', 'styleguide/components/modals')->name('modals');
        Route::view('/multi-selects', 'styleguide/components/multi-select')->name('multi-select');
        Route::view('/side-panels', 'styleguide/components/side-panels')->name('side-panels');
        Route::view('/tables', 'styleguide/components/tables')->name('tables');
    });
    Route::group([
        'prefix' => 'mixins',
        'as' => 'mixins.'
    ],
    function(){
        Route::view('/alerts', 'styleguide/mixins/alerts')->name('alerts'); 
        Route::view('/badges', 'styleguide/mixins/badges')->name('badges');
        Route::view('/buttons', 'styleguide/mixins/buttons')->name('buttons');
        Route::view('/cards', 'styleguide/mixins/cards')->name('cards');
        Route::view('/forms', 'styleguide/mixins/forms')->name('forms');
        Route::view('/checkboxes', 'styleguide/mixins/checkboxes')->name('checkboxes');
        Route::view('/checkbox-buttons', 'styleguide/mixins/checkbox-buttons')->name('checkbox-btns');
        Route::view('/checkbox-toggles', 'styleguide/mixins/checkbox-toggles')->name('checkbox-toggles');
        Route::view('/checkbox-button-groups', 'styleguide/mixins/checkbox-button-groups')->name('checkbox-btn-groups');
   
        Route::view('/navigation', 'styleguide/mixins/navigation')->name('navs');
        Route::view('/search-input', 'styleguide/mixins/search-inputs')->name('search-inputs');
        Route::view('/select-filters', 'styleguide/mixins/select-filters')->name('select-filters');
        Route::view('/tabs', 'styleguide/mixins/tabs')->name('tabs'); 
        Route::view('/tags', 'styleguide/mixins/tags')->name('tags');
        Route::view('/tiles', 'styleguide/mixins/tiles')->name('tiles');
    });

    Route::group([
        'prefix' => 'layouts',
        'as' => 'layouts.'
        ], function(){
            Route::view('/grids', 'styleguide/layouts/grids')->name('grids');
            Route::view('/flex', 'styleguide/layouts/flex')->name('flex');
            Route::view('/breakpoints', 'styleguide/layouts/breakpoints')->name('breakpoints');
    });
    Route::get('api/table-demo', function(){
        return (object) [
            "data" => [
                (object) [
                    "job_number" => "123",
                    "title"=> "This is the first",
                    "client"=> "Joe Bloggs",
                    "location"=> "Somewhere 123 Street",
                    "amount"=> "N/A",
                    "status"=> "Approved",
                    "links"=> (object)[
                        "show"=> (object)[
                        "link"=> "#",
                        "label"=> "View Job"
                        ]
                    ],
                    "actions"=> (object)[
                        "edit"=> (object)[
                            "link"=> "#",
                            "label"=> "Edit"
                        ],
                        "delete"=> (object)[
                            "link"=> "#",
                            "label"=> "Delete"
                        ]
                    ]
                ],
                (object) [
                    "job_number" => "234",
                    "title"=> "This is the Second",
                    "client"=> "Joe Doe",
                    "location"=> "Something 321 Street",
                    "amount"=> "33",
                    "status"=> "In Progress",
                    "links"=> (object)[
                        "show"=> (object)[
                        "link"=> "#",
                        "label"=> "View Job"
                        ]
                    ],
                    "actions"=> (object)[
                        "edit"=> (object)[
                            "link"=> "#",
                            "label"=> "Edit"
                        ],
                        "delete"=> (object)[
                            "link"=> "#",
                            "label"=> "Delete"
                        ]
                    ]
                ]
            ]
        ];
    })->name('api.table-demo');
});