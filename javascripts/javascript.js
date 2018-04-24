var calories_burnt = 0;
var calories = 0;

function EatingTarget() {
  calories = prompt("How many calories would you like to consume?");
  if (calories !== null && isNaN(calories)) {
    alert("Error - You must enter a number");
  } else {
    document.getElementById("CalorieCounter").innerHTML =
      calories + "<span class='countertext'>calories</span>";
    document.getElementById('CalorieButton').style.display = 'none';
  }
}

function MyBurningTarget() {
  calories_burnt = prompt("How many calories would you like to burn?");
  if (calories_burnt !== null && isNaN(calories_burnt)) {
    alert("Error - You must enter a number");
  } else {
    document.getElementById("ExerciseCounter").innerHTML =
      calories_burnt + "<span class='countertext'>calories</span>";
    document.getElementById('ExerciseButton').style.display = 'none';
  }
}


function calorie_deductor() {
  var foods = document.food_form.foodList;
  var food_multiplyer = document.food_form.food_quantity;
  if (typeof calories !== 'undefined' && calories) {
    if (calories >=0){
    calories = calories - (parseInt(foods.value) * parseInt(food_multiplyer.value));
    document.getElementById("CalorieCounter").innerHTML =
      calories + "<span class='countertext'>calories</span>";
    } else {
      alert("You have reached your target");
    }
  } else {
    alert("You need to re/set your target");
  }
}


function manual_deductor() {
  var self_calories = document.getElementById("manual_calories").value;
  if (typeof calories !== 'undefined' && calories) {
    if (calories >= 0){
    calories = calories - self_calories;
    document.getElementById("CalorieCounter").innerHTML =
      calories + "<span class='countertext'>calories</span>";
    } else {
      alert("You have reached your target");
    }
  } else {
    alert("You need to re/set your target");

  }
}


function bicep_curls_deductor() {
  var sets = document.getElementById("curls_sets").value;
  var reps = document.getElementById("curls_reps").value;
  var bicep_curl = 8;

  if (typeof calories_burnt !== 'undefined' && calories_burnt) {
    if (calories_burnt > 0) {
      calories_burnt = calories_burnt - ((bicep_curl * reps) * sets);
      document.getElementById("ExerciseCounter").innerHTML =
      calories_burnt + "<span class='countertext'>calories</span>";
  } else {
    alert("You have reached your target");
  }
} else {
  alert("You need to re/set your target");
}
}

function chin_up_deductor() {
  var sets = document.getElementById("chin_up_sets").value;
  var reps = document.getElementById("chin_up_reps").value;
  var chin_up = 1;

  if (typeof calories_burnt !== 'undefined' && calories_burnt) {
    if (calories_burnt > 0) {
      calories_burnt = calories_burnt - ((chin_up * reps) * sets);
      document.getElementById("ExerciseCounter").innerHTML =
      calories_burnt + "<span class='countertext'>calories</span>";
  } else {
    alert("You have reached your target");
  }
} else {
  alert("You need to re/set your target");
}
}

function dips_deductor() {
  var sets = document.getElementById("dips_sets").value;
  var reps = document.getElementById("dips_reps").value;
  var dips = 4;

  if (typeof calories_burnt !== 'undefined' && calories_burnt) {
    if (calories_burnt > 0) {
      calories_burnt = calories_burnt - ((dips * reps) * sets);
      document.getElementById("ExerciseCounter").innerHTML =
      calories_burnt + "<span class='countertext'>calories</span>";
  } else {
    alert("You have reached your target");
  }
} else {
  alert("You need to re/set your target");
}
}

function triceps_deductor() {
  var sets = document.getElementById("triceps_sets").value;
  var reps = document.getElementById("triceps_reps").value;
  var triceps = 3;

  if (typeof calories_burnt !== 'undefined' && calories_burnt) {
    if (calories_burnt > 0) {
      calories_burnt = calories_burnt - ((triceps * reps) * sets);
      document.getElementById("ExerciseCounter").innerHTML =
      calories_burnt + "<span class='countertext'>calories</span>";
  } else {
    alert("You have reached your target");
  }
} else {
  alert("You need to re/set your target");
}
}

function bar_curl_deductor() {
  var sets = document.getElementById("bar_curl_sets").value;
  var reps = document.getElementById("bar_curl_reps").value;
  var bar_curl = 8;

  if (typeof calories_burnt !== 'undefined' && calories_burnt) {
    if (calories_burnt > 0) {
      calories_burnt = calories_burnt - ((bar_curl * reps) * sets);
      document.getElementById("ExerciseCounter").innerHTML =
      calories_burnt + "<span class='countertext'>calories</span>";
  } else {
    alert("You have reached your target");
  }
} else {
  alert("You need to re/set your target");
}
}

function leg_press_deductor() {
  var sets = document.getElementById("leg_press_sets").value;
  var reps = document.getElementById("leg_press_reps").value;
  var leg_press = 3;

  if (typeof calories_burnt !== 'undefined' && calories_burnt) {
    if (calories_burnt > 0) {
      calories_burnt = calories_burnt - ((leg_press * reps) * sets);
      document.getElementById("ExerciseCounter").innerHTML =
      calories_burnt + "<span class='countertext'>calories</span>";
  } else {
    alert("You have reached your target");
  }
} else {
  alert("You need to re/set your target");
}
}

function squat_deductor() {
  var sets = document.getElementById("squat_sets").value;
  var reps = document.getElementById("squat_reps").value;
  var squat = 4;

  if (typeof calories_burnt !== 'undefined' && calories_burnt) {
    if (calories_burnt > 0) {
      calories_burnt = calories_burnt - ((squat * reps) * sets);
      document.getElementById("ExerciseCounter").innerHTML =
      calories_burnt + "<span class='countertext'>calories</span>";
  } else {
    alert("You have reached your target");
  }
} else {
  alert("You need to re/set your target");
}
}

function dead_lift_deductor() {
  var sets = document.getElementById("dead_lift_sets").value;
  var reps = document.getElementById("dead_lift_reps").value;
  var dead_lift = 5;

  if (typeof calories_burnt !== 'undefined' && calories_burnt) {
    if (calories_burnt > 0) {
      calories_burnt = calories_burnt - ((dead_lift * reps) * sets);
      document.getElementById("ExerciseCounter").innerHTML =
      calories_burnt + "<span class='countertext'>calories</span>";
  } else {
    alert("You have reached your target");
  }
} else {
  alert("You need to re/set your target");
}
}

function leg_extension_deductor() {
  var sets = document.getElementById("leg_extension_sets").value;
  var reps = document.getElementById("leg_extension_reps").value;
  var leg_extension = 2;

  if (typeof calories_burnt !== 'undefined' && calories_burnt) {
    if (calories_burnt > 0) {
      calories_burnt = calories_burnt - ((leg_extension * reps) * sets);
      document.getElementById("ExerciseCounter").innerHTML =
      calories_burnt + "<span class='countertext'>calories</span>";
  } else {
    alert("You have reached your target");
  }
} else {
  alert("You need to re/set your target");
}
}
