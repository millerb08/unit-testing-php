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

    /** @test */
    function convertDiagraphWordToPigLatin(){

        $word = "treehouse";
        $expectedResult = "eehousetray";

        $pigLatin = new PigLatin();
        $result = $pigLatin->convert($word);

        $this->assertEquals(
            $expectedResult,
            $result,
            "PigLatin conversion did not work correctly"
        );
    }

    function convertTrigraphWordToPigLatin(){

        $word = "streak";
        $expectedResult = "eakstray";

        $pigLatin = new PigLatin();
        $result = $pigLatin->convert($word);

        $this->assertEquals(
            $expectedResult,
            $result,
            "PigLatin conversion did not work correctly"
        );
    }
}