<?php

include("db.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src='https://cdn.tailwindcss.com'></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            'black_russian': '#181820',
            'Gunmetal': '#30303D',
          },
          steps: {
            '22': '22ch',
          },
          keyframes: {
            appear: {
              '0%': {
                opacity: 0
              },
              '50%': {
                opacity: 0
              },
              '100%': {
                opacity: 1
              },
            }
          },
          fontFamily: {
            'mono': ['"Courier New"', 'Courier', 'monospace'],
          }
        },
      },
    }
  </script>
</head>

<body class='bg-black_russian w-screen h-screen justify-center overflow-hidden'>
  <div class="flex flex-col w-screen h-screen">
    <div class="flex flex-row justify-center">
      <form action="add-user.php" method="POST">
        <input type="email" placeholder="Email" name="email" class="bg-black_russian w-96 h-12 border border-Gunmetal rounded-lg text-neutral-200 pl-4">
        <input type="password" placeholder="Password" name="password" class="bg-black_russian w-96 h-12 border border-Gunmetal rounded-lg text-neutral-200 pl-4" name="" id="">
        <input type="submit" value="add" name="submit" class="cursor-pointer bg-gradient-to-tr from-blue-600 to-green-500 bg-black_russian w-96 h-12 border border-Gunmetal rounded-lg text-neutral-200 pl-4">
      </form>
    </div>

    <div class="">
      <?php

      $query = "SELECT * FROM user";

      $result = mysqli_query($mysqli, $query);

      if (mysqli_num_rows($result) == 0) {
        echo "<p>There are no users yet.<p>";
      } else {
        while($row = mysqli_fetch_array($result)){
          echo "<div class='flex justify-center content-center border border-Gunmetal rounded-lg'>";
          echo "<div class='bg-black_russian w-96 h-12 text-neutral-200 pl-4'>ID: " . $row['ID'] . "</div>";
          echo "<div class='bg-black_russian w-96 h-12 text-neutral-200 pl-4'>Email: " . $row['Email'] . "</div>";
          echo "<div class='bg-black_russian w-96 h-12 text-neutral-200 pl-4'>Password: " . $row['Password'] . "</div>";
          echo "</div>";
        }
      }
      ?>
    </div>
  </div>
</body>

</html>