<?php
  $stmt = $pdo->query('SELECT * FROM recipes');

  while($row = $stmt->fetch()){
      echo $row->burgername . '<br/>';
  }