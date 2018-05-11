<!--
Yasseen Ahmanache
Graded unit 2 project
Description - My graded unit project is a fitness based web app, it contains a
variety of different functions and features that make it what it is like the
built in calorie counters for consuming and burning which are affected by the
list of foods that we have as well as the exercises.
-->

<?php

session_start();

?>

<!DOCTYPE html>
<html>

<!-- this is the beginning of the head for my website-->

<head>
  <meta charset="utf-8">
  <title>Pain and Gain</title>
  <link rel="icon" type="image/ico" href="./photos/icon.png">
  <!-- These are all of the stylesheets and javascripts that I have linked in
  my header -->
  <link rel="stylesheet" href="./stylesheets/plans.css">
  <script src="./javascripts/javascript.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="./stylesheets/calorie_counter.css">
  <link rel="stylesheet" href="./stylesheets/front_page.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <link rel="stylesheet" href="./stylesheets/exercise_page.css">
  <link rel="stylesheet" href="./stylesheets/exercises.css">
  <link rel="stylesheet" href="./stylesheets/history_page.css">
  <link rel="stylesheet" href="./stylesheets/login.css">
</head>

<!-- this is the beginning of the body for my website-->
<header>
  <!--div for the title of my website-->
  <div class="Logo">
    <div class="nav-login">
      <!--php script that will allow the user to log into my website-->
      <?php
        if (isset($_SESSION['u_id'])){
        	echo '<form action="includes/logout.inc.php" method="POST">
      					<button type="submit"  name="submit">Logout</button>
      				</form>';
        	} else {
            	echo'<form action="includes/login.inc.php" method="POST">
                        <input type="text" name="uid" placeholder="username/email" title="enter username or password">
                        <input type="password" name="pwd" placeholder="password" title="enter password">
                        <button type="submit" name="submit" title="button to log in">Login</button>
                        <a href="signup.php" title="Go to sign up page">Sign up</a>
                      </form>';
            }
      ?>
    </div class="image_holder">
    <!--image that is located at the top of the page-->
    <center> <img class="page_logo" src="./photos/title.png"></center>
  </div>
</header>


<body>

  <!-- div for my background image-->
  <div class="combo1">

    <body background="./photos/background.png">
  </div>

  <!--the wrapper is what contains all of the contents of my website within the middle
of the page-->
  <div class="wrapper">

    <!--this is the navigation bar that is located underneath the header of the page-->
    <div class="topnav">
      <button id="home_page" title="Go to Home page ">Home</button>
      <button id="showTarget" title="Go to your plans page">Current Plan</button>
      <button id="showCalorieCounter" title="Go to the foods page">Calorie Counter</button>
      <button id="showExercises" title="Go to the exercises page">Exercises</button>
      <button id="showHistory" title="Go to the history page">History</button>
    </div>

    <!-- This div contains the contents for the everything that you see in the
    home page-->
    <div class="home_display">

      <!-- this div shows the introduction for the website-->
      <div class="Introduction">

        <h1>Welcome to Pain and Gain</h1>
        <br>
        <p>Looking to change your lifestyle around then you've come to the right place.</p>
        <p>We have a variety of features that will ensure that you will get results, </p>
        <p> from our very own calorie counter to our exercises </p>
        <br>
        <p>So what are you waiting for? Press the button to get started now </p>
      </div>

      <!--button that will take you to the current plan page so that you can enter the
