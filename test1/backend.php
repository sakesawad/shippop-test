<?php
  $searchType = $_POST['searchType'];
  $listText = $_POST['listText'];
  $inputSearch = $_POST['inputSearch'];

  $initialText = 'List : ['.$listText.']<br>Search : '.$inputSearch.'<br>Result :::<br>';
  $listArray = explode(',', $listText);

  $resultText = '';
  if (empty($listText)) {
    $initialText = 'Invalid Array';
  } elseif (empty($inputSearch)) {
    $initialText = 'Nothing to search';
  } else {
    if ($searchType==1) {
      $resultText = linearSearch($listArray, $inputSearch);
    } else if ($searchType==2) {
      $resultText = binarySearch($listArray, $inputSearch);
    } else {
      $initialText = 'List : ['.$listText.']<br>Result :::<br>';
      $resultText = bubbleSort($listArray, $inputSearch);
    }
  }

  echo $initialText.$resultText;die;

  function linearSearch($listArray, $inputSearch) {
    $resultText = '';
    $isFound = 0;
    for ($i = 0; $i < count($listArray); $i++) {
      $roundNumber = $i + 1;
      if ($listArray[$i] == $inputSearch) {
        $resultText .= 'Round : '.$roundNumber.' ===> '.$inputSearch.' == '.$listArray[$i].' found !!';
        $isFound = 1;
        break;
      } else {
        $resultText .= 'Round : '.$roundNumber.' ===> '.$inputSearch.' != '.$listArray[$i].'<br>';
      }
    }
    if ($isFound==1) {
      return $resultText;
    } else {
      return $resultText.'Nothing Found';
    }
  }

  function binarySearch($listArray, $inputSearch)  {
    $resultText = '';
  	$low = 0;
  	$high = count($listArray) - 1;
    $roundNumber = 1;

  	while ($low <= $high) {
  		$mid = floor(($low + $high) / 2);

  		if ($listArray[$mid] == $inputSearch) {
        $resultText .= 'Round : '.$roundNumber.' ===> '.$inputSearch.' == '.$listArray[$mid].' found !!';
  			return $resultText;
  		} else {
        $resultText .= 'Round : '.$roundNumber.' ===> '.$inputSearch.' != '.$listArray[$mid].'<br>';
      }

  		if ($inputSearch < $listArray[$mid]) {
  			$high = $mid -1;
  		} else {
  			$low = $mid + 1;
  		}

      $roundNumber++;
  	}
  	return $resultText.'Nothing Found';
  }

  function bubbleSort($listArray, $inputSearch) {
    $resultText = '';
    $roundNumber = 1;
    for ($i = 0; $i < count($listArray); $i++) {
      for($j = 0; $j < count($listArray) - $i - 1; $j++) {
        if ($listArray[$j] > $listArray[$j + 1]) {
          $temp = $listArray[$j];
          $listArray[$j] = $listArray[$j+1];
          $listArray[$j + 1] = $temp;

          $printArray = '';
          foreach ($listArray as $listChar) {
            if (empty($printArray)) {
              $printArray .= $listChar;
            } else {
              $printArray .= ','.$listChar;
            }
          }
          $resultText .= 'Round : '.$roundNumber.' ===> [ '.$printArray.' ]<br>';
          $roundNumber++;
        }
      }
    }
    if (empty($resultText)) {
      $resultText = 'Nothing to sort';
    }
    return $resultText;
  }

?>
