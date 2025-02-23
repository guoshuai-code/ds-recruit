<?php
/**
 * MyGreeter.php
 * 2025/2/23 08:29
 * guoshuai
 */
namespace Src;


// 定义时间段常量
define('MORNING_START', 6);
define('AFTERNOON_START', 12);
define('EVENING_START', 18);



class MyGreeter
{

    private $hour;

    public function __construct($hour = null) {
        $this->hour = $hour ?? (int) date('H');
    }

    /**
     * 获取当前时间的问候语
     * @return string
     */
    public function greeting(): string {
        $hour = (int) date('H');

        if ($hour >= MORNING_START && $hour < AFTERNOON_START) {
            return "Good morning";
        } elseif ($hour >= AFTERNOON_START && $hour < EVENING_START) {
            return "Good afternoon";
        } else {
            return "Good evening";
        }
    }
}