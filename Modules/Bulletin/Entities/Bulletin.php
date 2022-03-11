<?php

namespace Modules\Bulletin\Entities;

use App\Models\BaseModel;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Modules\Article\Entities\Presenters\PostPresenter;
use Spatie\Activitylog\Traits\LogsActivity;

class Bulletin extends BaseModel
{
    use HasFactory;
    use LogsActivity;
    use SoftDeletes;
    use Notifiable;

    protected $table = 'bulletins';

    protected static $logName = 'bulletins';
    protected static $logOnlyDirty = true;
    protected static $logAttributes = ['name'];
}
