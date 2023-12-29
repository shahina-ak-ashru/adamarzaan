<?php

namespace App\Models;
use Dotenv\Parser\Value;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];
    // creating mutators
    // protected function status() : Attribute{
    //     return Attribute::make(
    //         get:fn(string $value) => ($value == 1) ? 'Active' : 'Inactive',
    //     );
    // }
    // protected function isFavourite() : Attribute{
    //     return Attribute::make(
    //         get:fn(string $value) => ($value == 1) ? 'Yes' : 'No',
    //     );
    // }
    // <!--appending-->
    public function category(){
        return $this->hasOne(Category::class,'id','category_id');
    }
    Public function getStatusTextAttribute(){
        return ($this->status == 1 )? 'Active' : 'Inactive';
    }
    Public function getIsfavouriteTextAttribute(){
        return ($this->is_favourite == 1 )? 'Yes' : 'No';
    }
    protected $appends= ['status_text','is_favourite_text'];
}
