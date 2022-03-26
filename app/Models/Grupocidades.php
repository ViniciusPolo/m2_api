<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Grupocidades extends Model
{
    use HasFactory;
    protected $fillable = [
        'grupo',
        'campanha_ativa',
    
    ];
    
    public function campanhas(): BelongsTo
    {
        return $this->belongsTo(Campanhas::class);
    }
}
