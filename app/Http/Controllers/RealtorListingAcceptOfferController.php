<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offer;

class RealtorListingAcceptOfferController extends Controller
{
    public function __invoke(Offer $offer)
    {$listing = $offer->listing;
        $this->authorize('update', $listing);
        // Accept selected offer
        $offer->update(['accepted_at' => now()]);

        $listing->listing->sold_at = now();
        $listing->listing->save();

        // Reject all other offers
        $listing->listing->offers()->except($offer)
            ->update(['rejected_at' => now()]);

        return redirect()->back()
            ->with(
                'success',
                "Offer #{$offer->id} accepted, other offers rejected"
            );
    }
}
