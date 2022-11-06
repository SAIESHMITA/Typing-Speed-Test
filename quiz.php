<html>
<head>
	<meta charset=UTF-8" />
	
	<title>tiping QUIZ | Webdevtrick.com</title>
	
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
body {
 background-image: url("https://www.shutterstock.com/search/quiz");
 background-color: #cccccc;
}
	</style>

</head>

<body>

	<div id="page-wrap">

		<h1 style="color:red">Simple Quiz Built On PHP</h1>
		
		<form action="result.php" method="post" id="quiz">
		<div class="container">
<h1 style="color:red">Multiple Choice Questions Answers</h1>
<p style="color:blue">Please fill the details and answers the all questions-</p>
<div class="form-group">
<strong>Name*:</strong><br/>
 <input type="text" name="name" value="" required/>
</div>
<div class="form-group">
<strong>Age*:</strong><br/> 
<input type="text" name="age" value="" required/>
</div>
<div class="form-group">
<strong>Phone*:</strong><br/> 
<input type="text" name="phone" value="" required/>
</div>

		
            <ol>
            
                <li>
                
                    <h3>Ques1 : THE k-finger is also known as</h3>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A">A) right index </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">B) right middle</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C">C) right ring</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D">D) Other</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>Which finger is used to strike the p?...</h3>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                        <label for="question-2-answers-A">A)j-finger</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B">B) -finger</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C">C) k-finger</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D">D) Digital Marketing</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>which finger is used to strike the comma?</h3>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                        <label for="question-3-answers-A">rifht index</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B">B) right ring</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C">C)right middle</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                        <label for="question-3-answers-D">D) None Of Above These</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>What is the character between the t and s in "it,s"</h3>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                        <label for="question-4-answers-A">A)slash/label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B">B)camaa</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C">C)apostrophe</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D">D) Any Other</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>Which finger is used to strike the apostrophe?</h3>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                        <label for="question-5-answers-A">A)right pinky</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B">B) right index</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                        <label for="question-5-answers-C">C) right middle</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                        <label for="question-5-answers-D">D) All Above These</label>
                    </div>
                
                </li>
				<li>
                
                    <h3>Which finger is used to strike the i</h3>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-5-answers-A" value="A" />
                        <label for="question-6-answers-A">A) j-finger</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-5-answers-B" value="B" />
                        <label for="question-6-answers-B">B) k-finger</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-5-answers-C" value="C" />
                        <label for="question-6-answers-C">C) -finger</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-5-answers-D" value="D" />
                        <label for="question-6-answers-D">D) All Above These</label>
                    </div>
                
                </li>
 
 <li>
                
                    <h3>Which finger is used to strike the apostrophe?</h3>
                    
                    <div>
                        <input type="radio" name="question-7-answers" id="question-5-answers-A" value="A" />
                        <label for="question-7-answers-A">A) j-finger</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-7-answers" id="question-5-answers-B" value="B" />
                        <label for="question-7-answers-B">B) k-finger</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-7-answers" id="question-5-answers-C" value="C" />
                        <label for="question-7-answers-C">C) right pinky</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-7-answers" id="question-5-answers-D" value="D" />
                        <label for="question-7-answers-D">D) All Above These</label>
                    </div>
                
                </li>
 
 <li>
                
                    <h3>the k-finger is also your?</h3>
                    
                    <div>
                        <input type="radio" name="question-8-answers" id="question-5-answers-A" value="A" />
                        <label for="question-8-answers-A">A) right index</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-8-answers" id="question-5-answers-B" value="B" />
                        <label for="question-8-answers-B">B) right middle</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-8answers" id="question-5-answers-C" value="C" />
                        <label for="question-8-answers-C">C) right ring</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-8-answers" id="question-5-answers-D" value="D" />
                        <label for="question-8-answers-D">D) All Above These</label>
                    </div>
                
                </li>
 
 <li>
                
                    <h3>the;-finger is also known as</h3>
                    
                    <div>
                        <input type="radio" name="question-9-answers" id="question-5-answers-A" value="A" />
                        <label for="question-9-answers-A">A) right pinky</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-9answers" id="question-5-answers-B" value="B" />
                        <label for="question-9-answers-B">B) right middle</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-9-answers" id="question-5-answers-C" value="C" />
                        <label for="question-9-answers-C">C) right index</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-9-answers" id="question-5-answers-D" value="D" />
                        <label for="question-9-answers-D">D) All Above These</label>
                    </div>
                
                </li>
 
 <li>
                
                    <h3>Which finger is used to strike the slash?</h3>
                    
                    <div>
                        <input type="radio" name="question-10-answers" id="question-5-answers-A" value="A" />
                        <label for="question-10-answers-A">A) k-finger</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-10-answers" id="question-5-answers-B" value="B" />
                        <label for="question-10-answers-B">B) j-finger</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-10-answers" id="question-5-answers-C" value="C" />
                        <label for="question-10-answers-C">C)right pinky</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-10-answers" id="question-5-answers-D" value="D" />
                        <label for="question-10-answers-D">D) All Above These</label>
                    </div>
                
                </li>
 
            
            </ol>
            
            <input type="submit" value="Submit" class="submitbtn" />
		
		</form>
	
	</div>


</body>

</html>