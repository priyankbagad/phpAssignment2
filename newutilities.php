<?php
// All validation functions return either true or false.
// 
// Validate string length.
function fIsValidLength($input, $minLength, $maxLength) {
   //returns true of false
   //trim empty spaces from beginning and end
   $input = trim($input);
   $IsValid = (strlen($input) >= $minLength && strlen($input) <= $maxLength);
   return $IsValid;
}

//email address
function fIsValidEmail($email) {
   //validate using php filter function. Returns true or false.
   $email = trim($email);
   if (filter_var($email, FILTER_VALIDATE_EMAIL) === false)
      return false;
   else
      return true;
}
function fIsValidDate($date) 
{
//date must be in format yyyy-mm-dd or yyyy/mm/dd (RFC 3339 format)
   $date = str_replace('-', '/', $date);
   $test_arr = explode('/', $date);
   if (count($test_arr) == 3 &&
           is_numeric($test_arr[0]) &&
           is_numeric($test_arr[1]) &&
           is_numeric($test_arr[2])) {
      //checkdate($month, $day, $year)
      if (checkdate($test_arr[1], $test_arr[2], $test_arr[0])) {
         return true;
      } else {
         return false; //invalid date
      }
   } else {
      return false; //invalid format
   }
}
//state abbreviation
function fIsValidStateAbbr($state) {
   $ValidAbbr = array("AP","AR","AS","BR","CG","GA","GJ","HR","HP","JK","JH","KA","KL","MP","MH","MN","ML","MZ","NL","OR","PB","RJ","SK","TN","TR","UK","UP","WB","AN","CH","DH","DD","DL","LD","PY");

   //trim & change to upper case (to match strings in array)
   $state = trim(strtoupper($state));

   //check if a value exists in an array. 
   return in_array($state, $ValidAbbr);
}

//telephone numbers
function fIsValidAge($age) {
   //remove delimiters and spaces
   $pattern = "/[-,.()\s]/";
   $age = preg_replace($pattern, '', $age);

   //must be 1 or 2 digits
   return (((strlen($age) == 2) || (strlen($age) == 1) )&& is_numeric($age));
}

//phone
function fIsValidPhone($phone) {
   //remove delimiters and spaces
   $patterns = "/[-,.()\s]/";
   $phone = preg_replace($patterns, '', $phone);

   //must be 10 digits
   return ((strlen($phone) == 10) && is_numeric($phone));
}
function fIsValidZip($zip) {
   //remove delimiters and spaces
   $patterns = "/[-,.()\s]/";
   $phone = preg_replace($patterns, '', $zip);

   //must be 10 digits
   return ((strlen($zip) == 6) && is_numeric($zip));
}
?>