<?php

namespace Starmoozie\Nusabook\Firebase\app\Firebase\Core\Operations;

/**
 * Order By operation method
 */
trait OrderBy
{
    /**
     * order by method
     * @param key, method DESC or ASC
     * @return object
     */
    public static function orderBy($key, $method=false){
        $method = $method ? $method : 'ASC';
        return self::collect()->orderBy($key, $method); // Fungsi dari firebase
    }

    /**
     * order by DESC method
     * @param key
     * @return object
     */
    public static function orderByDesc($key){
        return self::collect()->orderBy($key, 'DESC'); // Fungsi dari firebase
    }
}
