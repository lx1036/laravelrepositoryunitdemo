<?php
/**
 * Created by PhpStorm.
 * User: liuxiang
 * Date: 16/6/1
 * Time: 上午2:26
 */

namespace app\Services;
use App\Services\PasswordGeneratorHelper;

class PasswordGeneratorService
{
    /**
     * @var PasswordGeneratorHelper
     */
    private $passwordGeneratorHelper;
    public function __construct(PasswordGeneratorHelper $passwordGeneratorHelper)
    {
        $this->passwordGeneratorHelper = $passwordGeneratorHelper;
    }
    /**
     * generate password
     *
     * @param string $origin
     * @param int $length
     * @return string
     */
    public function generate(string $origin, int $length)
    {
        $target = $this->passwordGeneratorHelper->str_shuffle($origin);
//        var_dump($target);
//        $target = str_shuffle($origin);
        return substr($target, 0, $length);
    }
}