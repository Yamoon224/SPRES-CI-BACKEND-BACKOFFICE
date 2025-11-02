<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Cv
 * 
 * @property int $id
 * @property int $user_id
 * @property string $file_url
 * @property string|null $title
 * @property string|null $skills
 * @property string|null $education
 * @property string|null $experience
 * @property Carbon|null $created_at
 * 
 * @property User $user
 *
 * @package App\Models
 */
class Cv extends Model
{
	use SoftDeletes;
	
	protected $casts = [
		'user_id' => 'int'
	];

	protected $guarded = [];

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
