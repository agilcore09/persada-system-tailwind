<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class InventarisModel extends Model
{
    use HasFactory;

    protected $table = "inventaris";
    protected $guarded = ["id"];

    public function Kategori()
    {
        return $this->belongsTo(KategoriModel::class, 'kategori', 'id');
    }
}
