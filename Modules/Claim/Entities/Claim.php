<?php

namespace Modules\Claim\Entities;

use App\Models\BaseModel;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Modules\Article\Entities\Presenters\PostPresenter;
use Modules\Media\Entities\Photo;
use Spatie\Activitylog\Traits\LogsActivity;

class Claim extends BaseModel
{
    use HasFactory;
    use LogsActivity;
    use SoftDeletes;
    use PostPresenter;
    use Notifiable;

    protected $table = 'claims';

    protected static $logName = 'claims';
    protected static $logOnlyDirty = true;
    protected static $logAttributes = ['date', 'description', 'check_image'];

    public function photos()
    {
        return $this->belongsToMany(Photo::class);
    }
}
