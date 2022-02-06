<?php

namespace Modules\Management\Entities;

use App\Models\BaseModel;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'management_categories';

    /**
     * Caegories has Many managements.
     */
    public function managements()
    {
        return $this->hasMany('Modules\Management\Entities\Management');
    }


    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\Management\Database\Factories\CategoryFactory::new();
    }
}
