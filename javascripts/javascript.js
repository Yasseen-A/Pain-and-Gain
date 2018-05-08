// Yasseen Ahmanache
// Graded unit 2 project javascript folder

// This is my javascript folder that contains all of the functions for the
// for the buttons on my webpage


//global variables
var calories_burnt = 0;
var calories = 0;

// function that will asks the user to enter their consuming target
function EatingTarget() {
  calories = prompt("How many calories would you like to consume?");
  // if function to make sure that the value entered is a number
  if (calories !== null && isNaN(calories) || calories <= 0) {
    alert("Error - You must enter a positive number");
  } else {
    document.getElementById("CalorieCounter").innerHTML =
      calories + "<span class='countertext'>calories left</span>";
    document.getElementById('CalorieButton').style.display = 'none';
    document.getElementById('Edit_calories').style.visibility = 'visible';
  }
}

// function that will ask the user to input their exercising target
function MyBurningTarget() {
  calories_burnt = prompt("How many calories would you like to burn?");
  // if function to make sure that the value entered is a number
  if (calories_burnt !== null && isNaN(calories_burnt) || calories_burnt <= 0) {
    alert("Error - You must enter a positive number");
  } else {
    document.getElementById("ExerciseCounter").innerHTML =
      calories_burnt + "<span class='countertext'>calories left</span>";
    document.getElementById('ExerciseButton').style.display = 'none';
    document.getElementById('Edit_exercises').style.visibility = 'visible';
  }
}

// function that once the user selects a food from the drop down list it will
// deduct it from the calorie target
function calorie_deductor() {
  var foods = document.food_form.foodList;
  var food_multiplyer = document.food_form.food_quantity;
  var food_total = parseInt(foods.value) * parseInt(food_multiplyer.value);
  var getting_name = document.getElementById("calorie_intakes");
  var food_name= getting_name.options[getting_name.selectedIndex].text;
  // if function to make sure that a target has been entered
  if (typeof calories !== 'undefined' && calories) {
    // if function to check if you've reached your target
    if (calories >=0){
    calories = calories - food_total;
    document.getElementById("CalorieCounter").innerHTML =
      calories + "<span class='countertext'>calories</span>";
    document.myform.food_history.value += newline =
    food_name + " - " + food_total + " calories \n";
    } else {
      alert("You have reached your target");
    }
  } else {
    alert("You need to re/set your target");
  }
}

// This is the function for the button that will allow you enter the calories
// manually of you do not find them on the list
function manual_deductor() {
  var self_calories = document.getElementById("manual_calories").value;
  var name_of_food = document.getElementById("enter_food").value;
  // if function to make sure that a target has been entered
  if (typeof calories !== 'undefined' && calories) {
    // if function to check if you've reached your target
    if (calories >= 0){
    calories = calories - self_calories;
    document.getElementById("CalorieCounter").innerHTML =
      calories + "<span class='countertext'>calories</span>";
    document.myform.food_history.value += newtext =
    name_of_food + " - " + self_calories + " calories \n" ;
    } else {
      alert("You have reached your target");
    }
  } else {
    alert("You need to re/set your target");

  }
}

// function that will allow you to add bicep curls to your exercise target
function bicep_curls_deductor() {
  var sets = document.getElementById("curls_sets").value;
  var reps = document.getElementById("curls_reps").value;
  var bicep_curl = 8;
  // if function to make sure that a target has been entered
  if (typeof calories_burnt !== 'undefined' && calories_burnt) {
    // if function to check if you've reached your target
    if (calories_burnt > 0) {
      calories_burnt = calories_burnt - ((bicep_curl * reps) * sets);
      document.getElementById("ExerciseCounter").innerHTML =
      calories_burnt + "<span class='countertext'>calories</span>";
      document.myform.food_history.value += newline =
      "Bicep Curls" + " - " + sets + " sets " + reps + " reps \n " ;
  } else {
    alert("You have reached your target");
  }
} else {
  alert("You need to re/set your target");
}
}

