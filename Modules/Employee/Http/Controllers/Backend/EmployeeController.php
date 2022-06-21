<?php

namespace Modules\Employee\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

class EmployeeController extends Controller
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Employees';

        // module name
        $this->module_name = 'employees';

        // directory path of the module
        $this->module_path = 'employees';

        // module icon
        $this->module_icon = 'fas fa-file-alt';

        // module model name, path
        $this->module_model = "Modules\Employee\Entities\Employee";
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function profile_info()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $$module_name = array("name" => "Tushar", "father_name" => "Based Ali", "dob" => "07.09.1997", "designation" => "Software Engineer", "mother_name" => "Rezina Begum", "contact" => "01770353601", "address" => "Notun Bazar");

        return view(
            "employee::backend.$module_path.profile_info",
            compact('module_title', 'module_name', "$module_name", 'module_icon', 'module_name_singular')
        );
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function performance()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'List';

        $$module_name = array(array("id" => 1, "name" => "Tushar", "father_name" => "Based Ali", "dob" => "07.09.1997", "designation" => "Software Engineer", "mother_name" => "Rezina Begum", "contact" => "01770353601", "address" => "Notun Bazar"));


        return view(
            "employee::backend.$module_path.performance_datatable",
            compact('module_title', 'module_name', "$module_name", 'module_icon', 'module_name_singular', 'module_action')
        );
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function performance_data()
    {
        $module_name = $this->module_name;
        $module_model = $this->module_model;

        $$module_name = $module_model::select('id', 'name');


        return DataTables::of($$module_name)
            ->addColumn('action', function ($data) {
                $module_name = $this->module_name;

                return view('backend.includes.action_column', compact('module_name', 'data'));
            })
            ->editColumn('name', function ($data) {
                $is_featured = ($data->is_featured) ? '<span class="badge badge-primary">Featured</span>' : '';

                return $data->name . ' ' . $data->status_formatted . ' ' . $is_featured;
            })
            ->editColumn('created_at', function ($data) {
                return $data->updated_at->isoFormat('LLLL');
            })
            ->rawColumns(['name', 'action'])
            ->orderColumns(['id'], '-:column $1')
            ->make(true);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function allowance()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'List';

        $$module_name = array(array("id" => 1, "name" => "Tushar", "father_name" => "Based Ali", "dob" => "07.09.1997", "designation" => "Software Engineer", "mother_name" => "Rezina Begum", "contact" => "01770353601", "address" => "Notun Bazar"));


        return view(
            "employee::backend.$module_path.allowance_datatable",
            compact('module_title', 'module_name', "$module_name", 'module_icon', 'module_name_singular', 'module_action')
        );
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function allowance_data()
    {
        $module_name = $this->module_name;
        $module_model = $this->module_model;

        $$module_name = $module_model::select('id', 'name');


        return DataTables::of($$module_name)
            ->addColumn('action', function ($data) {
                $module_name = $this->module_name;

                return view('backend.includes.action_column', compact('module_name', 'data'));
            })
            ->editColumn('name', function ($data) {
                $is_featured = ($data->is_featured) ? '<span class="badge badge-primary">Featured</span>' : '';

                return $data->name . ' ' . $data->status_formatted . ' ' . $is_featured;
            })
            ->editColumn('created_at', function ($data) {
                return $data->updated_at->isoFormat('LLLL');
            })
            ->rawColumns(['name', 'action'])
            ->orderColumns(['id'], '-:column $1')
            ->make(true);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function top_performer()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'List';

        $$module_name = array(array("id" => 1, "name" => "Tushar", "father_name" => "Based Ali", "dob" => "07.09.1997", "designation" => "Software Engineer", "mother_name" => "Rezina Begum", "contact" => "01770353601", "address" => "Notun Bazar"));


        return view(
            "employee::backend.$module_path.top_performer_datatable",
            compact('module_title', 'module_name', "$module_name", 'module_icon', 'module_name_singular', 'module_action')
        );
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function top_performer_data()
    {
        $module_name = $this->module_name;
        $module_model = $this->module_model;

        $$module_name = $module_model::select('id', 'name');


        return DataTables::of($$module_name)
            ->addColumn('action', function ($data) {
                $module_name = $this->module_name;

                return view('backend.includes.action_column', compact('module_name', 'data'));
            })
            ->editColumn('name', function ($data) {
                $is_featured = ($data->is_featured) ? '<span class="badge badge-primary">Featured</span>' : '';

                return $data->name . ' ' . $data->status_formatted . ' ' . $is_featured;
            })
            ->editColumn('created_at', function ($data) {
                return $data->updated_at->isoFormat('LLLL');
            })
            ->rawColumns(['name', 'action'])
            ->orderColumns(['id'], '-:column $1')
            ->make(true);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function policy_info()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'List';

        $$module_name = array(array("id" => 1, "name" => "Tushar", "father_name" => "Based Ali", "dob" => "07.09.1997", "designation" => "Software Engineer", "mother_name" => "Rezina Begum", "contact" => "01770353601", "address" => "Notun Bazar"));


        return view(
            "employee::backend.$module_path.policy_info_datatable",
            compact('module_title', 'module_name', "$module_name", 'module_icon', 'module_name_singular', 'module_action')
        );
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function policy_info_data()
    {
        $module_name = $this->module_name;
        $module_model = $this->module_model;

        $$module_name = $module_model::select('id', 'name');


        return DataTables::of($$module_name)
            ->addColumn('action', function ($data) {
                $module_name = $this->module_name;

                return view('backend.includes.action_column', compact('module_name', 'data'));
            })
            ->editColumn('name', function ($data) {
                $is_featured = ($data->is_featured) ? '<span class="badge badge-primary">Featured</span>' : '';

                return $data->name . ' ' . $data->status_formatted . ' ' . $is_featured;
            })
            ->editColumn('created_at', function ($data) {
                return $data->updated_at->isoFormat('LLLL');
            })
            ->rawColumns(['name', 'action'])
            ->orderColumns(['id'], '-:column $1')
            ->make(true);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function policy_list()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'List';

        $$module_name = array(array("id" => 1, "name" => "Tushar", "father_name" => "Based Ali", "dob" => "07.09.1997", "designation" => "Software Engineer", "mother_name" => "Rezina Begum", "contact" => "01770353601", "address" => "Notun Bazar"));


        return view(
            "employee::backend.$module_path.policy_list_datatable",
            compact('module_title', 'module_name', "$module_name", 'module_icon', 'module_name_singular', 'module_action')
        );
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function policy_list_data()
    {
        $module_name = $this->module_name;
        $module_model = $this->module_model;

        $$module_name = $module_model::select('id', 'name');


        return DataTables::of($$module_name)
            ->addColumn('action', function ($data) {
                $module_name = $this->module_name;

                return view('backend.includes.action_column', compact('module_name', 'data'));
            })
            ->editColumn('name', function ($data) {
                $is_featured = ($data->is_featured) ? '<span class="badge badge-primary">Featured</span>' : '';

                return $data->name . ' ' . $data->status_formatted . ' ' . $is_featured;
            })
            ->editColumn('created_at', function ($data) {
                return $data->updated_at->isoFormat('LLLL');
            })
            ->rawColumns(['name', 'action'])
            ->orderColumns(['id'], '-:column $1')
            ->make(true);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function premium_due_list()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'List';

        $$module_name = array(array("id" => 1, "name" => "Tushar", "father_name" => "Based Ali", "dob" => "07.09.1997", "designation" => "Software Engineer", "mother_name" => "Rezina Begum", "contact" => "01770353601", "address" => "Notun Bazar"));


        return view(
            "employee::backend.$module_path.premium_due_list_datatable",
            compact('module_title', 'module_name', "$module_name", 'module_icon', 'module_name_singular', 'module_action')
        );
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function premium_due_list_data()
    {
        $module_name = $this->module_name;
        $module_model = $this->module_model;

        $$module_name = $module_model::select('id', 'name');


        return DataTables::of($$module_name)
            ->addColumn('action', function ($data) {
                $module_name = $this->module_name;

                return view('backend.includes.action_column', compact('module_name', 'data'));
            })
            ->editColumn('name', function ($data) {
                $is_featured = ($data->is_featured) ? '<span class="badge badge-primary">Featured</span>' : '';

                return $data->name . ' ' . $data->status_formatted . ' ' . $is_featured;
            })
            ->editColumn('created_at', function ($data) {
                return $data->updated_at->isoFormat('LLLL');
            })
            ->rawColumns(['name', 'action'])
            ->orderColumns(['id'], '-:column $1')
            ->make(true);
    }
}
