<?php

namespace App\Repositories;

use App\Models\product;
use InfyOm\Generator\Common\BaseRepository;

class productRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description',
        'price',
        'category_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return product::class;
    }
}
