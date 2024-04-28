<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Athlete extends Model
{
    use HasFactory;
    protected $table = 'athletes';
    protected $primaryKey = 'id';

    protected $fillable = ['name', 'dob', 'gender', 'weight', 'category', 'qualification', 'mobile_number', 'email', 'address', 'state', 'pincode'];

    public function result()
    {
        return $this->hasOne(Result::class, 'category');
    }

    public static function fetchByCategory($category)
    {
        return self::where('category', $category)->get();
    }

    public static function searchAthletes($searchQuery)
    {
        return self::where('name', 'like', '%' . $searchQuery . '%')
        ->orWhere('dob', 'like', '%' . $searchQuery . '%')
        ->orWhere('gender', 'like', '%' . $searchQuery . '%')
        ->orWhere('weight', 'like', '%' . $searchQuery . '%')
        ->orWhere('qualification', 'like', '%' . $searchQuery . '%')
        ->orWhere('mobile_number', 'like', '%' . $searchQuery . '%')
        ->orWhere('email', 'like', '%' . $searchQuery . '%')
        ->orWhere('address', 'like', '%' . $searchQuery . '%')
        ->orWhere('state', 'like', '%' . $searchQuery . '%')
        ->orWhere('pincode', 'like', '%' . $searchQuery . '%')
        ->get();
    }
}
