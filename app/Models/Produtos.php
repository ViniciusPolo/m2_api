<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produtos extends Model
{
    use HasFactory;
    protected $fillable = [
        'produto',
        'preco_produto',
        'campanha_atual',    
    ];


    public function campanha(): BelongsTo
    {
        return $this->belongsTo(Campanhas::class);
    }

}
