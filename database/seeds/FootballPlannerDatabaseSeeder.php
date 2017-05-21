<?php

use Illuminate\Database\Seeder;

class FootballPlannerDatabaseSeeder extends Seeder {
    public function run()
    {
    	 DB::statement('SET FOREIGN_KEY_CHECKS=0');

         
        DB::table('group_teams')->insert([
            
            [
                'team_id' => '29',
                'group_id' => '1',
                'id' => '1',
            ],

            [
                'team_id' => '21',
                'group_id' => '1',
                'id' => '2',
            ],

            [
                'team_id' => '19',
                'group_id' => '1',
                'id' => '3',
            ],

            [
                'team_id' => '16',
                'group_id' => '1',
                'id' => '4',
            ],

            [
                'team_id' => '26',
                'group_id' => '2',
                'id' => '5',
            ],

            [
                'team_id' => '22',
                'group_id' => '2',
                'id' => '6',
            ],

            [
                'team_id' => '38',
                'group_id' => '2',
                'id' => '7',
            ],

            [
                'team_id' => '25',
                'group_id' => '2',
                'id' => '8',
            ],

            [
                'team_id' => '28',
                'group_id' => '3',
                'id' => '9',
            ],

            [
                'team_id' => '37',
                'group_id' => '3',
                'id' => '10',
            ],

            [
                'team_id' => '36',
                'group_id' => '3',
                'id' => '11',
            ],

            [
                'team_id' => '27',
                'group_id' => '3',
                'id' => '12',
            ],

            [
                'team_id' => '1',
                'group_id' => '4',
                'id' => '13',
            ],

            [
                'team_id' => '17',
                'group_id' => '4',
                'id' => '14',
            ],

            [
                'team_id' => '20',
                'group_id' => '4',
                'id' => '15',
            ],

            [
                'team_id' => '35',
                'group_id' => '4',
                'id' => '16',
            ],

            [
                'team_id' => '33',
                'group_id' => '5',
                'id' => '17',
            ],

            [
                'team_id' => '18',
                'group_id' => '5',
                'id' => '18',
            ],

            [
                'team_id' => '30',
                'group_id' => '5',
                'id' => '19',
            ],

            [
                'team_id' => '39',
                'group_id' => '5',
                'id' => '20',
            ],

            [
                'team_id' => '3',
                'group_id' => '6',
                'id' => '21',
            ],

            [
                'team_id' => '24',
                'group_id' => '6',
                'id' => '22',
            ],

            [
                'team_id' => '32',
                'group_id' => '6',
                'id' => '23',
            ],

            [
                'team_id' => '5',
                'group_id' => '6',
                'id' => '24',
            ],

            [
                'team_id' => '23',
                'group_id' => '7',
                'id' => '25',
            ],

            [
                'team_id' => '40',
                'group_id' => '7',
                'id' => '26',
            ],

            [
                'team_id' => '14',
                'group_id' => '7',
                'id' => '27',
            ],

            [
                'team_id' => '15',
                'group_id' => '7',
                'id' => '28',
            ],

            [
                'team_id' => '34',
                'group_id' => '8',
                'id' => '29',
            ],

            [
                'team_id' => '31',
                'group_id' => '8',
                'id' => '30',
            ],

            [
                'team_id' => '4',
                'group_id' => '8',
                'id' => '31',
            ],

            [
                'team_id' => '41',
                'group_id' => '8',
                'id' => '32',
            ],

        ]);
        DB::table('groups')->insert([
            
            [
                'id' => '1',
                'title' => 'Group A',
                'created_at' => '2017-05-21 10:21:39',
                'updated_at' => '2017-05-21 10:21:39',
            ],

            [
                'id' => '2',
                'title' => 'Group B',
                'created_at' => '2017-05-21 10:21:45',
                'updated_at' => '2017-05-21 10:21:45',
            ],

            [
                'id' => '3',
                'title' => 'Group C',
                'created_at' => '2017-05-21 10:21:50',
                'updated_at' => '2017-05-21 10:21:50',
            ],

            [
                'id' => '4',
                'title' => 'Group D',
                'created_at' => '2017-05-21 10:21:57',
                'updated_at' => '2017-05-21 10:21:57',
            ],

            [
                'id' => '5',
                'title' => 'Group E',
                'created_at' => '2017-05-21 10:22:07',
                'updated_at' => '2017-05-21 10:22:07',
            ],

            [
                'id' => '6',
                'title' => 'Group F',
                'created_at' => '2017-05-21 10:22:16',
                'updated_at' => '2017-05-21 10:22:16',
            ],

            [
                'id' => '7',
                'title' => 'Group G',
                'created_at' => '2017-05-21 10:22:23',
                'updated_at' => '2017-05-21 10:22:23',
            ],

            [
                'id' => '8',
                'title' => 'Group H',
                'created_at' => '2017-05-21 10:23:08',
                'updated_at' => '2017-05-21 10:23:08',
            ],

        ]);
        DB::table('teams')->insert([
            
            [
                'id' => '1',
                'country' => 'Argentina',
                'country_code' => 'AR',
                'region' => 'Americas',
                'rank' => '0',
                'qualify_position' => '1',
                'created_at' => '2017-05-20 13:28:01',
                'updated_at' => '2017-05-20 13:28:01',
            ],

            [
                'id' => '3',
                'country' => 'Austria',
                'country_code' => 'AT',
                'region' => 'Europe',
                'rank' => '0',
                'qualify_position' => '1',
                'created_at' => '2017-05-20 20:16:03',
                'updated_at' => '2017-05-20 20:16:03',
            ],

            [
                'id' => '4',
                'country' => 'Armenia',
                'country_code' => 'AM',
                'region' => 'Asia',
                'rank' => '0',
                'qualify_position' => '1',
                'created_at' => '2017-05-20 20:16:16',
                'updated_at' => '2017-05-20 20:16:16',
            ],

            [
                'id' => '5',
                'country' => 'Costa Rica',
                'country_code' => 'CR',
                'region' => 'Americas',
                'rank' => '0',
                'qualify_position' => '1',
                'created_at' => '2017-05-20 20:16:44',
                'updated_at' => '2017-05-20 20:16:44',
            ],

            [
                'id' => '14',
                'country' => 'Italy',
                'country_code' => 'IT',
                'region' => 'Europe',
                'rank' => '0',
                'qualify_position' => '1',
                'created_at' => '2017-05-20 20:23:31',
                'updated_at' => '2017-05-20 20:23:31',
            ],

            [
                'id' => '15',
                'country' => 'Russia',
                'country_code' => 'RU',
                'region' => 'Europe',
                'rank' => '0',
                'qualify_position' => '1',
                'created_at' => '2017-05-20 20:23:46',
                'updated_at' => '2017-05-20 20:23:46',
            ],

            [
                'id' => '16',
                'country' => 'Chile',
                'country_code' => 'CL',
                'region' => 'Americas',
                'rank' => '0',
                'qualify_position' => '1',
                'created_at' => '2017-05-20 20:26:55',
                'updated_at' => '2017-05-20 20:26:55',
            ],

            [
                'id' => '17',
                'country' => 'Australia',
                'country_code' => 'AU',
                'region' => 'Oceania',
                'rank' => '0',
                'qualify_position' => '1',
                'created_at' => '2017-05-20 20:27:11',
                'updated_at' => '2017-05-20 20:27:11',
            ],

            [
                'id' => '18',
                'country' => 'United States',
                'country_code' => 'US',
                'region' => 'Americas',
                'rank' => '0',
                'qualify_position' => '1',
                'created_at' => '2017-05-20 20:29:31',
                'updated_at' => '2017-05-20 20:29:31',
            ],

            [
                'id' => '19',
                'country' => 'Croatia',
                'country_code' => 'HR',
                'region' => 'Europe',
                'rank' => '0',
                'qualify_position' => '1',
                'created_at' => '2017-05-20 20:30:37',
                'updated_at' => '2017-05-20 20:30:37',
            ],

            [
                'id' => '20',
                'country' => 'United Kingdom',
                'country_code' => 'GB',
                'region' => 'Europe',
                'rank' => '0',
                'qualify_position' => '1',
                'created_at' => '2017-05-20 21:05:25',
                'updated_at' => '2017-05-20 21:05:25',
            ],

            [
                'id' => '21',
                'country' => 'Ghana',
                'country_code' => 'GH',
                'region' => 'Africa',
                'rank' => '0',
                'qualify_position' => '1',
                'created_at' => '2017-05-20 21:18:38',
                'updated_at' => '2017-05-20 21:18:38',
            ],

            [
                'id' => '22',
                'country' => 'South Africa',
                'country_code' => 'ZA',
                'region' => 'Africa',
                'rank' => '0',
                'qualify_position' => '1',
                'created_at' => '2017-05-20 21:18:53',
                'updated_at' => '2017-05-20 21:18:53',
            ],

            [
                'id' => '23',
                'country' => 'Algeria',
                'country_code' => 'DZ',
                'region' => 'Africa',
                'rank' => '0',
                'qualify_position' => '1',
                'created_at' => '2017-05-20 21:19:04',
                'updated_at' => '2017-05-20 21:19:04',
            ],

            [
                'id' => '24',
                'country' => 'Nigeria',
                'country_code' => 'NG',
                'region' => 'Africa',
                'rank' => '0',
                'qualify_position' => '1',
                'created_at' => '2017-05-20 21:19:22',
                'updated_at' => '2017-05-20 21:19:22',
            ],

            [
                'id' => '25',
                'country' => 'France',
                'country_code' => 'FR',
                'region' => 'Europe',
                'rank' => '0',
                'qualify_position' => '1',
                'created_at' => '2017-05-20 21:19:38',
                'updated_at' => '2017-05-20 21:19:38',
            ],

            [
                'id' => '26',
                'country' => 'Japan',
                'country_code' => 'JP',
                'region' => 'Asia',
                'rank' => '0',
                'qualify_position' => '1',
                'created_at' => '2017-05-20 21:20:20',
                'updated_at' => '2017-05-20 21:20:20',
            ],

            [
                'id' => '27',
                'country' => 'Uruguay',
                'country_code' => 'UY',
                'region' => 'Americas',
                'rank' => '0',
                'qualify_position' => '1',
                'created_at' => '2017-05-20 21:20:48',
                'updated_at' => '2017-05-20 21:20:48',
            ],

            [
                'id' => '28',
                'country' => 'Turkey',
                'country_code' => 'TR',
                'region' => 'Asia',
                'rank' => '0',
                'qualify_position' => '1',
                'created_at' => '2017-05-20 21:22:15',
                'updated_at' => '2017-05-20 21:22:15',
            ],

            [
                'id' => '29',
                'country' => 'Burkina Faso',
                'country_code' => 'BF',
                'region' => 'Africa',
                'rank' => '0',
                'qualify_position' => '1',
                'created_at' => '2017-05-20 21:22:49',
                'updated_at' => '2017-05-20 21:22:49',
            ],

            [
                'id' => '30',
                'country' => 'Ireland',
                'country_code' => 'IE',
                'region' => 'Europe',
                'rank' => '0',
                'qualify_position' => '1',
                'created_at' => '2017-05-20 21:23:54',
                'updated_at' => '2017-05-20 21:23:54',
            ],

            [
                'id' => '31',
                'country' => 'Mexico',
                'country_code' => 'MX',
                'region' => 'Americas',
                'rank' => '0',
                'qualify_position' => '1',
                'created_at' => '2017-05-20 21:25:37',
                'updated_at' => '2017-05-20 21:25:37',
            ],

            [
                'id' => '32',
                'country' => 'Portugal',
                'country_code' => 'PT',
                'region' => 'Europe',
                'rank' => '0',
                'qualify_position' => '1',
                'created_at' => '2017-05-20 21:26:46',
                'updated_at' => '2017-05-20 21:26:46',
            ],

            [
                'id' => '33',
                'country' => 'Sweden',
                'country_code' => 'SE',
                'region' => 'Europe',
                'rank' => '0',
                'qualify_position' => '1',
                'created_at' => '2017-05-20 21:28:03',
                'updated_at' => '2017-05-20 21:28:03',
            ],

            [
                'id' => '34',
                'country' => 'Ivory Coast',
                'country_code' => 'CI',
                'region' => 'Africa',
                'rank' => '0',
                'qualify_position' => '1',
                'created_at' => '2017-05-21 11:06:42',
                'updated_at' => '2017-05-21 11:06:42',
            ],

            [
                'id' => '35',
                'country' => 'Belgium',
                'country_code' => 'BE',
                'region' => 'Europe',
                'rank' => '0',
                'qualify_position' => '1',
                'created_at' => '2017-05-21 11:07:56',
                'updated_at' => '2017-05-21 11:07:56',
            ],

            [
                'id' => '36',
                'country' => 'Brazil',
                'country_code' => 'BR',
                'region' => 'Americas',
                'rank' => '0',
                'qualify_position' => '1',
                'created_at' => '2017-05-21 11:08:13',
                'updated_at' => '2017-05-21 11:08:13',
            ],

            [
                'id' => '37',
                'country' => 'Colombia',
                'country_code' => 'CO',
                'region' => 'Americas',
                'rank' => '0',
                'qualify_position' => '1',
                'created_at' => '2017-05-21 11:08:50',
                'updated_at' => '2017-05-21 11:08:50',
            ],

            [
                'id' => '38',
                'country' => 'Kenya',
                'country_code' => 'KE',
                'region' => 'Africa',
                'rank' => '0',
                'qualify_position' => '1',
                'created_at' => '2017-05-21 11:10:01',
                'updated_at' => '2017-05-21 11:10:01',
            ],

            [
                'id' => '39',
                'country' => 'Spain',
                'country_code' => 'ES',
                'region' => 'Europe',
                'rank' => '0',
                'qualify_position' => '1',
                'created_at' => '2017-05-21 11:10:43',
                'updated_at' => '2017-05-21 11:10:43',
            ],

            [
                'id' => '40',
                'country' => 'Germany',
                'country_code' => 'DE',
                'region' => 'Europe',
                'rank' => '0',
                'qualify_position' => '1',
                'created_at' => '2017-05-21 11:11:35',
                'updated_at' => '2017-05-21 11:11:35',
            ],

            [
                'id' => '41',
                'country' => 'Senegal',
                'country_code' => 'SN',
                'region' => 'Africa',
                'rank' => '0',
                'qualify_position' => '1',
                'created_at' => '2017-05-21 11:13:50',
                'updated_at' => '2017-05-21 11:13:50',
            ],

        ]);
        DB::table('users')->insert([
            
            [
                'id' => '1',
                'name' => 'The Administrator',
                'email' => 'johndoe@devs.com',
                'password' => '$2y$10$yu9NruvlNSUh7JQvq6DXk.DToYYQygnuBYNx/k7Y/juG6WNsnr0nW',
                'remember_token' => 'd4hwrmpOM8J8g0CJZLCucmCl2f188LkiyuDPd2AQkic9WKFZV99UZZMva7lk',
                'created_at' => '2017-05-19 11:24:57',
                'updated_at' => '2017-05-19 11:24:57',
            ]

        ]);
        DB::table('venues')->insert([
            
            [
                'id' => '1',
                'stadium' => 'Luzhniki',
                'city' => 'Moscow',
                'capacity' => '81006',
            ],

            [
                'id' => '2',
                'stadium' => 'Zenit Arena',
                'city' => 'Petersburg',
                'capacity' => '68134',
            ],

            [
                'id' => '3',
                'stadium' => 'First Olympic Stadium',
                'city' => 'Sochi',
                'capacity' => '47659',
            ],

            [
                'id' => '4',
                'stadium' => 'Volgograd Arena',
                'city' => 'Volgograd',
                'capacity' => '45568',
            ],

            [
                'id' => '5',
                'stadium' => 'Stadion Nizhiny Novgorod',
                'city' => 'Nizhiny Novgorod',
                'capacity' => '45331',
            ],

            [
                'id' => '6',
                'stadium' => 'Rostov Arena',
                'city' => 'Rostov-on-don',
                'capacity' => '45145',
            ],

            [
                'id' => '7',
                'stadium' => 'Kazan Arena',
                'city' => 'Kazan',
                'capacity' => '45105',
            ],

            [
                'id' => '8',
                'stadium' => 'Samara Arena',
                'city' => 'Samara',
                'capacity' => '44807',
            ],

            [
                'id' => '9',
                'stadium' => 'Mordovia Arena',
                'city' => 'Saransk',
                'capacity' => '44442',
            ],

            [
                'id' => '10',
                'stadium' => 'Otkritie Arena',
                'city' => 'Moscow',
                'capacity' => '44000',
            ],

            [
                'id' => '11',
                'stadium' => 'Tsentralnyj  Stadion',
                'city' => 'Yekaterinburg',
                'capacity' => '35696',
            ],

            [
                'id' => '12',
                'stadium' => 'Stadion Kaliningrad',
                'city' => 'Kaliningrad',
                'capacity' => '35212',
            ],

        ]);
    }
}