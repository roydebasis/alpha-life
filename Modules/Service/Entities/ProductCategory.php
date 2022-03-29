<?php

namespace Modules\Service\Entities;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Spatie\Activitylog\Traits\LogsActivity;

class ProductCategory extends BaseModel
{
    use HasFactory;
    use SoftDeletes;
    use LogsActivity;
    use Notifiable;

    protected $fillable = ['name', 'slug'];

    public function services()
    {
        return $this->hasMany('Modules\Service\Entities\Service', 'product_category_id', 'id');
    }


    // protected static function newFactory()
    // {
    //     return \Modules\Service\Database\factories\ProductCategoryFactory::new();
    // }
}
