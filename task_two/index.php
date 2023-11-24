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

  // Get the result of splitIntoGroups
  $result = \task_two\getGroupsResult();

  // Print the result in the specified format
  foreach ($result as $group) {
    $sum = array_sum($group);
    echo implode(',', $group) . " = $sum<br>";
  }
  ?>

</body>

</html>
