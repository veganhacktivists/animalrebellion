<?php

namespace App\Models;

/**
 * @mixin \Eloquent
 */
class Model extends \Illuminate\Database\Eloquent\Model
{
    public function toArray()
    {
        $serialized = parent::toArray();

        foreach ($serialized as $key => $value) {
            if (is_array(($value))) {
                $serialized[$key] = $this->$key; // call the Eloquent accessor to return the localized value
            }
        }

        return $serialized;
    }
}
