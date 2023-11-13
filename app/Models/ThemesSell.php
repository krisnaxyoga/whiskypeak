<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThemesSell extends Model
{
    use HasFactory;

    public function theme() {
        return $this->belongsTo(Themes::class, 'theme_id');
    }

    public function pakage() {
        return $this->belongsTo(PakageUndangan::class, 'pakage_id');
    }
}
