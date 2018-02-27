<?php
  $title = "Pet Grooming Salon";
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
        <h1><?php echo $title; ?></h1>
        <?php
        $firstTime = ($_SERVER['REQUEST_METHOD'] != 'POST');
	    $firstName='' ;
	    $firstname ='';
	    $lastname ='';
	    $street ='' ;
	    $city = '';
	    $state = '';
	    $email ='' ;
	    $zip ='' ;
	    $phone = '';
	    $states = array (
            'AL'=>'Alabama',
            'AK'=>'Alaska',
            'AZ'=>'Arizona',
            'AR'=>'Arkansas',
            'CA'=>'California',
            'CO'=>'Colorado',
            'CT'=>'Connecticut',
            'DE'=>'Delaware',
            'DC'=>'District Of Columbia',
            'FL'=>'Florida',
            'GA'=>'Georgia',
            'HI'=>'Hawaii',
            'ID'=>'Idaho',
            'IL'=>'Illinois',
            'IN'=>'Indiana',
            'IA'=>'Iowa',
            'KS'=>'Kansas',
            'KY'=>'Kentucky',
            'LA'=>'Louisiana',
            'ME'=>'Maine',
            'MD'=>'Maryland',
            'MA'=>'Massachusetts',
            'MI'=>'Michigan',
            'MN'=>'Minnesota',
            'MS'=>'Mississippi',
            'MO'=>'Missouri',
            'MT'=>'Montana',
            'NE'=>'Nebraska',
            'NV'=>'Nevada',
            'NH'=>'New Hampshire',
            'NJ'=>'New Jersey',
            'NM'=>'New Mexico',
            'NY'=>'New York',
            'NC'=>'North Carolina',
            'ND'=>'North Dakota',
            'OH'=>'Ohio',
            'OK'=>'Oklahoma',
            'OR'=>'Oregon',
            'PA'=>'Pennsylvania',
            'RI'=>'Rhode Island',
            'SC'=>'South Carolina',
            'SD'=>'South Dakota',
            'TN'=>'Tennessee',
            'TX'=>'Texas',
            'UT'=>'Utah',
            'VT'=>'Vermont',
            'VA'=>'Virginia',
            'WA'=>'Washington',
            'WV'=>'West Virginia',
            'WI'=>'Wisconsin',
            'WY'=>'Wyoming',
        );
		
		// variables for pet
		$petName = '';
	    $petNameError = '';
	    $petTypeError = '';
        $petType = '';
        $appointmentTime = '';
	    $format = 'Y-m-d H:i:s';
        $timeError = '';
        $timeParsed = '';
		$holidays = array(
            date("M-d-Y",mktime(0,0,0,1,1,0)), 
            date("M-d-Y",mktime(0,0,0,1,15,0)), 
            date("M-d-Y",mktime(0,0,0,5,28,0)), 
            date("M-d-Y",mktime(0,0,0,7,4,0)), 
            date("M-d-Y",mktime(0,0,0,9,3,0)), 
            date("M-d-Y",mktime(0,0,0,10,31,0)), 
            date("M-d-Y",mktime(0,0,0,11,11,0)), 
            date("M-d-Y",mktime(0,0,0,12,25,0))
		);
        $isSaturday = false;
         $isSunday = false;
        $prices = array(
            30.00,
            50.00,
            80.00,
            70.00,
            100.00);
        $isChecked = false;
        $checkboxError = '';
        $validData = true;
	  
	    // if user has already submitted...
	    if (!$firstTime) {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $street = $_POST['street'];
            $city = $_POST['city'];
            $state = $_POST['state'];
            $email = $_POST['email'];
            $zip = $_POST['zip'];
            $phone = $_POST['phone'];
            $state =$_POST['state'];
	   }
	    //Error variables
	    $firstNameError = '';
        $lastNameError = '';
	    $emailError ='';
	    $phoneError ='';
	    $streetError =''; $cityError =''; $zipError='';$stateError=''; $ccErr='';
	  
	    echo '</pre>';
	    //Validation for first name
	    if (!$firstTime) {
	        if (empty($firstname))  {
		        $firstNameError= 'First name is required<br>';
        } 
        else if(strlen($firstname) < 3) {
		    $firstNameError= 'First name should be atleast 3 characters long.'; 
	    }
	    else
		    echo 'Name: '.$firstname.' ';
	  
	    //Validation for last name
	    if (empty($lastname)) {
		    $lastNameError= 'Last name is required<br>';
	    }
	    else if(strlen($lastname) < 3) {
		    $lastNameError= 'Last name should be atleast 3 characters long.'; 
	    }
        else {
		    echo $lastname.'<br>';
	    }
	    //Validation for Address
	    //Validation for street
	    if (empty($street)) {
		    $streetError = 'Street name is required<br>';
	    }
	    else
		    echo 'Street:'. $street. '<br>';
	  
	    //Validation for city
	    if (empty($city)) {
		    $cityError = 'City is required <br>';
	    }
	    else
	    {
		    echo 'City: '. $city. '</br>';
	    }
	  
	    //Validation for states
	    $state = ucfirst($state); //change first letter of the state to upper case letter
	    if (in_array("$state", $states)) {
		  echo 'State: '. $state.'<br>';
        }
	    else{
            $stateError = 'Invalid State';
        }
	  
	  
	  
	    //Validation for Zip code
	    if (empty($zip)) {
		    $zipError =  'Zip Code is required<br>';
	    }
	    else if (strlen($zip) < 5)
		    $zipError = 'Zip Code invalid. five digits required.<br>';
	    else
		    echo 'Zip: '.$zip. '</br>';
	  
	    //Validation for Phone Number
	    if (empty($phone) || (strlen($phone) <10) ) 
	    {
		    $phoneError ='Phone Number is required with atleast 10 digits.<br>';
	    }
	    else
		    echo 'Phone : ' .$phone .'<br>';
	  
	    //Validation for Email
	    if (empty($email)) {
		    $emailError = 'Email is required<br>';
	    }
	    else if (strlen($email) < 5)
		    $emailError = 'Too short, Atleast 5 characters required.<br>';
	    else
	    {
		    $pos = strpos($email, '@');
		    if ( $pos !== false )
		    { // if search string found
			    echo 'Email:'. $email .'<br>';
            } 
		    else
		    { 
			    $emailError = '@ symbol required.<br>';
            }
	    }
	  
	    $petName = $_POST["petname"];
        $petType = $_POST["pettype"];
		$appointmentTime = $_POST["appointmenttime"];
		  
		// if pet name has not been input...
        if (empty($petName)) {
            // display error
			$validData = false;
            $petNameError = "Must choose a pet name";
        }
		else
			echo 'Pet Name:'. $petName.'<br/>';
		  
		// if appointment time has not been chosen...
        if (empty($petType)) {
            // display error
			$validData = false;
            $petTypeError = "Must choose a pet type";
        }
	
	    // appointment time
        // if appointment time has not been chosen...
        if (empty($appointmentTime)) {
            // display error
			$validData = false;
			$timeError = "Must choose an appointment time";
		}	
        // otherwise...
        else if ($appointmentTime){
            // if the date is a Saturday or Sunday... 
            if (date('l', strtotime($appointmentTime)) == "Saturday" || date('l', strtotime($appointmentTime)) == "Sunday") {
                // display error
                $timeError = "Office is not open on weekends";
            }
            // if not Saturday or Sunday, but is a holiday...
            else if ($appointmentTime == $holidays[0] || $appointmentTime == $holidays[1] || $appointmentTime == $holidays[2] || $appointmentTime == $holidays[3] || $appointmentTime == $holidays[4] || $appointmentTime == $holidays[5] || $appointmentTime == $holidays[6] || $appointmentTime == $holidays[7]) {
                // display error
                $timeError = "Office is not open on holidays";
            }
            // if not a holiday, but time is after 3:59PM...
            else if(date('H', strtotime($appointmentTime)) > 15) {
                // display error
                $timeError = "Appointment must be made within 1 hour of closing time";
            }
            // otherwise...
            else {
			
                // display the chosen time
                echo "Submission successful!";
            }
        }
        
        // grooming services
        // for the length of the $prices array that is set to the checkbox names...
        for ($i = 0; $i < count($prices); $i++) {
            // if checkbox is not set...
            if(!isset($_POST['service'])) {
                // checkbox is not checked
                $isChecked = false;
            }
            // otherwise...
            else {
                // checkbox is checked
                $isChecked = true;
            }
  
        }
        // if checkbox is not checked...
        if ($isChecked == false) {
            // display error
            $checkboxError = "You must choose at least one service.";
            
        }
	    }//end of first if statement 
	    //For Credit Card
	    if (empty($_POST["name"])) {
            $dateErr = "Date is required";
        } 
        else {
            $dateErr = ($_POST["SecurityCode"]);
        }
        if (empty($_POST["securityCode"])) {
            $codeErr = "security code is required";
        } 
        else {
            $codeErr = ($_POST["securityCode"]);
        }
	  
	 
	  
	   /*----------------------------------------------*/
	    if (isset($_POST['cc'])){ 
            if (empty($_POST["cc"])) {
                $ccErr = "Credit card is required";
            } 
            else {
            $ccErr = ($_POST["cc"]);
            $numbers = $_POST['cc'];
            $length = strlen($numbers);
            switch($length){
            case "16":
                $first = substr ($numbers,-16, 1);
                if ( $first == 4){
                    $visa= 'visa';
                    if ($visa == true){
                        echo 'Card Number:'. $numbers. '<br>';
				        echo 'credit card is a visa'; 
                    break;        
                    }
            
                }
                if ( $first == 5){
                    $mastercard= 'mastercard';
                    if ($mastercard == true){
					echo 'Card Number:'. $numbers. '<br>';
                    echo 'credit card is a mastercard';
                    break;
                }
            }
                else{
                    $ccErr= 'Invalid Credit card';
            }
                break;
            case "15":
        
                $first = substr ($numbers, -15, 1);
                if ( $first == 3){
                    $amex= 'amex';
                    if ($amex == true){   
			            echo 'Card Number:'. $numbers. '<br>';
                        echo 'credit card is an American Express';
                    }
                    }
                    else{
                    $ccErr='Invalid Credit card';
                    }
                    break;
            case "0":
                echo 'Empty credticard number field';
        
            break;
            default:
                $ccErr= 'Invalid Credit card';
            }     
        }
  
    }
	 
    ?>
        <div class= "container" >
        
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" name="clientinfo" method="POST" novalidate>
                <div class= "container"><!--div created to customize section and modified with css-->
                    <fieldset>
                        <!--Contact area-->
                    <legend ><h4>Contact Information</h4></legend>
                        <br /> 
                        <label>Name</label><br>
                        <label>*First Name:</label> <input type="text" name="firstname" id="firstname"  size="40" value="<?php echo $firstname; ?>" /><span class="error"><?php echo $firstNameError; ?></span><br/>
                        <label>*Last Name:</label> <input type="text" name="lastname" id="lastname"  size="40" value="<?php echo $lastname; ?>" /><span class="error"><?php echo $lastNameError; ?></span><br/>
                        <label>*Email:</label> <input type="email" name="email" id="email" size="40" value="<?php echo $email; ?>" /><span class="error"><?php echo $emailError; ?></span><br/>
                        <label>Phone Number</label> <input type="text" name="phone" id="phone" size="40" value="<?php echo $phone; ?>" /><span class="error"><?php echo $phoneError; ?></span><br/>
                        <label>Address</label><br/>
                        <label>Street</label> <input type="text" name="street" id="street" value="<?php echo $street; ?>" /><span class="error"><?php echo $streetError; ?></span><br/>
                        <label>City</label> <input type="text" name="city" id="city"  value="<?php echo $city; ?>" /><span class="error"><?php echo $cityError; ?></span><br/>
                        <label>State:</label><input type="text" name="state" id="state"  value="<?php echo $state; ?>" /><span class="error"><?php echo $stateError; ?></span><br/>
                        <label>Zip Code</label> <input type="text" name="zip" id="zip"  value="<?php echo $zip; ?>" /><span class="error"><?php echo $zipError; ?></span><br/>
                        <br>
                    </fieldset>
                </div>
                <br />
                <div class= "container">
                    <fieldset>
                        <legend><h4>Pet service and Appiontment Information</h4></legend>
                        <br /> 
                        <label>*Pet's Name:</label> <input type="text" name="petname" id="petname" value="<?php echo $petName; ?>" /><span class="error"><?php echo $petNameError; ?><br/>
                        <label>*Pet Type:</label> <input type="text" name="pettype" id="pettype" value="<?php echo $petType; ?>" /><span class="error"><?php echo $petTypeError; ?><br/>
                        <label>*Appointment Time:</label>
                        <input type="datetime-local" name="appointmenttime" value="<?php echo $appointmentTime; ?>"><span class="error"><?php echo $timeError; ?></span><br/>

                        <label>*Choose service:<br>
                        <input type="checkbox" name="service[]" value="<?php echo $prices[0]; ?>"> Small Pet $30.00<br>
                        <input type="checkbox" name="service[]" value="<?php echo $prices[1]; ?>"> Medium Pet $50.00<br>
                        <input type="checkbox" name="service[]" value="<?php echo $prices[2]; ?>"> Large Pet $80.00<br>
                        <input type="checkbox" name="service[]" value="<?php echo $prices[3]; ?>"> Housecall for Small to Medium Pet $70.00<br>
                        <input type="checkbox" name="service[]" value="<?php echo $prices[4]; ?>"> Housecall for Large Pet $100.00<br>
                        <span class="error"><?php echo $checkboxError; ?><br><br>
                    </fieldset>
                </div>
                <br />
                        <!--Payment method area-->
                <div class= "container">
                    <fieldset>
                        <legend><h4>Payment</h4></legend>
                        <br /> 
                        <!-- radio type buttoms to choose payment metod -->
                        <input type= "radio" name="payment" id="mastercard" value="mastercard" />Mastercard <img src="mastercard.png" alt="mastercard" height="28" width="84"> 	
                        <input type= "radio" name="payment" id="visa" value="visa" />Visa<img src="visa.png" alt="visa" height="28" width="74">
                        <input type= "radio" name="payment" id="amex" value="amex" />Amex<img src="amex.png" alt="amex" height="28" width="34">
                        <br />
                        <label>Credit Card Number</label>
                        <input type="text" name="cc" id="cc"  placeholder="Credit card Number"/ > 
                        <span class="error">* <?php echo $ccErr;?></span>
                        <br />
                        <label>Expiration Date</label>
                        <input type ="date" name="ExpirationDate" id="ExpirationDate" />
                        <span class="error">* <?php echo $dateErr;?></span><br>
                        <label>Security Code</label>
                        <input type="password" name= "SecurityCode" placeholder="SecurityCode"/>
                        <span class="error">* <?php echo $codeErr;?></span>
                        
                    </fieldset>
                </div>
                <br />
                <input type="submit" value="Send Information" />
            </form>
        </div>
    </body>
</html>
