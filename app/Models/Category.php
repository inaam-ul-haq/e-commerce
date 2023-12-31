<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory, HasUuids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name'];

    public function getStatusAttribute($value)
    {
        return $value == 1 ? 'Active' : 'in-active';
    }

    /**
     * Category images relationship
     */
    public function Images()
    {
        return $this->morphOne(Image::class, 'imagable');
    }
}
