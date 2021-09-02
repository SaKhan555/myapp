<?php
/**
 * Created by PhpStorm.
 * User: sadar
 * Date: 2021-08-30
 * Time: 5:18 PM
 */

namespace App\Services;


interface Newsletter
{
    public function subscribe(string $email, string $list = null);
}