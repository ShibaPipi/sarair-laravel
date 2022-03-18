<?php

namespace App\Models\keeper;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Carbon;

/**
 * App\Models\keeper\KeeperHealth
 *
 * @property int $id
 * @property string $name
 * @property float $weight
 * @property float $bmi
 * @property float $bodyFatRate
 * @property int $bodyAge
 * @property float $muscle
 * @property float $boneMass
 * @property float $water
 * @property float $visceralFat
 * @property int $bmr
 * @property float $protein
 * @property float $subcutaneousFat
 * @property float $weightWithoutFat
 * @property float $skeletalMuscleRate
 * @property int $score
 * @property string $date
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|KeeperHealth newModelQuery()
 * @method static Builder|KeeperHealth newQuery()
 * @method static Builder|KeeperHealth query()
 * @method static Builder|KeeperHealth whereBmi($value)
 * @method static Builder|KeeperHealth whereBmr($value)
 * @method static Builder|KeeperHealth whereBodyAge($value)
 * @method static Builder|KeeperHealth whereBodyFatRate($value)
 * @method static Builder|KeeperHealth whereBoneMass($value)
 * @method static Builder|KeeperHealth whereCreatedAt($value)
 * @method static Builder|KeeperHealth whereDate($value)
 * @method static Builder|KeeperHealth whereId($value)
 * @method static Builder|KeeperHealth whereMuscle($value)
 * @method static Builder|KeeperHealth whereName($value)
 * @method static Builder|KeeperHealth whereProtein($value)
 * @method static Builder|KeeperHealth whereScore($value)
 * @method static Builder|KeeperHealth whereSkeletalMuscleRate($value)
 * @method static Builder|KeeperHealth whereSubcutaneousFat($value)
 * @method static Builder|KeeperHealth whereUpdatedAt($value)
 * @method static Builder|KeeperHealth whereVisceralFat($value)
 * @method static Builder|KeeperHealth whereWater($value)
 * @method static Builder|KeeperHealth whereWeight($value)
 * @method static Builder|KeeperHealth whereWeightWithoutFat($value)
 * @mixin Eloquent
 */
class KeeperHealth extends BaseModel
{
    use HasFactory;
}
