#This program checks whether a person can vote or not
<html>
    <title>VOTING CHECKER</title>
    <body>
        <form action="voting.php" method="get">
           Enter your age please 🙏🏻: <input type="number" name="name">
           <input type="submit">
        </form>
        <?php
  if ($_GET["name"]>=18) 
  {
    echo"YES YOU CAN VOTE🤏🏻";
  } elseif($_GET["name"]==17){
    echo"You have to wait one more year";
  } 
  else {
    echo"Sorry you cannot vote";
  }
        ?>
                </body>
</html>
