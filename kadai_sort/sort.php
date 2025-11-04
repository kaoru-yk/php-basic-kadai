<!DOCTYPE html>
  <html lang="ja">

    <head>
      <meta charset="UTF-8">
      <title>PHP基礎編</title>
    </head>

    <body>
      <p>
          <?php
          function sort_2way(array &$arr, bool $asc = true) {
          if ($asc) {
          sort($arr);   // 昇順ソート
          } else {
          rsort($arr);  // 降順ソート
          }
          }

          $nums = [15, 4, 18, 23, 10];

          // 昇順にソートして出力
          sort_2way($nums, true);
          echo "昇順にソートします。<br>";
          foreach ($nums as $num) {
          echo $num . "<br>";
          }

          // 降順にソートして出力
          sort_2way($nums, false);
          echo "降順にソートします。<br>";
          foreach ($nums as $num) {
          echo $num . "<br>";
          }
          ?>

       </p>
    </body>

  </html>