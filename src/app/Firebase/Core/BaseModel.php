<?php

namespace Starmoozie\Nusabook\Firebase\app\Firebase\Core;

/**
 * setting koneksi dan key ke firebase
 */
class BaseModel
{
    use Operations\Create;
    use Operations\OrderBy;

    /**
     * set connection to firebase
     * @return object
     */
    public static function connect() {
        return app('firebase.' . static::$connection); // set firebase yang digunakan ex: realtime, firestore
    }

    /**
     * set collection to firebase
     * @return object
     */
    public static function collect()
    {
        return self::connect()->database()->collection(static::$table); // set key for firebase collection
    }
}
