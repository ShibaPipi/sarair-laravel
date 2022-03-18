<?php

namespace App\Models\keeper;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\BaseModel as BaseEloquentModel;

/**
 * App\Models\keeper\BaseModel
 *
 * @method static Builder|BaseModel newModelQuery()
 * @method static Builder|BaseModel newQuery()
 * @method static Builder|BaseModel query()
 * @mixin Eloquent
 */
class BaseModel extends BaseEloquentModel
{
    use HasFactory;
}
