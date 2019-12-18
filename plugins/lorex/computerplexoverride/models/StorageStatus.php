<?php namespace Lorex\Computerplexoverride\Models;

use Model;

/**
 * Model
 */
class StorageStatus extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'lorex_computerplexoverride_storagestatus';

    protected $fillable = [];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    
    public function getRaktaronAttribute()
    {
        return $this->option1 ? true : false;
    }

    public function getSzemelyesenAttribute()
    {
        return $this->option2 ? true : false;
    }

    public $belongsTo = [
        'product' => ['Lovata\Shopaholic\Models\Product']
    ];
}
