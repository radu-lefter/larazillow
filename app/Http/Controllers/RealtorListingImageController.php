<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;

class RealtorListingImageController extends Controller
{
    public function create(Listing $listing)
    {
        return inertia(
            'Realtor/ListingImage/Create',
            ['listing' => $listing]
        );
    }

    public function store(Listing $listing, Request $request)
    {
        dd('Works!');
    }
}
