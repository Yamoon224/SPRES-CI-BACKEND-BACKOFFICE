<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Company
 * 
 * @property int $id
 * @property string $name
 * @property string|null $industry
 * @property string|null $website
 * @property string|null $address
 * @property string|null $description
 * @property string|null $logo
 * 
 * @property Collection|JobOffer[] $job_offers
 * @property Collection|User[] $users
 *
 * @package App\Models
 */
class Company extends Model
{
	use SoftDeletes;

	protected $guarded = [];

	public function job_offers()
	{
		return $this->hasMany(JobOffer::class);
	}

	public function users()
	{
		return $this->hasMany(User::class);
	}
}
