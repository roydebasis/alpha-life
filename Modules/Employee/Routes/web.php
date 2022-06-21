<?php

/*
*
* Backend Routes
*
* --------------------------------------------------------------------
*/
Route::group(['namespace' => '\Modules\Employee\Http\Controllers\Backend', 'as' => 'backend.', 'middleware' => ['web', 'auth', 'can:view_backend']], function () {
    /*
    * These routes need view-backend permission
    * (good if you want to allow more than one group in the backend,
    * then limit the backend features by different roles or permissions)
    *
    * Note: Administrator has all permissions so you do not have to specify the administrator role everywhere.
    */

    /*
     *
     *  Posts Routes
     *
     * ---------------------------------------------------------------------
     */
    $module_name = 'employees';
    $controller_name = 'EmployeeController';
    Route::get("$module_name/profile-info", ['as' => "$module_name.profile_info", 'uses' => "$controller_name@profile_info"]);
    Route::get("$module_name/performance_data", ['as' => "$module_name.performance_data", 'uses' => "$controller_name@performance_data"]);
    Route::get("$module_name/performance", ['as' => "$module_name.performance", 'uses' => "$controller_name@performance"]);
    Route::get("$module_name/allowance_data", ['as' => "$module_name.allowance_data", 'uses' => "$controller_name@allowance_data"]);
    Route::get("$module_name/allowance", ['as' => "$module_name.allowance", 'uses' => "$controller_name@allowance"]);
    Route::get("$module_name/top_performer_data", ['as' => "$module_name.top_performer_data", 'uses' => "$controller_name@top_performer_data"]);
    Route::get("$module_name/top-performer", ['as' => "$module_name.top_performer", 'uses' => "$controller_name@top_performer"]);
    Route::get("$module_name/policy_info_data", ['as' => "$module_name.policy_info_data", 'uses' => "$controller_name@policy_info_data"]);
    Route::get("$module_name/policy-info", ['as' => "$module_name.policy_info", 'uses' => "$controller_name@policy_info"]);
    Route::get("$module_name/policy_list_data", ['as' => "$module_name.policy_list_data", 'uses' => "$controller_name@policy_list_data"]);
    Route::get("$module_name/policy-list", ['as' => "$module_name.policy_list", 'uses' => "$controller_name@policy_list"]);
    Route::get("$module_name/premium_due_list_data", ['as' => "$module_name.premium_due_list_data", 'uses' => "$controller_name@premium_due_list_data"]);
    Route::get("$module_name/premium-due-list", ['as' => "$module_name.premium_due_list", 'uses' => "$controller_name@premium_due_list"]);
    Route::resource("$module_name", "$controller_name");

});
