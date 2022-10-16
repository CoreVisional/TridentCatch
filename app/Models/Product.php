<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

class Product extends Model
{
    use SearchableTrait;

    protected $fillable = ['name', 'weight'];

    /**
     * Searchable rules.
     *
     * @var array
     */
    protected $searchable = [
        /**
         * Columns and their priority in search results.
         * Columns with higher values are more important.
         * Columns with equal values have equal importance.
         *
         * @var array
         */
        'columns' => [
            'product.name' => 10,
            'product.price' => 6,
            'product.description' => 2
        ],
    ];

    public function scopeRelatedProducts($query) {
        return $query-> inRandomOrder()->take(4);
    }

    public function category() {
        return $this->belongsTo('App\Category');
    }

    /**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    public function toSearchableArray() {
        $array = $this->toArray();
        $extraFields = [
            'category' => $this->category->pluck('name', 'price')->toArray(),
        ];
        return array_merge($array, $extraFields);
    }
}
