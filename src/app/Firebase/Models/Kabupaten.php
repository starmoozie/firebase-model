<?php

namespace Starmoozie\Nusabook\Firebase\app\Firebase\Models;

use Starmoozie\Nusabook\Firebase\app\Firebase\Core\BaseModel;

class Kabupaten extends BaseModel
{
    static protected $connection = 'firestore';
    static protected $table      = 'kabupaten';
}