// function that will allow you to add chin ups to your exercise target
function chin_up_deductor() {
  var sets = document.getElementById("chin_up_sets").value;
  var reps = document.getElementById("chin_up_reps").value;
  var chin_up = 1;
  // if function to make sure that a target has been entered
  if (typeof calories_burnt !== 'undefined' && calories_burnt) {
    // if function to check if you've reached your target
    if (calories_burnt > 0) {
      calories_burnt = calories_burnt - ((chin_up * reps) * sets);
      document.getElementById("ExerciseCounter").innerHTML =
      calories_burnt + "<span class='countertext'>calories</span>";
      document.getElementById("food_log").innerHTML =
      "Chin ups" + " - " + sets + " sets " + reps + " reps \n" ;
  } else {
    alert("You have reached your target");
  }
} else {
  alert("You need to re/set your target");
}
}

// function that will allow you to add dips to your exercise target
function dips_deductor() {
  var sets = document.getElementById("dips_sets").value;
  var reps = document.getElementById("dips_reps").value;
  var dips = 4;
  // if function to make sure that a target has been entered
  if (typeof calories_burnt !== 'undefined' && calories_burnt) {
    // if function to check if you've reached your target
    if (calories_burnt > 0) {
      calories_burnt = calories_burnt - ((dips * reps) * sets);
      document.getElementById("ExerciseCounter").innerHTML =
      calories_burnt + "<span class='countertext'>calories</span>";
      document.myform.food_history.value += newline =
      "Dips" + " - " + sets + " sets " + reps + " reps \n" ;
  } else {
    alert("You have reached your target");
  }
} else {
  alert("You need to re/set your target");
}
}

// function that will allow you to add tricep push down to your exercise target
function triceps_deductor() {
  var sets = document.getElementById("triceps_sets").value;
  var reps = document.getElementById("triceps_reps").value;
  var triceps = 3;
 // if function to make sure that a target has been entered
  if (typeof calories_burnt !== 'undefined' && calories_burnt) {
    // if function to check if you've reached your target
    if (calories_burnt > 0) {
      calories_burnt = calories_burnt - ((triceps * reps) * sets);
      document.getElementById("ExerciseCounter").innerHTML =
      calories_burnt + "<span class='countertext'>calories</span>";
      document.myform.food_history.value += newline =
      "Tricep pushdown" + " - " + sets + " sets " + reps + " reps \n" ;
  } else {
    alert("You have reached your target");
  }
} else {
  alert("You need to re/set your target");
}
}

// function that will allow you to add bar curls to your exercise target
function bar_curl_deductor() {
  var sets = document.getElementById("bar_curl_sets").value;
  var reps = document.getElementById("bar_curl_reps").value;
  var bar_curl = 8;
  // if function to make sure that a target has been entered
  if (typeof calories_burnt !== 'undefined' && calories_burnt) {
    // if function to check if you've reached your target
    if (calories_burnt > 0) {
      calories_burnt = calories_burnt - ((bar_curl * reps) * sets);
      document.getElementById("ExerciseCounter").innerHTML =
      calories_burnt + "<span class='countertext'>calories</span>";
      document.myform.food_history.value += newline =
      "Bar Curls" + " - " + sets + " sets " + reps + " reps \n" ;
  } else {
    alert("You have reached your target");
  }
} else {
  alert("You need to re/set your target");
}
}

// function that will allow you to add leg press to your exercise target
function leg_press_deductor() {
  var sets = document.getElementById("leg_press_sets").value;
  var reps = document.getElementById("leg_press_reps").value;
  var leg_press = 3;
  // if function to make sure that a target has been entered
  if (typeof calories_burnt !== 'undefined' && calories_burnt) {
    // if function to check if you've reached your target
    if (calories_burnt > 0) {
      calories_burnt = calories_burnt - ((leg_press * reps) * sets);
      document.getElementById("ExerciseCounter").innerHTML =
      calories_burnt + "<span class='countertext'>calories</span>";
      document.myform.food_history.value += newline =
      "Leg Press" + " - " + sets + " sets " + reps + " reps \n" ;
  } else {
    alert("You have reached your target");
  }
} else {
  alert("You need to re/set your target");
}
}

