<?php

namespace App\Support;

class Countries
{
    /**
     * Collection of Countries and information about them.
     *
     * @var Illuminate\Support\Collection
     **/
    protected $countries;

    /**
     * Create a new instance of Countries Class.
     */
    public function __construct()
    {
        $this->countries = collect(json_decode(file_get_contents(base_path('countries1.json'))))->sort();
    }

    /**
     * Get all countries in an array format.
     *
     * @return array $countries
     **/
    public function getCountries()
    {
        return $this->countries->all();
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
        $country = $this->countries->where('cca2', $cca2)->first();
        if (null !== $country) {
            new Country($country);
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
}
