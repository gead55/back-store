<?php

namespace Larashop\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_id',
        'pathfile',
        'filename',
        'description',
        'created_at_ip',
        'updated_at_ip',
    ];


    /**
     * Get the product that the image belongs to.
     */
    public function product()
    {
        return $this->belongsTo('Larashop\Models\Procuct','product_id');
    }    
}
