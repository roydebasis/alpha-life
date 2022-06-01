<?php

namespace Modules\Claim\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class ClaimController extends Controller
{
    public function __construct()
    {
        // Page Title
        $this->module_title = 'Claim';

        // module name
        $this->module_name = 'claim';

        // directory path of the module
        $this->module_path = 'claim';

        // module icon
        $this->module_icon = 'fas fa-file-alt';

        // module model name, path
        $this->module_model = "Modules\Claim\Entities\Claim";
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {

        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = "Modules\Claim\Entities\Claim";
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Show';

        $meta_page_type = 'claim';

        $$module_name_singular = $module_model::findOrFail($id);

        // event(new PostViewed($$module_name_singular));

        return view(
            "claim::frontend.$module_name.show",
            compact('module_title', 'module_name', 'module_icon', 'module_action', 'module_name_singular', "$module_name_singular", 'meta_page_type')
        );
    }
}
