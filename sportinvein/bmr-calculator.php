
<?php include 'includes/header.php'; ?>
<?php include 'includes/db.php'?>



    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2>BMR calculator</h2>
                        <div class="bt-option">
                            <a href="./index.php">Home</a>
                            <a href="#">Pages</a>
                            <span>BMR calculator</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

<!-- About US Section Begin -->
<section class="aboutus-section">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 p-0">
   
    
        <div class="about-video set-bg" data-setbg="img/bmr.png">
          <a href="https://www.youtube.com/watch?v=c81nojCsoiI" class="play-btn video-popup" class="play-btn video-popup"><i class="fa fa-caret-right"></i></a>
        </div>
      </div>
      <div class="col-lg-6 p-0">
        <div class="about-text">
          <div class="section-title">
            
            <h2>BMR</h2>
          </div>
          <div class="at-desc">
            <p>
            <b>
            Your Basal Metabolic Rate (BMR) is the number of calories you burn as your body performs basic (basal) life-sustaining function. Commonly also termed as Resting Metabolic Rate (RMR), which is the calories burned if you stayed in bed all day.  In either case, many utilize the basal metabolic rate formula to calculate their body’s metabolism rate
            </b>
            </p>
          </div>
          
        </div>
      </div>
      </div>
    </div>
  </div>