// function that will allow you to add squats to your exercise target
function squat_deductor() {
  var sets = document.getElementById("squat_sets").value;
  var reps = document.getElementById("squat_reps").value;
  var squat = 4;
  // if function to make sure that a target has been entered
  if (typeof calories_burnt !== 'undefined' && calories_burnt) {
    // if function to check if you've reached your target
    if (calories_burnt > 0) {
      calories_burnt = calories_burnt - ((squat * reps) * sets);
      document.getElementById("ExerciseCounter").innerHTML =
      calories_burnt + "<span class='countertext'>calories</span>";
      document.myform.food_history.value += newline =
      "Squat" + " - " + sets + " sets " + reps + " reps \n" ;
  } else {
    alert("You have reached your target");
  }
} else {
  alert("You need to re/set your target");
}
}

// function that will allow you to add dead lift to your exercise target
function dead_lift_deductor() {
  var sets = document.getElementById("dead_lift_sets").value;
  var reps = document.getElementById("dead_lift_reps").value;
  var dead_lift = 5;
  // if function to make sure that a target has been entered
  if (typeof calories_burnt !== 'undefined' && calories_burnt) {
    // if function to check if you've reached your target
    if (calories_burnt > 0) {
      calories_burnt = calories_burnt - ((dead_lift * reps) * sets);
      document.getElementById("ExerciseCounter").innerHTML =
      calories_burnt + "<span class='countertext'>calories</span>";
      document.myform.food_history.value += newline =
      "Dead lift" + " - " + sets + " sets " + reps + " reps \n" ;
  } else {
    alert("You have reached your target");
  }
} else {
  alert("You need to re/set your target");
}
}

// function that will allow you to add leg extension to your exercise target
function leg_extension_deductor() {
  var sets = document.getElementById("leg_extension_sets").value;
  var reps = document.getElementById("leg_extension_reps").value;
  var leg_extension = 2;
  // if function to make sure that a target has been entered
  if (typeof calories_burnt !== 'undefined' && calories_burnt) {
    // if function to check if you've reached your target
    if (calories_burnt > 0) {
      calories_burnt = calories_burnt - ((leg_extension * reps) * sets);
      document.getElementById("ExerciseCounter").innerHTML =
      calories_burnt + "<span class='countertext'>calories</span>";
      document.myform.food_history.value += newline =
      "Leg extension" + " - " + sets + " sets " + reps + " reps \n " ;
  } else {
    alert("You have reached your target");
  }
} else {
  alert("You need to re/set your target");
}
}

// function that will allow you to add bench press to your exercise target
function bench_press_deductor() {
  var sets = document.getElementById("bench_press_sets").value;
  var reps = document.getElementById("bench_press_reps").value;
  var bench_press = 3;
  // if function to make sure that a target has been entered
  if (typeof calories_burnt !== 'undefined' && calories_burnt) {
    // if function to check if you've reached your target
    if (calories_burnt > 0) {
      calories_burnt = calories_burnt - ((bench_press * reps) * sets);
      document.getElementById("ExerciseCounter").innerHTML =
      calories_burnt + "<span class='countertext'>calories</span>";
      document.myform.food_history.value += newline =
      "Bench Press" + " - " + sets + " sets " + reps + " reps \n" ;
  } else {
    alert("You have reached your target");
  }
} else {
  alert("You need to re/set your target");
}
}

