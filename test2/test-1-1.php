<head>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" rel="stylesheet"> <!--load all styles -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/js/all.min.js"></script>
</head>
<?php

for ($i=1; $i<=5; $i++) {
  echo '<div style="margin-bottom: 5px;">';
  for ($j=5; $j>=1; $j--) {
    if ($j > $i) {
      echo '<i class="fas fa-fw fa-circle" style="color: white;"></i>';
    } else {
      echo '<i class="far fa-fw fa-circle"></i>';
    }
  }
  echo '</div>';
}
