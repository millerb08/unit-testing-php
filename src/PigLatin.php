<?php

class PigLatin{

    protected $diagraphs = ["bl", "br", "ch", "ck", "cl", "cr", "dr", "fl", "fr", "gh", "gl", "gr", "ng", "ph", "pl", "pr", "qu", "sc", "sh", "sk", "sl", "sm", "sn", "sp", "st", "sw", "th", "tr", "tw", "wh", "wr"];
    protected $trigraphs = ["nth", "sch", "scr", "shr", "spl", "spr", "squ", "str", "thr"];

    function convert($word){
        $firstLetter = substr($word, 0 ,1);
        $firstTwoLetters = substr($word, 0 ,2);
        $firstThreeLetters = substr($word, 0 ,3);
        
        if(in_array($firstThreeLetters, $this->trigraphs)){
            $newWord = substr($word,3);
            $newWord .= $firstThreeLetters. "ay";
        }else if (in_array($firstTwoLetters, $this->diagraphs)) {
            $newWord = substr($word,2);
            $newWord .= $firstTwoLetters. "ay";
        }else {
            $newWord = substr($word,1);
            $newWord .= $firstLetter. "ay";
        }
        
        return $newWord;
    }
}