targets-->
      <form>
        <center><input type="button" id="button" value="Get Started" title="Go to the plans page" /></center>
      </form>

    </div>
    <!--end of the home page-->

    <!-- This div contains the contents for the plans that will calculate your targets-->
    <div class="plans">

      <div class="Headings">

        <h1 class="Calorie_heading">Eating Target</h1>
        <h1 class="Exercising_heading">Exercising Target</h1>

      </div>

      <!-- The two buttons that will allow the user to input their target -->
      <div class="button_group">
        <button id="CalorieButton" onclick="EatingTarget()" title="Press to enter your consuming target">Consuming Target</button>
        <button id="ExerciseButton" onclick="MyBurningTarget()" title="Press to enter your exercising target">Exercising Target</button>
      </div>

      <!-- these are the paragraphs that will display the text for the target-->
      <p id="CalorieCounter"></p>
      <p id="ExerciseCounter"></p>

      <br>
      <br>
      <!-- these two buttons will allow the user to edit their target if they make
      a mistake-->
      <button id="Edit_calories" onclick="EatingTarget()" title="Press to edit the calorie target">Edit Target</button>
      <button id="Edit_exercises" onclick="MyBurningTarget()" title="Pres to edit the exercise target">Edit Target</button>

    </div>
    <!-- End of the current plan page-->


    <!--the beginning of the calories page-->
    <div class="food_tab">

      <!--this form contains the list of the various different foods and their calories value-->
      <form name="food_form">
        <div id="calorie_intake">
          <select name="foodList" id="calorie_intakes">
      <option value="0"> - Please select an item - </option>
      <option value="74">Tomato Soup 74 cal</option>
      <option value="239">Pankakes 239 cal</option>
      <option value="240">Bagel 240 cal</option>
      <option value="500">Full breakfast 500 cal</option>
      <option value="200">Cheese sandwich 200 cal</option>
      <option value="120">Salad 120 cal</option>
      <option value="420">Steak and chips 420 cal</option>
      <option value="306">Chicken fajitas 306 cal</option>
      <option value="620">Burger and chips 620 cal</option>
      <option value="18">Tomato 18 cal</option>
      <option value="30">Soft Drink 30 cal</option>
      <option value="47">Orange 47 cal</option>
      <option value="252">Doughnut 252 cal</option>
      <option value="155">Chocolate 155 cal</option>
      <option value="50">Sweets 50 cal</option>
      <option value="53">Bread 53 cal</option>
      <option value="16">Crackers 16 cal</option>
      <option value="180">Cereal 180 cal</option>
      <option value="91">Scrambled egg 91 cal</option>
      <option value="445">Fish&Chips 445cal</option>
      <option value="192">Fried Chicken 192 cal</option>
      <option value="163">Rice cal 163</option>
      <option value="600">Curry 600 cal</option>
      <option value="125">Porridge 125 cal</option>
      <option value="100">Yogurt 100 cal</option>
      <option value="770">Mixed kebab 770 cal</option>
      <option value="310">Macarooni cheese 310 cal</option>
      <option value="277">Fruit Pie 277 cal</option>
      <option value="209">Stew 209 cal</option>
    </select>
        </div>
        <!--this form is so that the user can choose their quantitiy of their selected food-->
        <div class="quantitiy">
          <select name="food_quantity">
      <option value="1">- Quantity -</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>

    </select>
        </div>
      </form>

      <!--button that will add the food and the quantity chosen-->
      <button id="add_food" onclick="calorie_deductor()" title="Add food to deduct from your target">Add</button>
      <br>

      <h2 class="option_header">Can't find it? Enter your own</h2>

      <!--input box that will allow the user to enter the food and calories manually-->
      <input type="text" id="enter_food" placeholder="Food name">
      <input type="number" min="1" id="manual_calories" placeholder="Calories">
      <br>
      <!--button that will allow the user to add the manual calries-->
      <button id="manual_entry" onclick="manual_deductor()" title="Add your own food">Add</button>

    </div>

    <!-- this div contains the buttons that will allow the user to choose a body
    part that they exercised on to be deducted from their target-->
    <div class="exercise_tab">

      <!--button that will take you to the arms page-->
      <button id="arms" title="Takes you to the arms exercises">Arms</button>
      <!--button that will take you to the legs page-->
      <button id="legs" title="Takes you to the legs exercises">Legs</button>

      <br>
      <!--button that will take you to the upper body page-->
      <button id="upper_body" title="takes you to the upper body exercise">Upper Body</button>
      <!--button that will take you to the lower body page-->
      <button id="lower_body" title="takes you to the lower body exercises">Lower body</button>

      <br>
      <!--button that will take you to the cardio page-->
      <button id="cardio" title="takes you to the cardio exercises">Cardio</button>
    </div>

    <!--beginning of the arm exercises page-->
    <div class="arm_exercises">

      <!--div for bicep curl exercise-->
      <div>
        <img src="./photos/bicep_curl.png" class="bicep_curl">
        <br>
        <h2>Bicep Curls</h2>
        <!--inputs that will allow the user to enter their sets and reps-->
        <input type="number" min="1" id="curls_sets" placeholder="Sets" title="Enter the number of sets">
        <input type="number" min="1" id="curls_reps" placeholder="Reps" title="Enter the number of reps">
        <br>
        <!-- button that will deduct the sets and reps from the exercise counter-->
        <button id="add_curls" onclick="bicep_curls_deductor()" title="add exercise to target">Add Bicep Curls</button>
      </div>

      <br>

      <!--div for chin up exercise-->
      <div>
        <img src="./photos/chin_up.png" class="chin_up">
        <br>
        <h2>Chin Ups</h2>
        <!--inputs that will allow the user to enter their sets and reps-->
        <input type="number" min="1" id="chin_up_sets" placeholder="Sets" title="Enter the number of sets">
        <input type="number" min="1" id="chin_up_reps" placeholder="Reps" title="Enter the number of reps">
        <br>
        <!-- button that will deduct the sets and reps from the exercise counter-->
        <button id="add_chin_ups" onclick="chin_up_deductor()" title="add exercise to target">Add Chin Ups</button>
      </div>

      <br>
      <br>

      <!--div for dips exercise-->
      <div>
        <img src="./photos/dips.png" class="dips">
        <br>
        <h2>Dips</h2>
        <!--inputs that will allow the user to enter their sets and reps-->
        <input type="number" min="1" id="dips_sets" placeholder="Sets" title="Enter the number of sets">
        <input type="number" min="1" id="dips_reps" placeholder="Reps" title="Enter the number of reps">
        <br>
        <!-- button that will deduct the sets and reps from the exercise counter-->
        <button id="add_dips" onclick="dips_deductor()" title="add exercise to target">Add dips</button>
      </div>

      <br>

      <!--div for tricep pushdown exercise-->
      <div>
        <img src="./photos/tricep_pushdown.png" class="triceps">
        <br>
        <h2>Triceps Push Down</h2>
        <!--inputs that will allow the user to enter their sets and reps-->
        <input type="number" min="1" id="triceps_sets" placeholder="Sets" title="Enter the number of sets">
        <input type="number" min="1" id="triceps_reps" placeholder="Reps" title="Enter the number of reps">
        <br>
        <!-- button that will deduct the sets and reps from the exercise counter-->
        <button id="add_triceps" onclick="triceps_deductor()" title="add exercise to target">Add Tricep Pushdown</button>
      </div>

      <br>
      <br>

      <!--div for bar curl exercise-->
      <div>
        <img src="./photos/bar_curl.png" class="bar_curl">
        <br>
        <h2>Bar Curl</h2>
        <!--inputs that will allow the user to enter their sets and reps-->
        <input type="number" min="1" id="bar_curl_sets" placeholder="Sets" title="Enter the number of sets">
        <input type="number" min="1" id="bar_curl_reps" placeholder="Reps" title="Enter the number of reps">
        <br>
        <!-- button that will deduct the sets and reps from the exercise counter-->
        <button id="add_bar_curl" onclick="bar_curl_deductor()" title="add exercise to target">Add Bar Curls</button>
      </div>

    </div>
    <!--end of arm exercises-->

    <!--beginning of the leg exercises page-->
    <div class="leg_exercises">

      <div>
        <img src="./photos/leg_press.png" class="leg_press">
        <br>
        <h2>Leg Press</h2>
        <!--inputs that will allow the user to enter their sets and reps-->
        <input type="number" min="1" id="leg_press_sets" placeholder="Sets" title="Enter the number of sets">
        <input type="number" min="1" id="leg_press_reps" placeholder="Reps" title="Enter the number of reps">
        <br>
        <!-- button that will deduct the sets and reps from the exercise counter-->
        <button id="add_leg_press" onclick="leg_press_deductor()" title="add exercise to target">Add Leg Press</button>
      </div>

      <br>
      <br>
      <br>

      <div>
        <img src="./photos/squat.png" class="squat">
        <br>
        <h2>Squat</h2>
        <!--inputs that will allow the user to enter their sets and reps-->
        <input type="number" min="1" id="squat_sets" placeholder="Sets" title="Enter the number of sets">
        <input type="number" min="1" id="squat_reps" placeholder="Reps" title="Enter the number of reps">
        <br>
        <!-- button that will deduct the sets and reps from the exercise counter-->
        <button id="add_squat" onclick="squat_deductor()" title="add exercise to target">Add Squat</button>
      </div>

      <br>
      <br>

      <div>
        <img src="./photos/dead_lift.png" class="dead_lift">
        <br>
        <h2>Dead Lift</h2>
        <!--inputs that will allow the user to enter their sets and reps-->
        <input type="number" min="1" id="dead_lift_sets" placeholder="Sets" title="Enter the number of sets">
        <input type="number" min="1" id="dead_lift_reps" placeholder="Reps" title="Enter the number of reps">
        <br>
        <!-- button that will deduct the sets and reps from the exercise counter-->
        <button id="add_dead_lift" onclick="dead_lift_deductor()" title="add exercise to target">Add Dead lift</button>
      </div>

      <br>
      <br>

      <div>
        <img src="./photos/leg_extension.png" class="leg_extension">
        <br>
        <h2>Leg Extension</h2>
        <!--inputs that will allow the user to enter their sets and reps-->
        <input type="number" min="1" id="leg_extension_sets" placeholder="Sets" title="Enter the number of sets">
        <input type="number" min="1" id="leg_extension_reps" placeholder="Reps" title="Enter the number of reps">
        <br>
        <!-- button that will deduct the sets and reps from the exercise counter-->
        <button id="add_leg_extension" onclick="leg_extension_deductor()" title="add exercise to target">Add Leg Extension</button>
      </div>

    </div>
    <!--end of leg exercises-->

    <!--beginning of the upper body exercises page-->
    <div class="upper_body_exercises">

      <div>
        <img src="./photos/bench_press.png" class="bench_press">
        <br>
        <h2>Bench Press</h2>
        <!--inputs that will allow the user to enter their sets and reps-->
        <input type="number" min="1" id="bench_press_sets" placeholder="Sets" title="Enter the number of sets">
        <input type="number" min="1" id="bench_press_reps" placeholder="Reps" title="Enter the number of reps">
        <br>
        <!-- button that will deduct the sets and reps from the exercise counter-->
        <button id="add_bench_press" onclick="bench_press_deductor()" title="add exercise to target">Add Bench Press</button>
      </div>

      <br>
      <br>


      <div>
        <img src="./photos/bent_over_row.png" class="bent_over_row">
        <br>
        <h2>Bent Over Row</h2>
        <!--inputs that will allow the user to enter their sets and reps-->
        <input type="number" min="1" id="bent_over_row_sets" placeholder="Sets" title="Enter the number of sets">
        <input type="number" min="1" id="bent_over_row_reps" placeholder="Reps" title="Enter the number of reps">
        <br>
        <!-- button that will deduct the sets and reps from the exercise counter-->
        <button id="add_bent_over_row" onclick="bent_over_row_deductor()" title="add exercise to target">Add Bent Over Row</button>
      </div>

      <br>
      <br>

      <div>
        <img src="./photos/press_up.png" class="press_up">
        <br>
        <h2>Press up</h2>
        <!--inputs that will allow the user to enter their sets and reps-->
        <input type="number" min="1" id="press_up_sets" placeholder="Sets" title="Enter the number of sets">
        <input type="number" min="1" id="press_up_reps" placeholder="Reps" title="Enter the number of reps">
        <br>
        <!-- button that will deduct the sets and reps from the exercise counter-->
        <button id="add_press_up" onclick="press_up_deductor()" title="add exercise to target">Add Press up</button>
      </div>

      <br>
      <br>

      <div>
        <img src="./photos/high_pull.png" class="high_pull">
        <br>
        <h2>Barbell High Pull</h2>
        <!--inputs that will allow the user to enter their sets and reps-->
        <input type="number" min="1" id="high_pull_sets" placeholder="Sets" title="Enter the number of sets">
        <input type="number" min="1" id="high_pull_reps" placeholder="Reps" title="Enter the number of reps">
        <br>
        <!-- button that will deduct the sets and reps from the exercise counter-->
        <button id="add_high_pull" onclick="high_pull_deductor()" title="add exercise to target">Add High Pull</button>
      </div>

    </div>
    <!--end of upper body exercises-->

    <!--beginning of the lower body exercises page-->
    <div class="lower_body_exercises">

      <div>
        <img src="./photos/crunch.png" class="crunch">
        <br>
        <h2>Crunch</h2>
        <!--inputs that will allow the user to enter their sets and reps-->
        <input type="number" min="1" id="crunch_sets" placeholder="Sets" title="Enter the number of sets">
        <input type="number" min="1" id="crunch_reps" placeholder="Reps" title="Enter the number of reps">
        <br>
        <!-- button that will deduct the sets and reps from the exercise counter-->
        <button id="add_crunch" onclick="crunch_deductor()" title="add exercise to target">Add Crunch</button>
      </div>

      <br>
      <br>

      <div>
        <img src="./photos/ball_twist.png" class="ball_twist">
        <br>
        <h2>Medicine Ball Twist</h2>
        <!--inputs that will allow the user to enter their sets and reps-->
        <input type="number" min="1" id="ball_twist_sets" placeholder="Sets" title="Enter the number of sets">
        <input type="number" min="1" id="ball_twist_reps" placeholder="Reps" title="Enter the number of reps">
        <br>
        <!-- button that will deduct the sets and reps from the exercise counter-->
        <button id="add_ball_twist" onclick="ball_twist_deductor()" title="add exercise to target">Add Medicine Ball Twist</button>
      </div>

      <br>
      <br>

      <div>
        <img src="./photos/plank.png" class="plank">
        <br>
        <h2>Plank</h2>
        <!--input that will allow the user to enter seconds manually-->
        <input type="number" min="1" id="plank_seconds" placeholder="Seconds" title="Enter the number of seconds">
        <br>
        <!-- button that will calculate the calories from the seconds spent planking-->
        <button id="add_plank" onclick="plank_deductor()" title="add exercise to target">Add Plank</button>
      </div>


    </div>
    <!--end of lower body exercises-->

    <!--beginning of the cardio exercises page-->
    <div class="cardio_exercises">

      <div>
        <img src="./photos/running.png" class="running">
        <br>
        <h2>Running</h2>
        <!--input that will allow the user to enter minutes manually-->
        <input type="number" min="1" id="running_minutes" placeholder="Minutes" title="Enter the number of minutes">
        <br>
        <!-- button that will calculate the calories from the minutes spent running-->
        <button id="add_running" onclick="running_deductor()" title="add exercise to target">Add Running</button>
      </div>

      <br>
      <br>
      <br>

      <div>
        <img src="./photos/rowing.png" class="rowing">
        <br>
        <h2>Rowing</h2>
        <!--input that will allow the user to enter minutes manually-->
        <input type="number" min="1" id="rowing_minutes" placeholder="Minutes" title="Enter the number of minutes">
        <br>
        <!-- button that will calculate the calories from the minutes spent rowing-->
        <button id="add_rowing" onclick="rowing_deductor()" title="add exercise to target">Add Rowing</button>
      </div>

      <br>
      <br>
      <br>

      <div>
        <img src="./photos/cycling.png" class="cycling">
        <br>
        <h2>Cycling</h2>
        <!--input that will allow the user to enter minutes manually-->
        <input type="number" min="1" id="cycling_minutes" placeholder="Minutes" title="Enter the number of minutes">
        <br>
        <!-- button that will calculate the calories from the minutes spent cycling-->
        <button id="add_cycling" onclick="cycling_deductor()" title="add exercise to target">Add Cycling</button>
      </div>
    </div>
    <!--end of cardio exercises-->

    <div class="history_page">
      <form name="myform">
        <h1>History</h1>
        <textarea id="food_log" name="food_history" rows="15" cols="40"></textarea>
      </form>

      <center>
        <p class="file_ask">Filename to Save As:</p>
      </center>
      <center><input id="inputFileNameToSaveAs" title="Enter the name of the file you want to save it as"></input>
      </center>
      <center><button id="save_button" onclick="saveTextAsFile()" title="Click to downlaod the history">Save History</button></center>
    </div>

    <!-- this is the scripting that will hide divs once another button from the navigation bar is clicked-->
    <script>
      $(document).ready(function() {
        $("#home_page").click(function() {
          $(".plans").hide();
          $(".food_tab").hide();
          $(".exercise_tab").hide();
          $(".home_display").show();
          $(".arm_exercises").hide();
          $(".leg_exercises").hide();
          $(".upper_body_exercises").hide();
          $(".lower_body_exercises").hide();
          $(".cardio_exercises").hide();
          $(".history_page").hide();
        });
        $("#button").click(function() {
          $(".plans").show();
          $(".food_tab").hide();
          $(".exercise_tab").hide();
          $(".home_display").hide();
          $(".arm_exercises").hide();
          $(".leg_exercises").hide();
          $(".upper_body_exercises").hide();
          $(".lower_body_exercises").hide();
          $(".cardio_exercises").hide();
          $(".history_page").hide();
        });
        $("#showCalorieCounter").click(function() {
          $(".plans").hide();
          $(".food_tab").show();
          $(".exercise_tab").hide();
          $(".home_display").hide();
          $(".arm_exercises").hide();
          $(".leg_exercises").hide();
          $(".upper_body_exercises").hide();
          $(".lower_body_exercises").hide();
          $(".cardio_exercises").hide();
          $(".history_page").hide();
        });
        $("#showTarget").click(function() {
          $(".plans").show();
          $(".food_tab").hide();
          $(".exercise_tab").hide();
          $(".home_display").hide();
          $(".arm_exercises").hide();
          $(".leg_exercises").hide();
          $(".upper_body_exercises").hide();
          $(".lower_body_exercises").hide();
          $(".cardio_exercises").hide();
          $(".history_page").hide();
        });
        $("#showExercises").click(function() {
          $(".plans").hide();
          $(".food_tab").hide();
          $(".exercise_tab").show();
          $(".home_display").hide();
          $(".arm_exercises").hide();
          $(".leg_exercises").hide();
          $(".upper_body_exercises").hide();
          $(".lower_body_exercises").hide();
          $(".cardio_exercises").hide();
          $(".history_page").hide();
        });
        $("#arms").click(function() {
          $(".plans").hide();
          $(".food_tab").hide();
          $(".exercise_tab").hide();
          $(".home_display").hide();
          $(".arm_exercises").show();
          $(".leg_exercises").hide();
          $(".upper_body_exercises").hide();
          $(".lower_body_exercises").hide();
          $(".cardio_exercises").hide();
          $(".history_page").hide();
        });
        $("#legs").click(function() {
          $(".plans").hide();
          $(".food_tab").hide();
          $(".exercise_tab").hide();
          $(".home_display").hide();
          $(".arm_exercises").hide();
          $(".leg_exercises").show();
          $(".upper_body_exercises").hide();
          $(".lower_body_exercises").hide();
          $(".cardio_exercises").hide();
          $(".history_page").hide();
        });
        $("#upper_body").click(function() {
          $(".plans").hide();
          $(".food_tab").hide();
          $(".exercise_tab").hide();
          $(".home_display").hide();
          $(".arm_exercises").hide();
          $(".leg_exercises").hide();
          $(".upper_body_exercises").show();
          $(".lower_body_exercises").hide();
          $(".cardio_exercises").hide();
          $(".history_page").hide();
        });
        $("#lower_body").click(function() {
          $(".plans").hide();
          $(".food_tab").hide();
          $(".exercise_tab").hide();
          $(".home_display").hide();
          $(".arm_exercises").hide();
          $(".leg_exercises").hide();
          $(".upper_body_exercises").hide();
          $(".lower_body_exercises").show();
          $(".cardio_exercises").hide();
          $(".history_page").hide();
        });
        $("#cardio").click(function() {
          $(".plans").hide();
          $(".food_tab").hide();
          $(".exercise_tab").hide();
          $(".home_display").hide();
          $(".arm_exercises").hide();
          $(".leg_exercises").hide();
          $(".upper_body_exercises").hide();
          $(".lower_body_exercises").hide();
          $(".cardio_exercises").show();
          $(".history_page").hide();
        });
        $("#showHistory").click(function() {
          $(".plans").hide();
          $(".food_tab").hide();
          $(".exercise_tab").hide();
          $(".home_display").hide();
          $(".arm_exercises").hide();
          $(".leg_exercises").hide();
          $(".upper_body_exercises").hide();
          $(".lower_body_exercises").hide();
          $(".cardio_exercises").hide();
          $(".history_page").show();
        });

      });
    </script>
  </div>

  </body>

</html>
