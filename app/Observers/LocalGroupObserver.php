<?php

namespace App\Observers;

use App\Models\LocalGroup;

class LocalGroupObserver
{
    /**
     * Handle LocalGroup "created" event.
     *
     * On creation of a new localGroup, grab lat/lng coordinates
     * via Geocoder lib and assign in the coords table.
     *
     * @param \App\LocalGroup $event
     *
     * @return void
     */
    public function created(LocalGroup $localGroup)
    {
        $address = $localGroup->address1;

        if ($localGroup->address2) {
            $address = $address.', '.$localGroup->address2;
        }

        if ($localGroup->address3) {
            $address = $address.', '.$localGroup->address3;
        }

        if ($localGroup->state_or_province) {
            $address = $address.', '.$localGroup->state_or_province;
        }

        $address = $address.', '.$localGroup->city.', '.$localGroup->postal_code.', '.$localGroup->country;

        $results = app()->make('Geocoder')->geocode($address);

        if (count($results['results'])) {
            $localGroup->lat = $results['results'][0]['geometry']['lat'];
            $localGroup->lng = $results['results'][0]['geometry']['lng'];
        }

        $localGroup->save();
    }
}
