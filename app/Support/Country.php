<?php

namespace App\Support;

class Country
{
    /**
     * General information for a Country.
     *
     * @var object
     **/
    public $country;

    /**
     * Create a new country instance.
     *
     * @param mixed $country
     */
    public function __construct($country)
    {
        $this->country = (object) $country;
    }

    /**
     * Get country attributes.
     *
     * @param type $value Attribute
     **/
    public function __get($value)
    {
        return $this->getAttribute($value);
    }

    /**
     * Country atribute.
     *
     * @param string $value Attribute for a country
     **/
    protected function getAttribute($value)
    {
        $method = camel_case('get_'.$value.'_attribute');
        if (method_exists($this, $method)) {
            return $this->{$method}();
        }

        return $method;
    }

    /**
     * Get the common name for the country.
     **/
    protected function getNameAttribute()
    {
        return $this->country->name->common;
    }

    /**
     * Get the region  for the country.
     **/
    protected function getRegionAttribute()
    {
        return $this->country->region;
    }

    /**
     * Get the sub region for the country.
     **/
    protected function getSubRegionAttribute()
    {
        return $this->country->subregion;
    }

    /**
     * Get ISO 3166-1 alpha-2 of the country.
     **/
    protected function getCca2Attribute()
    {
        return $this->country->cca2;
    }
}
