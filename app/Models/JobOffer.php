<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class JobOffer
 * 
 * @property int $id
 * @property int $company_id
 * @property string $title
 * @property string $description
 * @property string|null $contract_type
 * @property string|null $location
 * @property float|null $salary
 * @property string|null $education_level
 * @property string|null $experience_required
 * @property Carbon|null $posted_at
 * @property Carbon|null $expires_at
 * @property string|null $status
 * 
 * @property Company $company
 * @property Collection|Application[] $applications
 *
 * @package App\Models
 */
class JobOffer extends Model
{
	use SoftDeletes;
	
	protected $casts = [
		'company_id' => 'int',
		'salary' => 'float',
		'posted_at' => 'datetime',
		'expires_at' => 'datetime'
	];

	protected $guarded = [];

	public function company()
	{
		return $this->belongsTo(Company::class);
	}

	public function applications()
	{
		return $this->hasMany(Application::class);
	}
}
