<!-- Comment your typing speed -->
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Typing Test</title>
    <style>
        @import url("https://pro.fontawesome.com/releases/v5.10.0/css/all.css");
        @import url('https://fonts.googleapis.com/css2?family=Rubik&display=swap');
        :root {
            --font: "Rubik", sans-serif;
            --primaryColor: #09f;
        }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: var(--font);
        }
        body {
            background: #f8f9fb;
        }
        .container {
            position: relative;
            width: 100vw;
            height: 100vh;
            overflow: hidden;
        }
        .home {
            position: relative;
            width: 100%;
            height: 100%;
            overflow: hidden;
            background: radial-gradient(circle at 13% 47%, rgba(140, 140, 140,0.03) 0%, rgba(140, 140, 140,0.03) 25%,transparent 25%, transparent 100%),radial-gradient(circle at 28% 63%, rgba(143, 143, 143,0.03) 0%, rgba(143, 143, 143,0.03) 16%,transparent 16%, transparent 100%),radial-gradient(circle at 81% 56%, rgba(65, 65, 65,0.03) 0%, rgba(65, 65, 65,0.03) 12%,transparent 12%, transparent 100%),radial-gradient(circle at 26% 48%, rgba(60, 60, 60,0.03) 0%, rgba(60, 60, 60,0.03) 6%,transparent 6%, transparent 100%),radial-gradient(circle at 97% 17%, rgba(150, 150, 150,0.03) 0%, rgba(150, 150, 150,0.03) 56%,transparent 56%, transparent 100%),radial-gradient(circle at 50% 100%, rgba(25, 25, 25,0.03) 0%, rgba(25, 25, 25,0.03) 36%,transparent 36%, transparent 100%),radial-gradient(circle at 55% 52%, rgba(69, 69, 69,0.03) 0%, rgba(69, 69, 69,0.03) 6%,transparent 6%, transparent 100%),linear-gradient(90deg, rgb(255,255,255),rgb(255,255,255));
        }
        .home img {
            display: block;
            width: 300px;
            height: 200px;
            margin: auto;
            user-select: none;
        }
        .home .box {
            position: relative;
            width: 100%;
            margin-top: 20px;
            color: #495359;
            padding: 20px;
        }
        .box .heading {
            position: absolute;
            top: -30px;
            left: calc((100% - 70%) / 2);
            display: grid;
            place-items: center;
            width: 70%;
            height: 40px;
            background: #09f;
            transform: skew(-15deg) rotate(-2deg);
            color: #fff;
            font-size: 20px;
            background: repeating-linear-gradient(135deg, rgba(0,0,0,0.04) 0px, rgba(0,0,0,0.04) 2px,transparent 2px, transparent 4px),linear-gradient(135deg, rgb(165, 230, 235),rgb(29, 32, 232));
            border-radius: 0 4px;
        }
        .home p {
            text-align: center;
            font-size: 36px;
            transform: skew(-15deg);
        }
        .home .credit a {
            position: absolute;
            bottom: 15px;
            right: 15px;
            display: block;
            text-align: right;
            font-size: 8px;
            margin-top: 5px;
            text-decoration: none;
            color: #495359;
        }
        .home .btn {
            display: block;
            margin: auto;
            width: 120px;
            height: 35px;
            border: none;
            outline: none;
            color: #fff;
            background: #09f;
            border-radius: 4px;
            transition: .5s;
            margin-top: 30px;
        }
        .home .btn:hover {
            background: #0077c6;
        }
         
        .typingPage {
            position: absolute;
            width: 100vw;
            height: 100vh;
            top: 0;
            left: -100%;
            background: #f8f9fb;
            transition: .5s;
        }
        .typingPage.show {
            left: 0;
        }
        .typingPage .head {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 5px 15px;
            color: white;
            background: black;
            user-select: none;
        }
        .head .timer {
            display: flex;
            flex-direction: column;
            color:white;
            user-select: none;
        }
        .timer #time {
            font-size: 12px;
            text-align: right;
        }
        .typingPage #text {
            height: 80%;
            width: 90%;
            background: #fff;
            color: #495359;
            padding: 15px;
            border-radius: 4px;
            box-shadow: 0 0 20px #ddd;
            margin: 15px auto;
            overflow: scroll;
            user-select: none!important;
        }
         
        .typingPage #input {
            position: fixed;
            bottom: 0;
            left: -100%;
            width: 100%;
            height: 40px;
            padding: 12px;
            color: #495359;
            outline: none;
            background: #fff;
            border: 1px solid #ddd;
            transition: .5s;
        }
        .typingPage.show #input {
            left: 0;
        }
        .typingPage .continueBtn {
            position: fixed;
            bottom: 40px;
            left: -100%;
            width: 40px;
            height: 40px;
            outline: none;
            border: none;
            color: #09f;
            background: #fff;
            border-radius: 50%;
            transition: .5s;
            font-size: 34px;
        }
        .typingPage .continueBtn:hover {
            color: #0077c6;
        }
        .typingPage.show .continueBtn {
            left: 85%;
        }
         
         
        .result {
            position: absolute;
            width: 100vw;
            height: 100vh;
            top: 0;
            right: -100%;
            background: #f8f9fb;
            transition: .5s;
        }
        .result.show {
            right: 0;
        }
         
        .result img {
            display: block;
            width: 200px;
            height: 200px;
            margin: auto;
        }
        .result .heading {
            text-align: center;
            color: #495359;
        }
        .result hr {
            display: block;
            width: 90%;
            height: 2px;
            margin: auto;
            border: none;
            background: #ddd;
        }
        .result .row {
            width: 90%;
            margin: 20px auto;
            display: flex;
            justify-content: space-between;
        }
        .result .row p:nth-child(1) {
            color: #495359;
        }
        .result .row p:nth-child(2) {
            color: #5b6b74;
        }
         
        .home .duration {
            width: 80%;
            margin: 20px auto 0 auto;
            text-align: center;
 
        }
 
        .container{
            background-color: skyblue;
        }
        .duration h3 {
            color: #495359;
            text-align: center;
            transform: skew(-15deg);
        }
        .duration div {
            transform: skew(-2deg);
            width: 50%;
            margin: auto;
        }
        .duration input[type="radio"] {
            position: relative;
            -webkit-appearance: none;
            width: 22px;
            height: 18px;
            border: 1px solid #4EABF8;
            outline: none;
            border-radius: 3px;
        }
        .duration input[type="radio"]:before {
            content: "\f00c";
            font-family: "Font Awesome 5 Pro";
            font-weight: 300;
            position: absolute;
            display: grid;
            place-items: center;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            color: #fff;
            background: #4EABF8;
            opacity: 0;
            transition: .5s;
            border-radius: 2px;
        }
        .duration input[type="radio"]:checked:before {
            opacity: 1;
        }
        .duration input[type="radio"]:checked ~ label{
            color: #495359;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="home">
            <img src="https://drive.google.com/uc?id=13q05Ms8m-Qyc_YoWx3u1oaUDIuiPtDgc"/>
            <div class="box">
                <div class="heading">Test Your Typing Speed</div>
                <p>Challenge</p>
                <div class="duration">
                    <h3>Duration</h3>
                    <div>
                        <input type="radio" name="duration" id="5" value="5" checked=""/>
                        <label for="30">30sec</label>
                    </div>
                    <div>
                        <input type="radio" name="duration" id="10" value="10"/>
                        <label for="10">10 min</label>
                    </div>
                    <div>
                        <input type="radio" name="duration" id="15" value="15"/>
                        <label for="15">15 min</label>
                    </div>
                    <div>
                        <input type="radio" name="duration" id="20" value="20"/>
                        <label for="20">20 min</label>
                    </div>
                </div>
                <button class="btn">Start</button>
            </div>
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-format="fluid"
     data-ad-layout-key="-6t+ed+2i-1n-4w"
     data-ad-client="ca-pub-1000865002050330"
     data-ad-slot="7417752648"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
            <small class="credit">
                <a href="https://indiakeproducts.com/">Created by Chetan Shidling</a>
            </small>
        </div>
        <div class="typingPage">
            <div class="head">
                <h4>Typing Test</h4>
                <div class="timer">
                    <p>Timer</p>
                    <p id="time"></p>
                </div>
            </div>
            <div id="text"></div>
            <input type="text" placeholder="Start typing..." id="input">
            <button class="continueBtn"><i class="fas fa-play-circle"></i></button>
        </div>
        <div class="result">
            <img src="https://drive.google.com/uc?id=16QVrgSs5VjurG3abvrugl5MOTVgJiSg4"/>
            <h3 class="heading">Your Result</h3>
            <hr />
            <div class="row">
                <p>Time used</p>
                <p id="timeUsed"></p>
            </div>
            <div class="row">
                <p>Characters</p>
                <p id="characters"></p>
            </div>
            <div class="row">
                <p>Calculated words</p>
                <p id="calWords"></p>
            </div>
            <div class="row">
                <p>Gross speed</p>
                <p id="grossSpeed"></p>
            </div>
            <div class="row">
                <p>Net speed</p>
                <p id="netSpeed"></p>
            </div>
            <div class="row">
                <p>Accuracy</p>
                <p id="accuracy"></p>
            </div>
            <div>
                <center>
                <a class="footerbtn" href="whatsapp://send?text= *Touch this blue line to know about your typing speed and share with your friends* ??? https://www.sudheer.com<b style="font-size: 26px;">Share on Whatsapp</b></a>
                </center>
                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-format="fluid"
     data-ad-layout-key="-6t+ed+2i-1n-4w"
     data-ad-client="ca-pub-1000865002050330"
     data-ad-slot="7417752648"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
            </div>
            <br>
        </div>
         
 
    </div>
<script>
    const $ = s => document.querySelector(s);
    let startTime, endTime;
    $(".btn").addEventListener("click", ()=>{
        $(".typingPage").classList.add("show");
        timer()
        startTime = new Date().getTime();
    })
    $(".continueBtn").addEventListener("click", ()=>{
        endTime = new Date().getTime();
        result()
    })
     
    let totalMin, totalSec, leftMin, leftSec, usedMin, usedSec;
    let showedResult = false;
    function timer() {
        let duration = $("input[name=duration]:checked").value;
        let second = 60;
        let minute = duration - 1;
        totalMin = minute;
        totalSec = second;
         
        minute < 10 ? minute = "0"+minute : minute = minute;
        setInterval(() => {
            if($("#time").innerHTML != "00:00") {
                if(second > 0) {
                    second -= 1;
                }
                else {
                    second = 59;
                    minute -= 1;
                    minute < 10 ? minute = "0"+minute : minute = minute;
                }
                 
                second < 10 ? second = "0"+second : second = second;
                leftMin = minute;
                leftSec = second;
                $("#time").innerHTML = `${minute}:${second}`;
            }
            else {
                if(!showedResult) {
                    endTime = new Date().getTime();
                    result()
                }
            }
        }, 1000)
         
    }
     
     
    function result() {
        showedResult = true;
        $(".result").classList.add("show");
        $("#characters").innerHTML = $("#input").value.length;
        let minutes = ((endTime - startTime) / 1000) / 60;
        let orginalArray = $("#text").innerHTML.split(" ");
        let typedArray = $("#input").value.split(" ");
         
        let characters = $("#input").value.length;
        let correctChar = "";
        let correct = 0;
        let incorrect = 0;
        typedArray.forEach((word, i) => {
            if(word == orginalArray[i]) {
                correct += 1;
                correctChar += `${word} `;
            }
            else {
                incorrect += 1;
            }
        })
         
         
         
        usedMin = totalMin - leftMin;
        usedSec = totalSec - leftSec;
        if(usedSec >= 60) {
            usedMin += 1;
            usedSec = 0;
        }
        usedMin < 10 ? usedMin = "0"+usedMin : usedMin = usedMin;
        usedSec < 10 ? usedSec = "0"+usedSec : usedSec = usedSec;
         
        $("#timeUsed").innerHTML = `${usedMin}:${usedSec}`;
         
        $("#calWords").innerHTML = `${Math.round(characters/5)} words`;
        let grossSpeed = Math.floor((characters / 5) / minutes);
        let netSpeed = Math.floor(grossSpeed - (incorrect / minutes));
        $("#grossSpeed").innerHTML = `${grossSpeed}wpm`;
        $("#netSpeed").innerHTML = `${netSpeed}wpm`;
         
        correctChar = correctChar.slice(0, -1);
        let accuracy = Math.floor((correctChar.length / characters) * 100);
        $("#accuracy").innerHTML = `${accuracy}%`;
    }
     
     
    const paragraph = [
 
        "Once, there was a boy (chetan shidling) who became bored when he watched over the village sheep grazing on the hillside. To entertain himself, he sang out, “Wolf! Wolf! The wolf is chasing the sheep! When the villagers heard the cry, they came running up the hill to drive the wolf away. But, when they arrived, they saw no wolf. The boy was amused when seeing their angry faces.Don’t scream wolf, boy, warned the villagers, when there is no wolf! They angrily went back down the hill.",
 
        "When we talk about motivating others, the justification is the end result (either we want to avoid the pain or go towards pleasure) or what we want to get the person to do. How we achieve the end result, are our alternatives. As a manager, we need to understand the other person's justification and then come up with alternatives. We may then choose the right alternative. However, in general, we choose the first or the emotionally satisfying one. Typically people stop at this level of analysis and start to act. What to you think chetan shidling",
 
        "An ever-growing number of complex and rigid rules plus hard-to-cope-with regulations are now being legislated from state to state. Key federal regulations were formulated by the FDA, FTC, and the CPSC. Each of these federal agencies serves a specific mission. One example: Laws sponsored by the Office of the Fair Debt Collection Practices prevent an agency from purposefully harassing clients in serious debt."
    ];
     
    $("#text").innerHTML = paragraph[Math.floor(Math.random() * paragraph.length)];
</script>
 
</body>
</html>