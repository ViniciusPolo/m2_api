<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cidades extends Model
{
    use HasFactory;
     
    protected $fillable = [
        'cidade',
        'grupo_cidade',
    
    ];

    public function grupocidades(): BelongsTo
    {
        return $this->belongsTo(Grupocidades::class);
    }
}
