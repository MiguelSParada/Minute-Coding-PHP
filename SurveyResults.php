<?php


$feedback = $_POST['feedback'];
$improvement = $_POST['improvement'];
$emailAddress = $_POST['emailAddress'];
if (strlen($feedback) > 50 ) {
	echo "Please state how you found this website in 1 to 4 sentences.";
	echo "You will be redirected back to https://MinuteCoding.dev within 5 seconds.";
	echo '<script> setTimeout(function(){
    document.location.href="https://MinuteCoding.dev";
}, 4000); </script>';
}

elseif (strlen($improvement) > 125 ) {
	echo "Please state your suggested improvement in 1 to 2 paragraphs.";
	echo "You will be redirected back to https://MinuteCoding.dev within 5 seconds.";
	echo '<script> setTimeout(function(){
    document.location.href="https://MinuteCoding.dev";
}, 4000); </script>';
}

elseif (strlen($emailAddress) > 40 ) {
	echo "Please shorten your email address to 40 characters";
	echo "You will be redirected back to https://MinuteCoding.dev within 5 seconds.";
	echo '<script> setTimeout(function(){
    document.location.href="https://MinuteCoding.dev";
}, 4000); </script>';
}

else {
	echo "Thank you for submitting your response, you will be redirected back to https://MinuteCoding.dev within 5 seconds.";
$f = fopen("Data.txt", "a");
fwrite($f, "The following response was submitted on: ".  date("H:i, l F jS Y") . "\n");
fwrite($f, "This is the open response for how it was found: " . $_POST['feedback']."\n");
fwrite($f, "This is the open response to how it can be improved: " . $_POST['improvement']. "\n");
fwrite($f, "Email: " . $_POST['emailAddress']. "\n");
fwrite($f, "\n");
fclose($f);
echo '<script> setTimeout(function(){
    document.location.href="https://MinuteCoding.dev";
}, 4000); </script>';

}
?>