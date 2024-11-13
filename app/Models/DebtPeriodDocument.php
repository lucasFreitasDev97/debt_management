<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class DebtPeriodDocument
 *
 * @property int $id
 * @property int $debt_period_id
 * @property string $status
 * @property string|null $receipt_file_path
 * @property string $voucher_file_path
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property DebtPeriod $debt_period
 *
 * @package App\Models
 */
class DebtPeriodDocument extends Model
{
	protected $table = 'debt_period_documents';

	protected $casts = [
		'debt_period_id' => 'int'
	];

	protected $fillable = [
		'debt_period_id',
		'status',
		'receipt_file_path',
		'voucher_file_path'
	];

	public function debtPeriod(): BelongsTo
	{
		return $this->belongsTo(DebtPeriod::class);
	}
}
