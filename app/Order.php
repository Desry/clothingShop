<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protect $fillable = ['orderNo'];
}
