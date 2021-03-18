<?php

namespace Starmoozie\Nusabook\Firebase\app\Firebase\Models;

use Starmoozie\Nusabook\Firebase\app\Firebase\Core\BaseModel;

class MetodePembayaran extends BaseModel
{
    static protected $connection = 'firestore';
    static protected $table      = 'metode_pembayaran';
}
