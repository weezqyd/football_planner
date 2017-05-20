<?php

namespace App\Support;

class Country
{
    /**
     * Region for a country.
     *
     * @var string
     **/
    public $region;

    /**
     * Common name for the country.
     *
     * @var string
     **/
    public $name;

    /**
     * Sub-Region.for a country.
     *
     * @var string
     **/
    public $subRegion;

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
        $this->cointry = $country;
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
    protected function getAttiute($value)
    {
        $method = 'get'.ucfirst(camel_case($value)).'Attribute';
        if (method_exists($this, $method)) {
            return $this->{$method};
        }
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
}
