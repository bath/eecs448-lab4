<html>
<body>

  <h1>Quiz Results.</h1>
  <p style="font-size:22px">Great job Dr. Quiz Taker, you got a <?php echo percentage()."%";?></p><br><br>

<?php #question one output
  echo "<p>--------------------------------------------------------------------------------------------</p>";
  echo "<p>Question 1: How many astronauts have died in space?</p>";
  echo "<p>You answered: ".questionOne()."</p>";
  echo "<p>Correct answer: All major governments have not released the actual number of astronauts that have died in space, with the USSR/Russians losing many cosmonauts they have not yet admitted.</p>";
  echo "<p>--------------------------------------------------------------------------------------------</p>";
?>

<?php #question two output
  echo "<p>Question 2: Is Chris Hadfield cool?</p>";
  echo "<p>You answered: ".questionTwo()."</p>";
  echo "<p>Correct answer: Yeah.</p>";
  echo "<p>--------------------------------------------------------------------------------------------</p>";
?>

<?php #question three output
  echo "<p>Question 3: What is the velocity of the International Space Station?</p>";
  echo "<p>You answered: ".questionThree()."</p>";
  echo "<p>Correct answer: 4.76 miles/s</p>";
  echo "<p>--------------------------------------------------------------------------------------------</p>";
?>

<?php #question four output
  echo "<p>Question 4: As of october 9th, 2015, how many visitors did has the ISS had?</p>";
  echo "<p>You answered: ".questionFour()."</p>";
  echo "<p>Correct answer: 220.</p>";
  echo "<p>--------------------------------------------------------------------------------------------</p>";
?>

<?php #question five output
  echo "<p>Question 5: What space ship travels/ed the fastest?</p>";
  echo "<p>You answered: ".questionFive()."</p>";
  echo "<p>Correct answer: Sputnik 1.</p>";
  echo "<p>--------------------------------------------------------------------------------------------</p>";
?>

<?php
  grader();
?>



</body>
</html>

<?php #answer functions
  $answer = "";

  function questionOne()
  {
    if(isset($_POST["q1a1"]))
    {
      $answer = "All major governments have not released the actual number of astronauts that have died in space, with the USSR/Russians losing many cosmonauts they have not yet admitted.";
      return($answer);
    }
    elseif (isset($_POST["q1a2"])) {
      $answer = "4.";
      return($answer);
    }
    elseif (isset($_POST["q1a3"])) {
      $answer = "18.";
      return($answer);
    }
    elseif (isset($_POST["q1a4"])) {
      $answer = "We didn't go to space.";
      return($answer);
    }
  }

  function questionTwo()
  {
    if(isset($_POST["q2a1"]))
    {
      $answer = "I guess.";
      return($answer);
    }
    elseif (isset($_POST["q2a2"])) {
      $answer = "Yeah.";
      return($answer);
    }
    elseif (isset($_POST["q2a3"])) {
      $answer = "I like his comedy specials.";
      return($answer);
    }
    elseif (isset($_POST["q2a4"])) {
      $answer = "We didn't go to space.";
      return($answer);
    }
  }

  function questionThree()
  {
    if(isset($_POST["q3a1"]))
    {
      $answer = "Pretty fast.";
      return($answer);
    }
    elseif (isset($_POST["q3a2"])) {
      $answer = "4.77 miles/s.";
      return($answer);
    }
    elseif (isset($_POST["q3a3"])) {
      $answer = "4.76 miles/s.";
      return($answer);
    }
    elseif (isset($_POST["q3a4"])) {
      $answer = "We didn't go to space.";
      return($answer);
    }
  }

  function questionFour()
  {
    if(isset($_POST["q4a1"]))
    {
      $answer = "219.";
      return($answer);
    }
    elseif (isset($_POST["q4a2"])) {
      $answer = "221.";
      return($answer);
    }
    elseif (isset($_POST["q4a3"])) {
      $answer = "220.";
      return($answer);
    }
    elseif (isset($_POST["q4a4"])) {
      $answer = "We didn't go to space.";
      return($answer);
    }
  }

  function questionFive()
  {
    if(isset($_POST["q5a1"]))
    {
      $answer = "International Space Station.";
      return($answer);
    }
    elseif (isset($_POST["q5a2"])) {
      $answer = "Mir.";
      return($answer);
    }
    elseif (isset($_POST["q5a3"])) {
      $answer = "Skylab.";
      return($answer);
    }
    elseif (isset($_POST["q5a4"])) {
      $answer = "Sputnik 1.";
      return($answer);
    }
  }
?>


<?php #grading the results of the test

$total = 5;
$correct = 0;


function grader() #returns % on the quiz
{
  $total = 5;
  $correct = 0;

  if(isset($_POST["q1a1"]))
  {
    $correct = $correct + 1;
  }
  if(isset($_POST["q2a2"]))
  {
    $correct = $correct + 1;
  }
  if(isset($_POST["q3a3"]))
  {
    $correct = $correct + 1;
  }
  if(isset($_POST["q4a3"]))
  {
    $correct = $correct + 1;
  }
  if(isset($_POST["q5a5"]))
  {
    $correct = $correct + 1;
  }

  echo "<p>You answered ".$correct." out of ".$total." correctly.</p>";
  echo "<p>".percentage()."% out of 100%.<p>";
  echo "<p>".makeFun()."</p>";
}

?>

<?php
  function makeFun()
  {
    if(percentage() <= 10)
    {
      echo "You will not be attending the University of Kansas Anymore, pack your bags chump.";
    }
    elseif(percentage() <= 25)
    {
      echo "That's it? You couldn't muster any more stength? That was the best you could possibly do? This is just sad. I can't believe I have to think about how terrible you did. Your mother never loved you.";
    }
    elseif(percentage() <=50)
    {
      echo "Nice going numb nuts. You haven't been listening to anything I have said, have you?";
    }
    elseif(percentage() <=75)
    {
      echo "You are a subpar student. Learn to swim now before you drown in the falsehood that the United States government teaches you.";
    }
    else
    {
      echo "Congratulation. You are the most honorable student in our class room it brings my eyes full of tears.";
    }
  }


 ?>



<?php
  function percentage()
  {
    $total = 5;
    $correct = 0;

    if(isset($_POST["q1a1"]))
    {
      $correct = $correct + 1;
    }
    if(isset($_POST["q2a2"]))
    {
      $correct = $correct + 1;
    }
    if(isset($_POST["q3a3"]))
    {
      $correct = $correct + 1;
    }
    if(isset($_POST["q4a3"]))
    {
      $correct = $correct + 1;
    }
    if(isset($_POST["q5a5"]))
    {
      $correct = $correct + 1;
    }

    $per = 0;
    $per = $correct/$total;
    $per = $per*100;
    $per = $per;
    return $per;
  }


 ?>
