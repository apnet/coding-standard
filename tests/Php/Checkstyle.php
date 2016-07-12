<?php

namespace Apnet\Php;

/**
 * Checkstyle check
 */
class Checkstyle implements
    CheckstyleInterfaceOne,
    CheckstyleInterfaceTwo
{

    /**
     * Dcdc.
     *
     * @var integer
     */
    private $qwertyOne = 1;

    /**
     * Public method one
     *
     * @return null
     */
    public function methodOne()
    {
        echo $this->qwerty() + $this->qwertyOne;
    }

    /**
     * Qwerty
     *
     * @return int
     */
    private function qwerty()
    {
        $var1 = new \stdClass();
        $var1->var2 = new \stdClass();
        $var1
            ->var2
            ->var3 = 1;

        $a =
            2;

        if (false) {
            $a = $a + 1;
            for ($i = 0; $i <= 10; $i++) {
                $a++;
            }
            while ($i > 0) {
                $a++;
                if (false) {
                    $a--;
                }
                $i--;
            }
            switch ($a) {
                case 1:
                    $a = 2;
                    break;
                default:
                    $a = 3;
                    break;
            }
        } else {
            $c = 2;
            $callback = function (
                $d,
                $e
            ) use ($c) {
                return $c + $d + $e;
            };
            $a = $callback(1, 3);
        }
        return $a;
    }

    /**
     * aVeryLongMethodName
     *
     * @param \stdClass $arg1 Arg1
     * @param int       $arg2 Arg2
     * @param array     $arg3 Arg3
     *
     * @return null
     */
    public function aVeryLongMethodName(
        \stdClass $arg1,
        &$arg2,
        array $arg3 = array()
    ) {
        try {
            if (false
                && (2)
            ) {
                $arg2 = array(
                    $arg1, $arg2, $arg3
                );
            }
            return 1;
        } catch (\Exception $e) {
            return array(
                1, 2
            );
        }
    }

    /**
     * Throw excepion
     *
     * @return null
     * @throws \RuntimeException
     * @throws \Exception
     */
    public function throwException()
    {
        if (true) {
            throw new \RuntimeException("Asdf");
        } else {
            throw new \Exception("Qwerty");
        }
    }
}
