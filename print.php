

<?php
function print_title(){
if(isset($_GET['id'])){
echo htmlspecialchars($_GET['id']);
} else{
echo"welcome";
}
}

function print_descripition()
{
  if(isset($_GET['id'])){
    $basename= basename($_GET['id']);
    echo htmlspecialchars(file_get_contents("data/".$basename));
  } else {
    echo "hello world";
  }
}
function print_function(){
  $list = scandir('./data');

  $i = 0;
  while ($i< count($list)) {
    $title = htmlspecialchars($list[$i]);
    if($list[$i] != '.'){
        if($list[$i] != '..') {
      echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>\n";
    }
  }
      $i = $i+1;
  }
}
 ?>
