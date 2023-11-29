<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Task Two Result</title>
</head>

<body>
  <?php
  require_once './TaskTwo.php';

  foreach ($result as $group) {
    $sum = array_sum($group);
    echo '<p>' . implode(',', $group) . " = $sum</p>";
  }
  ?>
</body>

</html>