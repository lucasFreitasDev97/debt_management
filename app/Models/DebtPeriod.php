<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class DebtPeriod
 *
 * @property int $id
 * @property int $debt_id
 * @property int $month
 * @property int $year
 * @property Carbon $start_date
 * @property Carbon $end_date
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Debt $debt
 * @property Collection|DebtPeriodDocument[] $debt_period_documents
 *
 * @package App\Models
 */
class DebtPeriod extends Model
{
	protected $table = 'debt_periods';

	protected $casts = [
		'debt_id' => 'int',
		'month' => 'int',
		'year' => 'int',
		'start_date' => 'datetime',
		'end_date' => 'datetime'
	];

	protected $fillable = [
		'debt_id',
		'month',
		'year',
		'start_date',
		'end_date'
	];

	public function debt(): BelongsTo
	{
		return $this->belongsTo(Debt::class);
	}

	public function debtPeriodDocuments(): HasMany
	{
		return $this->hasMany(DebtPeriodDocument::class);
	}
}
