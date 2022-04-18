<?php

namespace Modules\Home\Entities;

use App\Models\BaseModel;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Spatie\Activitylog\Traits\LogsActivity;

class FooterLink extends BaseModel
{
    use HasFactory;
    use LogsActivity;
    use SoftDeletes;
    use Notifiable;

    protected $table = 'footer_links';

    protected static $logName = 'footer_links';
    protected static $logOnlyDirty = true;
    protected static $logAttributes = ['name', 'link'];
}
