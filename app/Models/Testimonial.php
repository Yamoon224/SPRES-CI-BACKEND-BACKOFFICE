<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Testimonial
 * 
 * @property int $id
 * @property int|null $user_id
 * @property string $author_name
 * @property string|null $author_role
 * @property string $content
 * @property int|null $rating
 * @property bool|null $is_approved
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property User|null $user
 *
 * @package App\Models
 */
class Testimonial extends Model
{
	use SoftDeletes;

	protected $casts = [
		'user_id' => 'int',
		'rating' => 'int',
		'is_approved' => 'bool'
	];

	protected $guarded = [];

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
