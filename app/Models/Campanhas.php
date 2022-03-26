<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Campanhas extends Model
{
    use HasFactory;
    protected $fillable = [
        'campanha',
        'desconto_da_campanha',
    ];
    
    public function descontos(): BelongsTo
    {
        return $this->belongsTo(Descontos::class);
    }


}
