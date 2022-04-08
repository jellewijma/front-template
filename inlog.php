<?php

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
          fontFamily: {
            'mono': ['"Courier New"', 'Courier', 'monospace'],
            'dosis': ['Dosis', 'sans-serif'],
          }
        },
      },
    }
  </script>
</head>
<body class='bg-black_russian h-screen w-screen overflow-hidden font-mono'>
    <div class="w-screen h-screen flex justify-center">
        <form action="login.php" method="POST" class="flex flex-col justify-center">
            <input type="email" placeholder="Email" name="email" class="bg-black_russian w-96 h-12 border border-Gunmetal rounded-lg text-neutral-200 pl-4">
            <input type="password" placeholder="Password" name="password" id="" class="my-6 bg-black_russian w-96 h-12 border border-Gunmetal rounded-lg text-neutral-200 pl-4">
            <input type="submit" value="Login" name="submit" class="cursor-pointer bg-gradient-to-tr from-blue-600 to-green-500 w-96 h-12 border border-Gunmetal rounded-lg text-neutral-200 pl-4">
        </form>
    </div>
</body>
</html>