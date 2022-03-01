<?php

namespace Modules\Media\Entities;

use App\Models\BaseModel;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Modules\Article\Entities\Presenters\PostPresenter;
use Modules\Media\Entities\Photo;
use Spatie\Activitylog\Traits\LogsActivity;

class Album extends BaseModel
{
    use HasFactory;
    use LogsActivity;
    use SoftDeletes;
    use PostPresenter;
    use Notifiable;

    protected $table = 'albums';

    protected static $logName = 'albums';
    protected static $logOnlyDirty = true;
    protected static $logAttributes = ['title', 'date', 'place'];


    public function photos()
    {
        return $this->belongsToMany(Photo::class);
    }



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
