<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Application
 * 
 * @property int $id
 * @property int $job_offer_id
 * @property int $user_id
 * @property string $cv_url
 * @property string|null $cover_letter
 * @property string|null $status
 * @property Carbon|null $submitted_at
 * 
 * @property JobOffer $job_offer
 * @property User $user
 *
 * @package App\Models
 */
class Application extends Model
{
	use SoftDeletes;

	protected $casts = [
		'job_offer_id' => 'int',
		'user_id' => 'int',
		'submitted_at' => 'datetime'
	];

	protected $guarded = [];

	public function job_offer()
	{
		return $this->belongsTo(JobOffer::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
