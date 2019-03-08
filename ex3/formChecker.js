function checkRadio()
{
  b1 = document.getElementById('b1').checked;
  b2 = document.getElementById('b2').checked;
  b3 = document.getElementById('b3').checked;
  b = document.getElementById('b3');


  if((b1 == false) && (b2 == false) && (b3 == false))
  {
    alert("Please select a shipping option");
  }
}


function checkQuan()
{
  q1 = document.getElementById('field1').value;
  q2 = document.getElementById('field2').value;
  q3 = document.getElementById('field3').value;
  q = document.getElementById('field3');

  if(q1 == "" || q2 == "" || q3 == "")
  {
    alert("Enter an amount for each quanitity field.");
  }
}
