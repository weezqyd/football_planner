<?php

namespace App\Support;

use Illuminate\Support\Collection;

class Countries
{
    /**
     * Collection of Countries and information about them.
     *
     * @var Illuminate\Support\Collection
     **/
    protected $countries = [];

    /**
     * Create a new instance of Countries Class.
     */
    public function __construct()
    {
        $this->countries = Collection::make(json_decode(file_get_contents(base_path('countries1.json')), false));
    }

    /**
     * Cast the country collection to object collection.
     *
     * @param Illuminate\Support\Collection $countries
     **/
    protected function cast(Collection $countries)
    {
        $tmp = [];
        foreach ($countries->all() as $country) {
            $tmp[] = new Country($country);
        }

        return Collection::make($tmp);
    }

    /**
     * Get all countries in an array format.
     *
     * @return array $countries
     **/
    public function all()
    {
        return $this->cast($this->countries)->all();
    }

    /**
     *Get a single country using ISO 3166-1 alpha-2.
     *
     * @param string $cca2 ISO 3166-1 alpha-2
     *
     * @throws \App\Support\CountryNotFoundException
     **/
    public function find(string $cca2)
    {
        $country = $this->countries->where('cca2', strtoupper($cca2))->first();
        if (null !== $country) {
            return new Country($country);
        }
        throw new CountryNotFoundException("Country $cca2 was not found");
    }

    /**
     * Filter the countries colection by key / value pair.
     *
     * @param string $key   Search key
     * @param string $value Value to compare with
     **/
    public function where($key, $value)
    {
        return $this->countries->where($key, $value);
    }

    /**
     * Get the countries collection object.
     **/
    public function prototype()
    {
        return $this->countries;
    }
}
