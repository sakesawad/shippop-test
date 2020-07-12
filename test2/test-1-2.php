<head>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" rel="stylesheet"> <!--load all styles -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/js/all.min.js"></script>
</head>

<?php

$paintCircleRange = [5,5];

for ($i=1; $i<=5; $i++) {
  echo '<div style="margin-bottom: 5px;">';
  for ($j=1; $j<=9; $j++) {
    if (($j < $paintCircleRange[0]) OR ($j > $paintCircleRange[1])) {
      echo '<i class="fas fa-fw fa-circle" style="color: white;"></i>';
    } else {
      echo '<i class="far fa-fw fa-circle"></i>';
    }
  }
  $paintCircleRange[0]--;
  $paintCircleRange[1]++;
  echo '</div>';
}
