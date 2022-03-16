<?php

namespace Modules\Home\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Modules\Home\Http\Requests\Backend\AboutRequest;

class AboutController extends Controller
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'About';

        // module name
        $this->module_name = 'about';

        // directory path of the module
        $this->module_path = 'about';

        // module icon
        $this->module_icon = 'fas fa-file-alt';

        // module model name, path
        $this->module_model = "Modules\Home\Entities\About";
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Edit';

        $$module_name_singular = $module_model::first();



        return view(
            "home::backend.$module_name.edit",
            compact( 'module_title', 'module_name', 'module_icon', 'module_name_singular', 'module_action', "$module_name_singular")
        );
    }

    

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int     $id
     *
     * @return Response
     */
    public function update(AboutRequest $request, $id)
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_model = $this->module_model;
        $module_icon = $this->module_icon;

        $module_name_singular = Str::singular($module_name);

        $module_action = 'Update';


        if($id != "100") {
            $$module_name_singular = $module_model::find($id);

            $$module_name_singular->update($request->all());
        }
        else {
            $$module_name_singular = $module_model::create($request->all());
        }



        Flash::success("<i class='fas fa-check'></i> '".Str::singular($module_title)."' Updated Successfully")->important();


        return view(
            "home::backend.$module_name.edit",
            compact( 'module_title', 'module_name', 'module_icon', 'module_name_singular', 'module_action', "$module_name_singular")
        );
    }
}
