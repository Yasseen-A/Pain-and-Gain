var calories_burnt = 0;

function EatingTarget() {
  var calories = prompt("How many calories would you like to consume?");
  if (calories !==null) {
    document.getElementById("CalorieCounter").innerHTML =
      calories + "<span class='countertext'>calories</span>";
    document.getElementById('CalorieButton').style.display = 'none';
  }
}

function MyBurningTarget() {
  calories_burnt = prompt("How many calories would you like to burn?");
  if (calories_burnt !== null) {
    document.getElementById("ExerciseCounter").innerHTML =
      calories_burnt + "<span class='countertext'>calories</span>";
    document.getElementById('ExerciseButton').style.display = 'none';
  }
}

function TEST(){

  var Subtract = prompt("How much would you like to Subtract");
  if (Subtract !== null) {
      calories_burnt = calories_burnt - Subtract;
    document.getElementById("ExerciseCounter").innerHTML =
    calories_burnt + "<span class='countertext'>calories</span>";

}
}

function calorie_deductor(){
  var foods = document.food_form.foodList;
  var food_multiplyer = document.food_form.food_quantity;
  if (calories_burnt > 0){
  calories_burnt = calories_burnt - (parseInt(foods.value) * parseInt(food_multiplyer.value));
  document.getElementById("ExerciseCounter").innerHTML =
  calories_burnt + "<span class='countertext'>calories</span>";
}
else {
  alert("you have not entered a value");
}
}

function manual_deductor(){
  var self_calories = document.getElementById("manual_calories").value;
  if (calories_burnt > 0){
  calories_burnt = calories_burnt - self_calories;
  document.getElementById("ExerciseCounter").innerHTML =
  calories_burnt + "<span class='countertext'>calories</span>";
}
else{
  alert("you have not entered a value");
}
}
