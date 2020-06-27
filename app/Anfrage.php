<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anfrage extends Model
{
    protected $primaryKey;
    static $benName;

    /**
     * @return mixed
     */
    public static function getBenName()
    {
        return self::$benName;
    }

    /**
     * @param mixed $benName
     */
    public static function setBenName($benName): void
    {
        self::$benName = $benName;
    }

}
