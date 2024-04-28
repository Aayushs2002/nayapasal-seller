<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    use HasFactory;
    protected $fillable = [
        'attributename',
        'slug',
        'order',
        'attribute_group_id',
    ];
    public function getGroup()
    {
        return $this->belongsTo(AttributeGroup::class, 'attribute_group_id');
    }
}