</section>
<!-- About US Section End -->


    <!-- BMI Calculator Section Begin -->
    <section class="bmi-calculator-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title chart-title">
                        <span>check your body</span>
                        <h2>BMR CALCULATOR CHART</h2>
                    </div>

                    
                    <div class="chart-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Bmr</th>
                                    <th>Activity Level</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>sedentary :</td>
                                    <td class="point">Calorie-Calculation = BMR x 1.2</td>
                                </tr>
                                <tr>
                                    <td>lightly active :</td>
                                    <td class="point">Calorie-Calculation = BMR x 1.375</td>
                                </tr>
                                <tr>
                                    <td>moderatetely active :</td>
                                    <td class="point">Calorie-Calculation = BMR x 1.55</td>
                                </tr>
                                <tr>
                                    <td>very active :</td>
                                    <td class="point">Calorie-Calculation = BMR x 1.725</td>
                                </tr>
                                <tr>
                                    <td>extra active :</td>
                                    <td class="point">Calorie-Calculation = BMR x 1.9</td>
			
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-title chart-calculate-title">
                        <span>check your body</span>
                        <h2>CALCULATE YOUR BMR</h2>
                    </div>
                    <div class="chart-calculate-form">
                        <p>Basal metabolic rate (BMR) is the total number of calories that your body needs to perform basic, life-sustaining functions. These basal functions include circulation, breathing, cell production, nutrient processing, protein synthesis, and ion transport. You can calculate the basal metabolic rate using a mathematical formula.</p>
                            <?php 
   function bmr_calories_metric($age, $height_cm, $weight_kg, $gender, $kilojoules = false) {
    $bmr = 0;
    if ($gender == "women") {
        //		Women Metric 	BMR = 655.1 + ( 9.563 × weight in kg ) + ( 1.850 × height in cm) – ( 4.676 × age in years )
        $bmr = 655.1 + (9.563 * $weight_kg) + (1.850 * $height_cm) - (4.676 * $age);
    }
    if ($gender == "men") {
        //Men 	Metric 	BMR = 66.5 + ( 13.75 × weight in kg ) + ( 5.003 × height in cm ) – ( 6.755 × age in years )
        $bmr = 66.5 + (13.75 * $weight_kg) + (5.003 * $height_cm) - (6.755 * $age);
    }
    if ($kilojoules) {
        $bmr = $bmr * 4.184;
    }
    return $bmr;
}
function bmr_calories_imperial($age, $height_inch, $weight_pound, $gender, $kilojoules = false) {
    $bmr = 0;
    if ($gender == "women") {
        //Women: Imperial 	BMR = 655.1 + ( 4.35 × weight in pounds ) + ( 4.7 × height in inches ) - ( 4.7 × age in years )
        $bmr = 655 + (4.35 * $weight_pound) + (4.7 * $height_inch) - (4.7 * $age);
    }
    if ($gender == "men") {
        //Men Imperial 	BMR = 66 + ( 6.2 × weight in pounds ) + ( 12.7 × height in inches ) – ( 6.76 × age in years )
        $bmr = 66 + (6.2 * $weight_pound) + (12.7 * $height_inch) - (6.76 * $age);
    }
    if ($kilojoules) {
        $bmr = $bmr * 4.184;
    }
    return $bmr;
}
$answer = "";
$dob = "";
$feet = "";
$inches = "";
$weight = "";
$gender = "";
$result = "";
function yeardob($dob_val) {
    $dob = new DateTime($dob_val);
    $today = new DateTime('today');
    $obj = date_diff($dob, $today, FALSE);
    return $obj->y;
}
if (isset($_POST["bmrsubmit"]) ) {
    $dob =$con->real_escape_string($_POST['dob']);
    $feet =$con->real_escape_string($_POST['feet']);
    $inch =$con->real_escape_string($_POST['inch']);
    $weight =$con->real_escape_string($_POST['weight']);
    $gender = $con->real_escape_string($_POST["gender"]);
    
     // query to insert the variables data into the database 
     $sql = "INSERT INTO bmrcalculator (dob , feet , inch, weight , gender) VALUES ('". $dob."', '". $feet ."', '". $inch ."' , '". $weight ."' , '". $gender ."')";
     if (!$result = $con->query($sql)){
         die('Error occured [' . $con->error. ']');
     }
    
    //  echo "dob : ".$dob."</br>";
    //  echo "feet : ".$feet."</br>";
    //  echo "inch : ".$inch."</br>";
    //  echo "weight : ".$weight."</br>";
    //  echo "gender : ".$gender."</br>";
    /* Age */
    $dob = new DateTime($dob);
    $today = new DateTime('today');
    $obj = date_diff($dob, $today, FALSE);
    $age = $obj->y;
    $date = $dob->format("Y-m-d");
    /* Covert height */
    $feetcm = $feet * 30.48;
    $inchcm = $inch * 2.54;
    $cm = $feetcm + $inchcm;
    $bmr = bmr_calories_metric($age, $cm, $weight, $gender, false);
    $activity = $_POST["activity_level"];
    $bmrkj = $bmr * 4.184;
    switch($activity){
        case 1: 
            $activity_type = "No Activity or No Exercise";
            $calories      = $bmr * 1.2;
            break; 
        case 2: 
            $activity_type = "Light Exercise/Sports 1-3/Week";
            $calories      = $bmr * 1.375;
            break;
        case 3: 
            $activity_type = "Moderate Exercise / Sports 3-5 Days/Week";
            $calories      = $bmr * 1.55;
            break;
        case 4: 
            $activity_type = "Hard Exercise/Sports 6-7 Days a Week";
            $calories      = $bmr * 1.725;
            break;
        case 5: 
            $activity_type = "Very Hard Exercise/Sports & Physical Job or 2x Training";
            $calories      = $bmr * 1.9;
            break;
        default: 
            $activity_type = "No Activity or No Exercise";
            $calories      = $bmr * 1.2;
            break;
    }
    $kilojoules = $calories * 4.184;
    $result = "<p>According to the Age $age Weight $weight Kg And Height $feet'$inch\" ($cm Cm) a ".ucfirst($gender).". BMR is  ".number_format($bmr).".</p><p>if you engage in $activity_type for that day. The estimate for maintaining your current weight (based upon your chosen activity level) is ".number_format($calories)." calories (".number_format($kilojoules)."KJ). </p> ";

   
}
   
   ?>
                              
    <form action="bmr-calculator.php" method="post" id="bmrForm">

                <div class="row">
                    <div class="col-sm-6">
                        <input type="date" name="dob" value="<?php echo $date;?> " placeholder="Date Of Birth" id="dob" />
                    </div>
                    <div class="col-sm-6">
                         <input type="number" name="weight" value="<?php echo $weight;?>" step="1" placeholder="Weight" required id="weight"/>
                     </div>
                    <div class="col-sm-6">
                        <input type="number" name="feet" value="<?php echo $feet;?>" step="1" min="1" max="10" required placeholder="Feet" id="feet"/>
                    </div>
                    <div class="col-sm-6">
                      <input type="number" value="<?php echo $inch;?>" min="0" max="11" maxlength="2" name="inch" step="1"placeholder="Inch" required id="inch" />
                    </div>
                    
                  <div class="col-sm-1">
                     
                        <p>Women<input type="radio" name="gender" value="women" <?php echo ($gender == "women") ? "checked" : "";?> required placeholder="Women"> </p>
                        <p>Men<input type="radio" name="gender" value="men"   <?php echo($gender == "men") ? "checked" : "";?> placeholder="Men" id="gender" /></p> 
                    
                  </div>
                    
                  <div class="col-sm-1">
                  </div>
 
                    <div class="col-sm-6">
                         <select name="activity_level">
                         <option>Select Exercise Type</option>
                            <option value="1">No Activity or No Exercise</option>
                            <option value="2">Light Exercise/Sports 1-3 Days/Week</option>
                            <option value="3">Moderate Exercise/Sports 3-5 Days/Week</option>
                            <option value="4">Hard Exercise/Sports 6-7 Days a Week</option>
                            <option value="5">Very Hard Exercise/Sports & Physical Job or 2x Training</option>
                         </select>
                    </div>

                    <div class="col-lg-12">
                        <button type="submit" class="submit" name="bmrsubmit" value="Get Result">Calculate</button>
                    </div> 
                </div>

                            <?php echo $result;?>
                        </form>
                        <div class="result"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BMI Calculator Section End -->

<!-- Get In Touch Section Begin -->
<div class="gettouch-section">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="gt-text">
          <i class="fa fa-map-marker"></i>
          <p>Amman,
            Jordan</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="gt-text">
          <i class="fa fa-mobile"></i>
          <ul>
            <li>077-668-8860</li>
            <li>077-795-8110</li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <div class="gt-text email">
          <i class="fa fa-envelope"></i>
          <p>Support.sportinvein@gmail.com</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Get In Touch Section End -->

<?php include 'includes/footer.php'; ?>