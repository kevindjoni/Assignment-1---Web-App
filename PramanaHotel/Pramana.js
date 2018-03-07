function validateForm()
{
  let formName = document.forms["bookingForm"]["name"].value;
  let formEmail = document.forms["bookingForm"]["email"].value;
  let formPhone = document.forms["bookingForm"]["phone"].value;
  let formLength = document.forms["bookingForm"]["stayLength"].value;

  if (formName == "")
  {
    alert("Please fill the name field");
    return false;
  }

  else if (formEmail == "")
  {
    alert("Please fill the Email field");
    return false;
  }

  else if (formPhone == "")
  {
    alert("Please fill the Phone field");
    return false;
  }

  else if (formLength == "")
  {
    alert("Please fill the Stay Length field");
    return false;
  }

  else if(formPhone.toString().length < 9 ||
  formPhone.toString().length > 12)
  {
    alert("Phone Number should be more than 10 digit and less than 12 digits");
    return false;
  }

  else if(formLength < 1)
  {
    alert("Stay Length should at least be 1 day");
    return false;
  }

  else
  {

  }
}
