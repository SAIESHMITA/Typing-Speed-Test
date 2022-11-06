<!DOCTYPE html>
<html>

<head>
	<meta charset=UTF-8" />
	
	<title>PHP Quiz</title>
	
	<style>
	body{ font: 14px Georgia, serif; }

#page-wrap { width: 500px; margin: 0 auto;}

h1  { margin: 25px 0; font: 18px Georgia, Serif; text-transform: uppercase; letter-spacing: 3px; }

#quiz input {
    vertical-align: middle;
}

#quiz ol {
   margin: 0 0 10px 20px;
}

#quiz ol li {
   margin: 0 0 20px 0;
}

#quiz ol li div {
   padding: 4px 0;
}

#quiz h3 {
   font-size: 17px; margin: 0 0 1px 0; color: #666;
}

#results {
    font: 44px Georgia, Serif;
}
	</style>
</head>

<body>

	<div id="page-wrap">

		<h1>Result |tiping</h1>
		
        <?php
		error_reporting(0);
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
			$answer6 = $_POST['question-5-answers'];
			$answer7 = $_POST['question-7-answers'];
			$answer8 = $_POST['question-8-answers'];
			$answer9 = $_POST['question-9-answers'];
			$answer10 = $_POST['question-10-answers'];
		
        
            $totalCorrect = 0;
            
            if ($answer1 == "B") { $totalCorrect++; }
            if ($answer2 == "C") { $totalCorrect++; }
            if ($answer3 == "C") { $totalCorrect++; }
            if ($answer4 == "C") { $totalCorrect++; }
            if ($answer5 == "A") { $totalCorrect++; }
			 if ($answer6 == "B") { $totalCorrect++; }
			  if ($answer7 == "C") { $totalCorrect++; }
			   if ($answer8 == "B") { $totalCorrect++; }
			    if ($answer9 == "A") { $totalCorrect++; }
				 if ($answer10 == "C") { $totalCorrect++; }
            $totalscore = $totalscore	/ 10*100;
		
		if($totalscore < 50)
		{
		echo '<h2>You need to score at least 50% to pass the exam.</h2>';
		}
		else {
		echo '<h2>You have passed the exam and scored '.$totalscore.'%.</h2>';
		}
            echo "<div id='results'>$totalCorrect / 10 correct</div>";
        ?>
	
	</div>

</body>

</html>