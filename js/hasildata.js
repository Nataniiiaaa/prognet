const form = document.getElementById("biodataForm");
const dataTable = document.getElementById("dataTable");

form.addEventListener("submit", function (e) {
  e.preventDefault();

  const name = document.getElementById("name").value;
  const nim = document.getElementById("nim").value;
  const birthdate = document.getElementById("birthdate").value;
  const phone = document.getElementById("phone").value;
  const email = document.getElementById("email").value;
  const address = document.getElementById("address").value;
  const gender = document.querySelector('input[name="gender"]:checked').value;
  const status = document.getElementById("status").value;
  const major = document.getElementById("major").value;
  const campus = document.getElementById("campus").value;
  const hobbies = document.getElementById("hobbies").value;
  const food = document.querySelectorAll('input[name="food[]"]:checked');
  const drink = document.querySelectorAll('input[name="drink[]"]:checked');
  const favoriteColor = document.getElementById("favorite-color").value;

  const newRow = dataTable.insertRow(-1);

  const cellName = newRow.insertCell(0);
  cellName.innerHTML = name;

  const cellNim = newRow.insertCell(1);
  cellNim.innerHTML = nim;

  const cellBirthdate = newRow.insertCell(2);
  cellBirthdate.innerHTML = birthdate;

  const cellPhone = newRow.insertCell(3);
  cellPhone.innerHTML = phone;

  const cellEmail = newRow.insertCell(4);
  cellEmail.innerHTML = email;

  const cellAddress = newRow.insertCell(5);
  cellAddress.innerHTML = address;

  const cellGender = newRow.insertCell(6);
  cellGender.innerHTML = gender;

  const cellStatus = newRow.insertCell(7);
  cellStatus.innerHTML = status;

  const cellMajor = newRow.insertCell(8);
  cellMajor.innerHTML = major;

  const cellCampus = newRow.insertCell(9);
  cellCampus.innerHTML = campus;

  const cellHobbies = newRow.insertCell(10);
  cellHobbies.innerHTML = hobbies;

  const cellFood = newRow.insertCell(11);
  const foods = [];
  food.forEach((f) => foods.push(f.value));
  cellFood.innerHTML = foods.join(", ");

  const cellDrink = newRow.insertCell(12);
  const drinks = [];
  drink.forEach((d) => drinks.push(d.value));
  cellDrink.innerHTML = drinks.join(", ");

  const cellColor = newRow.insertCell(13);
  cellColor.innerHTML = favoriteColor;

  form.reset();
});