<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Task Two Result</title>
</head>

<body>
  <form action="TaskTwo.php" method="post">
    <label for="number">Enter how many groups to split?</label>
    <input type="text" name="number" id="number" required>
    <br>
    <input type="submit" value="Submit">
  </form>
  <?php
  function displayResult(array $result): void
  {
    foreach ($result as $group) {
      $sum = array_sum($group);
      echo '<p>' . implode(',', $group) . " = $sum</p>";
    }
  }
  ?>
</body>

</html>