### Football Match Scheduling

A simple laravel app for generating match fixtures for the upcoming World Cup in Russia in 2018

### Installation
To install this application a php environment is required and composer for managing app dependencies

```
git clone https://github.com/weezqyd/football_planner

cd football_planner

composer install

php artisan migrate --seed

php artisan serve
```

After running the above command go to your browser and open `localhost:8000`

### Usage

Some actions require authentication. for demo purposer go to `localhost:8000/register` and create a demo user
when authenticated you will be able to Add teams to groups.

Ther are 8 Groups A - H and each group will have four teams. There will only be two fixtures per day   

