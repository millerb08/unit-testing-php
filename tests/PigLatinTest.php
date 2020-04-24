<?php
//require_once __DIR__."/../src/PigLatin.php";
use PHPUnit\Framework\TestCase;

class PigLatinTest extends TestCase{

    /** @test */
    function convertSingleStartingConsonantWordToPigLatin(){

        $word = "test";
        $expectedResult = "esttay";

        $pigLatin = new PigLatin();
        $result = $pigLatin->convert($word);

        $this->assertEquals(
            $expectedResult,
            $result,
            "PigLatin conversion did not work correctly"
        );
    }
}