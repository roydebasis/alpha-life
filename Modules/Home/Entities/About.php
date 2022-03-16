<?php

namespace Modules\Home\Entities;

use App\Models\BaseModel;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Modules\Article\Entities\Presenters\PostPresenter;
use Spatie\Activitylog\Traits\LogsActivity;

class About extends BaseModel
{
    use HasFactory;
    use LogsActivity;
    use SoftDeletes;
    use Notifiable;

    protected $table = 'about_alpha';

    protected static $logName = 'about_alpha';
    protected static $logOnlyDirty = true;
    protected static $logAttributes = ['title', 'image', 'description'];
}
