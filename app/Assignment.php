<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    public function complete()
    {
        $this->completed_at = Carbon::now();
        $this->save();
    }
}
