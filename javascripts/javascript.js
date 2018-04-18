
  function EatingTarget() {
    var calories = prompt("How many calories would you like to consume?");
    if (calories != null) {
      document.getElementById("CalorieCounter").innerHTML =
        calories + "<span class='countertext'>calories</span>";
      document.getElementById('CalorieButton').style.display = 'none';
    }
  }

  function MyBurningTarget() {
    var calories_burnt = prompt("How many calories would you like to burn?");
    if (calories_burnt != null) {
      document.getElementById("ExerciseCounter").innerHTML =
        calories_burnt + "<span class='countertext'>calories</span>";
      document.getElementById('ExerciseButton').style.display = 'none';
    }
  }
