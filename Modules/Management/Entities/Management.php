<?php

namespace Modules\Management\Entities;

use App\Models\BaseModel;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Modules\Article\Entities\Presenters\PostPresenter;
use Spatie\Activitylog\Traits\LogsActivity;

class Management extends BaseModel
{
    use HasFactory;
    use LogsActivity;
    use SoftDeletes;
    use PostPresenter;
    use Notifiable;

    protected $table = 'managements';

    protected static $logName = 'managements';
    protected static $logOnlyDirty = true;
    protected static $logAttributes = ['name', 'designation','category_id', 'category_name', 'meta_title', 'meta_keywords', 'meta_description', 'status', 'created_by_alias'];

    public function category()
    {
        return $this->belongsTo('Modules\Management\Entities\Category');
    }

    public function setCategoryIdAttribute($value)
    {
        $this->attributes['category_id'] = $value;

        try {
            $category = Category::findOrFail($value);
            $this->attributes['category_name'] = $category->name;
        } catch (\Exception $e) {
            $this->attributes['category_name'] = null;
        }
    }

    public function setCreatedByNameAttribute($value)
    {
        $this->attributes['created_by_name'] = trim(label_case($value));

        if (empty($value)) {
            $this->attributes['created_by_name'] = auth()->user()->name;
        }
    }

    /**
     * Set the 'meta title'.
     * If no value submitted use the 'Title'.
     *
     * @param [type]
     */
    public function setMetaTitleAttribute($value)
    {
        $this->attributes['meta_title'] = trim(ucwords($value));

        if (empty($value)) {
            $this->attributes['meta_title'] = trim(ucwords($this->attributes['name']));
        }
    }

    /**
     * Set the 'meta description'
     * If no value submitted use the default 'meta_description'.
     *
     * @param [type]
     */
    public function setMetaDescriptionAttribute($value)
    {
        $this->attributes['meta_description'] = $value;

        if (empty($value)) {
            $this->attributes['meta_description'] = setting('meta_description');
        }
    }

    protected static function newFactory()
    {
        return \Modules\Management\Database\Factories\ManagementFactory::new();
    }
}
