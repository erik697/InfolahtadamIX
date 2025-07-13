<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Personel extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'nrp',
        'position_id',
        'status',
        'img_url',
        'period_start',
        'period_end'
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'id' => 'integer',
            'position_id' => 'integer',
            'deleted_at' => 'timestamp',
        ];
    }

    public function position(): BelongsTo
    {
        return $this->belongsTo(Position::class);
    }
}
