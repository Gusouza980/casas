<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Configuracao extends Model
{
    use HasFactory;

    public function top1_imovel(){
        return $this->belongsTo(Imovel::class, "top1", "id");
    }

    public function top2_imovel(){
        return $this->belongsTo(Imovel::class, "top2", "id");
    }

    public function top3_imovel(){
        return $this->belongsTo(Imovel::class, "top3", "id");
    }

    public function top4_imovel(){
        return $this->belongsTo(Imovel::class, "top4", "id");
    }

    public function top5_imovel(){
        return $this->belongsTo(Imovel::class, "top5", "id");
    }
}
