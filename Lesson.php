<?php
/**
 * Created by PhpStorm.
 * User: liuhan
 * Date: 17/2/20
 * Time: 下午4:03
 */
abstract class Lesson{

    protected $duration;

    const FIXED = 1;

    const TIMED = 2;

    private $costtype;

    function __construct($duration, $costtype = 1){

        $this->duration = $duration;

        $this->costtype = $costtype;
    }

    function cost(){
        switch ($this->costtype){
            CASE self::TIMED:
                return  (5 * $this->duration);
                break;
            CASE self::FIXED:
                return 30;
                break;
            default:
                $this->costtype = self::FIXED;
                return 30;
        }
    }


    function chargeType(){
        switch ($this->costtype){
            CASE self::TIMED:
                return  "hourly rate";
                break;
            CASE self::FIXED:
                return "fixed rate";
                break;
            default:
                $this->costtype = self::FIXED;
                return "fixed rate";
        }
    }
    //Lesson 的更多方法

}

class Lecture extends Lesson{

    //Lecture 特定实现

}


class Seminar extends Lesson{

    //Seminar 特定的实现

}
