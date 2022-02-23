<?php

namespace Modules\Quote\Entities;

use App\Models\BaseModel;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Modules\Article\Entities\Presenters\PostPresenter;
use Spatie\Activitylog\Traits\LogsActivity;

class Quote extends BaseModel
{
    use HasFactory;
    use LogsActivity;
    use SoftDeletes;
    use PostPresenter;
    use Notifiable;

    protected $table = 'quotes';

    protected static $logName = 'quotes';
    protected static $logOnlyDirty = true;
    protected static $logAttributes = ['title', 'description', 'image', 'url', 'created_at', 'updated_at'];


    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\Media\Database\Factories\MediaFactory::new();
    }
}