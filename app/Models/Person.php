<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Status;
use App\Models\Image;
use App\Models\Alias;

class Person extends Model
{
    use HasFactory;

    public function aliases() {
        return $this->hasMany(Alias::class);
    }

    // there is image_id in thi this table -> not hasOne
    public function image() {
        return $this->belongsTo(Image::class);
    }

    // there is staus_id in thi this table -> not hasOne
    public function status() {
        return $this->belongsTo(Status::class);
    } 
}
