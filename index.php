
<?php
  function letterChange($input) {
    $inputArr = str_split($input);
    $alphabetArr = str_split('abcdefghijklmnopqrstuvwxyz');
    $vowelArr = str_split('aeiou');
    $resultArr = array();

    foreach ($inputArr as $ikey => $ival) {
      foreach ($alphabetArr as $akey => $aval) {
        if ($ival == $aval) {
          $resultArr[] = $alphabetArr[$akey + 1];
        }
      }
    }

    foreach ($resultArr as $rKey => $rval) {
      foreach ($vowelArr as $vkey => $vval) {
        if ($rval == $vval) {
          $resultArr[$rKey] = chr(ord($rval) - 32);
        }
      }
    }

    return implode($resultArr);
  }

  echo letterChange('biswajit');