<?php
/**
 * Created by PhpStorm.
 * User: liuxiang
 * Date: 16/6/1
 * Time: 上午2:31
 */

namespace app\Services;


class PasswordGeneratorHelper
{
    /**
     * @param string $orginal
     * @return string
     */
    public function str_shuffle(string $orginal)
    {
        return str_shuffle($orginal);
    }
}