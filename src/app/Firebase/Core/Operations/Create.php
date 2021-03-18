<?php

namespace Starmoozie\Nusabook\Firebase\app\Firebase\Core\Operations;

/**
 * Create operation method
 */
trait Create
{
    /**
     * create single data to firebase
     * @params array, key index
     * @return collection
     */
    public static function create(array $item, string $key)
    {
        try {
            return self::insert($item, $key);
        } catch (\Exception $e) {
            \Log::error($e->getMessage()); // insert error to log
            throw $e; // throw error
        }
    }

    /**
     * create multiple data to firebase
     * @param multi array, key index
     * @return collection
     */
    public static function createMany(array $items, string $key)
    {
        try {
            foreach ($items as $item) {
                self::insert($item, $key);
            }

            return true;
        } catch (\Exception $e) {
            \Log::error($e->getMessage()); // insert error to log
            throw $e; // throw error
        }
    }

    /**
     * Insert to firebase
     * @param array, key index
     * @return collection
     */
    private static function insert($item, $key)
    {
        return self::collect()->document($item[$key])->set($item); // method insert data from firebase
    }
}
