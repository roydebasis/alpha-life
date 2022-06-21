<?php

namespace Modules\Management\Http\Controllers\Frontend;

use App\Authorizable;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Modules\Management\Http\Requests\Backend\CategoriesRequest;
use Yajra\DataTables\DataTables;

class GroupsController extends Controller
{

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Groups';

        // module name
        $this->module_name = 'groups';

        // directory path of the module
        $this->module_path = 'groups';

        // module icon
        $this->module_icon = 'fas fa-sitemap';

        // module model name, path
        $this->module_model = "Modules\Management\Entities\Group";
    }


    /**
     * Display the specified resource.
     *
     * @param string $slug
     *
     * @return Response
     */
    public function show($slug)
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Show';

        $$module_name_singular = $module_model::where('slug', $slug)->first();

        $first_member = $$module_name_singular->managements()->where('status', 1)->orderBy('order')->first();

        $members = [];
        
        if ($first_member) {
            $members = array_chunk($$module_name_singular->managements()->where('id', '!=', $first_member->id)->where('status', 1)->orderBy('order')->paginate(50)->toArray()['data'], 2);
        }


        return view(
            "management::frontend.$module_name.show",
            compact('module_title', 'module_name', 'module_icon', 'module_name_singular', 'module_action', "$module_name_singular", 'members', 'first_member')
        );
    }

}
