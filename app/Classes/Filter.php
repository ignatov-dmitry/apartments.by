<?php

namespace App\Classes;

class Filter {

    public $price = [
        'min' => null,
        'max' => null
    ];

    public $area = null;

    public $type = null;

    public $attributes = [];

    public $country_id = null;

    public $region_id = null;

    public $city_id = null;

    public function __construct($data = array())
    {
        if (!is_null($data)) {
            foreach ($data as $key => $value) {
                !property_exists($this, $key) ? : $this->$key = $value;
            }
        }
    }
}