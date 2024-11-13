<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Debt
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property string|null $debt_cover_path
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Collection|DebtPeriod[] $debt_periods
 *
 * @package App\Models
 */
class Debt extends Model
{
	protected $table = 'debts';

	protected $fillable = [
		'name',
		'description',
		'debt_cover_path'
	];

	public function debtPeriods(): HasMany
	{
		return $this->hasMany(DebtPeriod::class);
	}
}
