<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'description',
        'category_product_id',
        'wherehouse_id',
        'serial_number',
        'status',
        'year',
        'name',
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
            'category_product_id' => 'integer',
            'wherehouse_id' => 'integer',
            'deleted_at' => 'timestamp',
        ];
    }

    public function categoryProduct(): BelongsTo
    {
        return $this->belongsTo(CategoryProduct::class);
    }

    public function wherehouse(): BelongsTo
    {
        return $this->belongsTo(Wherehouse::class);
    }
    public function productLogs(){
        return $this->hasMany(ProductLog::class);
    }
}
