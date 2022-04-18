<?php

namespace Modules\Management\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Modules\Article\Events\PostViewed;

class ManagementsController extends Controller
{
    public function __construct()
    {
        // Page Title
        $this->module_title = 'Managements';

        // module name
        $this->module_name = 'managements';

        // directory path of the module
        $this->module_path = 'managements';

        // module icon
        $this->module_icon = 'fas fa-file-alt';

        // module model name, path
        $this->module_model = "Modules\Management\Entities\Management";
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
        $module_model = "Modules\Management\Entities\Management";
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Show';

        $meta_page_type = 'management';

        $$module_name_singular = $module_model::findOrFail($id);

        // event(new PostViewed($$module_name_singular));

        return view(
            "management::frontend.$module_name.show",
            compact('module_title', 'module_name', 'module_icon', 'module_action', 'module_name_singular', "$module_name_singular", 'meta_page_type')
        );
    }
}
