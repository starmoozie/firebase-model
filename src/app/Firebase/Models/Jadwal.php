<?php

namespace Starmoozie\Nusabook\Firebase\app\Firebase\Models;

use Starmoozie\Nusabook\Firebase\app\Firebase\Core\BaseModel;

class Jadwal extends BaseModel
{
    static protected $connection = 'firestore';
    static protected $table      = 'jadwal';

    /**
     * Check data terakhir by created pada firebase.
     *
     * @return boolean
     */
    public static function checkLatestInsert()
    {
        $self = self::orderByDesc('created')->limit(1)->documents();

        foreach ($self as $value) {
            return $value->data();
        }

        return [];
    }
}
