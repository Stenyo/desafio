<?php
namespace App;

class Anagram
{
    public static function run($word){
        $aStr = str_split($word);
        $iSize = count($aStr);
        $aResult = "";

        for ($i = 0; $i < $iSize; ++$i) {
            $sFirst = array_shift($aStr);
            $aInner = $aStr;
            $iInner = count($aInner);
            for ($j = 0; $j < $iInner; ++$j) {
                $newWord = strtoupper($sFirst . implode('', $aInner));
                if(in_array($newWord,Words::$ptBr))
                    $newWord = "<b class='alert-danger'>$newWord</b>";

                $aResult .= $newWord . "<br>";
                $sTmp = array_shift($aInner);
                $aInner[] = $sTmp;
            }
            $aStr[] = $sFirst;

        }

        return "<h3>Palavra: <i>$word</i></h3># as palavras encontradas serão <b class='alert-danger'>destacadas.</b> <br><br>$aResult";
    }

}