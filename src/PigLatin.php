<?php

class PigLatin{

    protected $diagraphs = ["bl", "br", "ch", "ck", "cl", "cr", "dr", "fl", "fr", "gh", "gl", "gr", "ng", "ph", "pl", "pr", "qu", "sc", "sh", "sk", "sl", "sm", "sn", "sp", "st", "sw", "th", "tr", "tw", "wh", "wr"];
    protected $trigraphs = ["nth", "sch", "scr", "shr", "spl", "spr", "squ", "str", "thr"];
    protected $vowels = ["a", "e", "i", "o", "u"];

    function convert($word){
        $firstLetter = substr($word, 0 ,1);
        $firstTwoLetters = substr($word, 0 ,2);
        $firstThreeLetters = substr($word, 0 ,3);
        $firstVowel = substr($word, 0 ,1);
        
        if(in_array($firstVowel, $this->vowels)){
            return  $word. "ay";
            }
        if(in_array($firstThreeLetters, $this->trigraphs)){
            return substr($word,3) . $firstThreeLetters. "ay";
        }

        if (in_array($firstTwoLetters, $this->diagraphs)) {
            return substr($word,2) . $firstTwoLetters. "ay";
        }
        return substr($word,1) . $firstLetter. "ay";
    }
}