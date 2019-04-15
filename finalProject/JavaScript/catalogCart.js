function cartAdd(clickedID) {
  var targetId = clickedID.concat("Num");
  if (document.getElementById(targetId).value < 5) {
    document.getElementById(targetId).value++;
  }
}

function cartRem(clickedID) {
  var targetId = clickedID.concat("Num");
  if (document.getElementById(targetId).value > 0) {
    document.getElementById(targetId).value--;
  }
}
