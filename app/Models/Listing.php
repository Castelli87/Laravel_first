<?php
namespace App\Models;
class Listing
{
    public static function all()
    {
        return [
            [
                'id' => '1',
                'title' => 'Listing One',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio placeat excepturi minus, nostrum facere ducimus et cupiditate amet aspernatur iure.'
            ],
            [
                'id' => '2',
                'title' => 'Listing Two',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio placeat excepturi minus, nostrum facere ducimus et cupiditate amet aspernatur iure.'
            ]
        ];
    }
    
    public static function find($id)
    {
        $listings = self::all();
        
        foreach ($listings as $listing) {
            if ($listing['id'] == $id) {
                return $listing;
            }
        };
    }
}