// function that will allow you to add bent over row to your exercise target
function bent_over_row_deductor() {
  var sets = document.getElementById("bent_over_row_sets").value;
  var reps = document.getElementById("bent_over_row_reps").value;
  var bent_over_row = 2;
// if function to make sure that a target has been entered
  if (typeof calories_burnt !== 'undefined' && calories_burnt) {
    // if function to check if you've reached your target
    if (calories_burnt > 0) {
      calories_burnt = calories_burnt - ((bent_over_row * reps) * sets);
      document.getElementById("ExerciseCounter").innerHTML =
      calories_burnt + "<span class='countertext'>calories</span>";
      document.myform.food_history.value += newline =
      "Bent over row" + " - " + sets + " sets " + reps + " reps \n" ;
  } else {
    alert("You have reached your target");
  }
} else {
  alert("You need to re/set your target");
}
}

// function that will allow you to add press ups to your exercise target
function press_up_deductor() {
  var sets = document.getElementById("press_up_sets").value;
  var reps = document.getElementById("press_up_reps").value;
  var press_up = 1;
// if function to make sure that a target has been entered
  if (typeof calories_burnt !== 'undefined' && calories_burnt) {
    // if function to check if you've reached your target
    if (calories_burnt > 0) {
      calories_burnt = calories_burnt - ((press_up * reps) * sets);
      document.getElementById("ExerciseCounter").innerHTML =
      calories_burnt + "<span class='countertext'>calories</span>";
      document.myform.food_history.value += newline =
      "Press up" + " - " + sets + " sets " + reps + " reps \n" ;
  } else {
    alert("You have reached your target");
  }
} else {
  alert("You need to re/set your target");
}
}

// function that will allow you to add high pulls to your exercise target
function high_pull_deductor() {
  var sets = document.getElementById("high_pull_sets").value;
  var reps = document.getElementById("high_pull_reps").value;
  var high_pull = 3;
// if function to make sure that a target has been entered
  if (typeof calories_burnt !== 'undefined' && calories_burnt) {
    // if function to check if you've reached your target
    if (calories_burnt > 0) {
      calories_burnt = calories_burnt - ((high_pull * reps) * sets);
      document.getElementById("ExerciseCounter").innerHTML =
      calories_burnt + "<span class='countertext'>calories</span>";
      document.myform.food_history.value += newline =
      "High pull" + " - " + sets + " sets " + reps + " reps\n " ;
  } else {
    alert("You have reached your target");
  }
} else {
  alert("You need to re/set your target");
}
}

// function that will allow you to add crunches to your exercise target
function crunch_deductor() {
  var sets = document.getElementById("crunch_sets").value;
  var reps = document.getElementById("crunch_reps").value;
  var crunch = 1;
// if function to make sure that a target has been entered
  if (typeof calories_burnt !== 'undefined' && calories_burnt) {
    // if function to check if you've reached your target
    if (calories_burnt > 0) {
      calories_burnt = calories_burnt - ((crunch * reps) * sets);
      document.getElementById("ExerciseCounter").innerHTML =
      calories_burnt + "<span class='countertext'>calories</span>";
      document.myform.food_history.value += newline =
      "Crunch" + " - " + sets + " sets " + reps + " reps \n" ;
  } else {
    alert("You have reached your target");
  }
} else {
  alert("You need to re/set your target");
}
}

// function that will allow you to add medicine ball twist to your exercise target
function ball_twist_deductor() {
  var sets = document.getElementById("ball_twist_sets").value;
  var reps = document.getElementById("ball_twist_reps").value;
  var ball_twist = 1;
// if function to make sure that a target has been entered
  if (typeof calories_burnt !== 'undefined' && calories_burnt) {
    // if function to check if you've reached your target
    if (calories_burnt > 0) {
      calories_burnt = calories_burnt - ((ball_twist * reps) * sets);
      document.getElementById("ExerciseCounter").innerHTML =
      calories_burnt + "<span class='countertext'>calories</span>";
      document.myform.food_history.value += newline =
      "Medicine Ball Twist" + " - " + sets + " sets " + reps + " reps \n" ;
  } else {
    alert("You have reached your target");
  }
} else {
  alert("You need to re/set your target");
}
}

// function that will allow you to add planking to your exercise target
function plank_deductor() {
  var seconds = document.getElementById("plank_seconds").value;
  var plank = 0.3;
// if function to make sure that a target has been entered
  if (typeof calories_burnt !== 'undefined' && calories_burnt) {
    // if function to check if you've reached your target
    if (calories_burnt > 0) {
      calories_burnt = calories_burnt - (plank * seconds);
      document.getElementById("ExerciseCounter").innerHTML =
      calories_burnt + "<span class='countertext'>calories</span>";
      document.myform.food_history.value += newline =
      "Plank" + " - " + seconds + " seconds \n";
  } else {
    alert("You have reached your target");
  }
} else {
  alert("You need to re/set your target");
}
}

// function that will allow you to add running to your exercise target
function running_deductor() {
  var minutes = document.getElementById("running_minutes").value;
  var running = 10;
// if function to make sure that a target has been entered
  if (typeof calories_burnt !== 'undefined' && calories_burnt) {
    // if function to check if you've reached your target
    if (calories_burnt > 0) {
      calories_burnt = calories_burnt - (running * minutes);
      document.getElementById("ExerciseCounter").innerHTML =
      calories_burnt + "<span class='countertext'>calories</span>";
      document.myform.food_history.value += newline =
      "Running" + " - " + minutes + " minutes \n";
  } else {
    alert("You have reached your target");
  }
} else {
  alert("You need to re/set your target");
}
}

// function that will allow you to add cycling to your exercise target
function cycling_deductor() {
  var minutes = document.getElementById("cycling_minutes").value;
  var cycling = 8.5;
// if function to make sure that a target has been entered
  if (typeof calories_burnt !== 'undefined' && calories_burnt) {
    // if function to check if you've reached your target
    if (calories_burnt > 0) {
      calories_burnt = calories_burnt - (cycling * minutes);
      document.getElementById("ExerciseCounter").innerHTML =
      calories_burnt + "<span class='countertext'>calories</span>";
      document.myform.food_history.value += newline =
      "Cycling" + " - " + minutes + " minutes\n ";
  } else {
    alert("You have reached your target");
  }
} else {
  alert("You need to re/set your target");
}
}

// function that will allow you to add rowing to your exercise target
function rowing_deductor() {
  var minutes = document.getElementById("rowing_minutes").value;
  var rowing = 7;
// if function to make sure that a target has been entered
  if (typeof calories_burnt !== 'undefined' && calories_burnt) {
    // if function to check if you've reached your target
    if (calories_burnt > 0) {
      calories_burnt = calories_burnt - (rowing * minutes);
      document.getElementById("ExerciseCounter").innerHTML =
      calories_burnt + "<span class='countertext'>calories</span>";
      document.myform.food_history.value += newline =
      "Rowing" + " - " + minutes + " minutes \n";
  } else {
    alert("You have reached your target");
  }
} else {
  alert("You need to re/set your target");
}
}

function addtext() {
	var newtext = document.food_form.getElementById("manual_calories").value;
		document.myform.outputtext.value = "";
  }

  function saveTextAsFile()
  {
  	var textToWrite = document.getElementById("food_log").value;
  	var textFileAsBlob = new Blob([textToWrite], {type:'text/plain'});
  	var fileNameToSaveAs = document.getElementById("inputFileNameToSaveAs").value;

  	var downloadLink = document.createElement("a");
  	downloadLink.download = fileNameToSaveAs;
  	downloadLink.innerHTML = "Download File";
  	if (window.webkitURL != null)
  	{
  		// Chrome allows the link to be clicked
  		// without actually adding it to the DOM.
  		downloadLink.href = window.webkitURL.createObjectURL(textFileAsBlob);
  	}
  	else
  	{
  		// Firefox requires the link to be added to the DOM
  		// before it can be clicked.
  		downloadLink.href = window.URL.createObjectURL(textFileAsBlob);
  		downloadLink.onclick = destroyClickedElement;
  		downloadLink.style.display = "none";
  		document.body.appendChild(downloadLink);
  	}

  	downloadLink.click();
  }
