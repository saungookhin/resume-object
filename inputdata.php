<?php
$con = mysqli_connect('localhost', 'root', '', 'rirekisho');

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";

// Handle form submission for Basic Information
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['other_submit'])) {
    // Retrieve data from form
    $firstName =mysqli_real_escape_string($con,  $_POST["first-name"]);
    $lastName =  mysqli_real_escape_string($con,$_POST["last-name"]);
    $name = $firstNazme . '-' . $lastName;
    $familyName =  mysqli_real_escape_string($con,$_POST["family-name"]);
    $givenName =  mysqli_real_escape_string($con,$_POST["given-name"]);
    $kanaName = $familyName . '-' . $givenName;
    $gender = mysqli_real_escape_string($con, $_POST["gender"]);
    $marital = mysqli_real_escape_string($con, $_POST["marital-status"]);
    $dob_year = mysqli_real_escape_string($con, $_POST["dob-year"]);
    $dob_month = mysqli_real_escape_string($con, $_POST["dob-month"]);
    $dob_day = mysqli_real_escape_string($con, $_POST["dob-day"]);
    $dob = $dob_year . '-' . $dob_month . '-' . $dob_day;
    $nationality = mysqli_real_escape_string($con, $_POST["nationality"]);
    $birthPlace = mysqli_real_escape_string($con, $_POST["place-of-birth"]);
    $religion = mysqli_real_escape_string($con, $_POST["religion"]);
    $tel_no = mysqli_real_escape_string($con, $_POST["tel-no"]);
    $mailAddress = mysqli_real_escape_string($con, $_POST["mail-address"]);
    $presentAddress = mysqli_real_escape_string($con, $_POST["present-address"]);
    $photo = mysqli_real_escape_string($con, $_POST["photo"]);
    
    // Insert data into 'user' table
    $sql = "INSERT INTO `user` (`name`, `kananame`, `gender`, `marital_status`,`date_birth`, `nationality`, `birth_place`, `religion`, `tel_no`, `email`, `address`, `profile_image`)
                 VALUES ('$name', '$kanaName', '$gender', '$marital', '$dob', '$nationality', '$birthPlace', '$religion', '$tel_no', '$mailAddress', '$presentAddress', '$photo')";

    // Execute SQL query
    $rs = mysqli_query($con, $sql);

    if ($rs) {
        echo "Contact Records Inserted";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}


// Handle form submission for Skills and Abilities 1
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['skills1_submit'])) {
    // Retrieve data from form
    $handedness =mysqli_real_escape_string($con,  $_POST["handedness"]);
    $colorAbnormality =  mysqli_real_escape_string($con,$_POST["color-abnormality"]);
    $glasses =  mysqli_real_escape_string($con,$_POST["glasses"]);
    $smoking =  mysqli_real_escape_string($con,$_POST["smoking"]);
    $alcohol = mysqli_real_escape_string($con, $_POST["alcohol"]);
    $lefteyeVision = mysqli_real_escape_string($con, $_POST["left-eye-vision"]);
    $righteyeVision = mysqli_real_escape_string($con, $_POST["right-eye-vision"]);
    $height = mysqli_real_escape_string($con, $_POST["height"]);
    $weight = mysqli_real_escape_string($con, $_POST["weight"]);
    $bloodType = mysqli_real_escape_string($con, $_POST["blood-type"]);
    $period = mysqli_real_escape_string($con, $_POST["period"]);
    $japaneseExam = mysqli_real_escape_string($con, $_POST["japanese-exam"]);
    $japaneseQualitfication = mysqli_real_escape_string($con, $_POST["japanese-qualification"]);
    $japaneseSkill  = $japaneseExam . '-' . $japaneseQualitfication;
    $test = mysqli_real_escape_string($con, $_POST["test"]);
    $level = mysqli_real_escape_string($con, $_POST["level"]);
    $workSkill =  $test . '-' . $level;
    $strongPoint = mysqli_real_escape_string($con, $_POST["strong-point"]);
    $weakgPoint = mysqli_real_escape_string($con, $_POST["weak-point"]);
    // Insert data into 'user' table
    $sql = "INSERT INTO `user` (`handedness`, `color_abnormality`, `glasses`, `smoking`,'alcohol', `vision_left`, `vision_right`, `height`, `weight`, `bloodtype`, `study_time`, '`j_skill`, `w_skill`, `strongpoint`, `weakpoint`)
                 VALUES ('$handedness', '$colorAbnormality', '$glasses', '$smoking', '$alcohol', 
                 '$lefteyeVision', '$righteyeVision', '$height', '$weight', '$bloodType', '$period', '$japaneseSkill', '$workSkill', 
                 '$strongPoint', '$weakgPoint')";

    // Execute SQL query
    $rs = mysqli_query($con, $sql);

    if ($rs) {
        echo "Contact Records Inserted";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}


// Handle form submission for Skills and Abilities 2
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['skills2_submit'])) {
    // Retrieve data from form
    $driving =mysqli_real_escape_string($con,  $_POST["driving"]);
    $bicycle =  mysqli_real_escape_string($con,$_POST["bicycle"]);
    $cooking =  mysqli_real_escape_string($con,$_POST["cooking"]);
    $visaApplied =  mysqli_real_escape_string($con,$_POST["visa-applied"]);
    $residenceStatus = mysqli_real_escape_string($con, $_POST["residence-status"]);
    $desiredPeriod = mysqli_real_escape_string($con, $_POST["desired-period"]);
    $workingReason = mysqli_real_escape_string($con, $_POST["reason-for-working"]);
    // Insert data into 'user' table
    $sql = "INSERT INTO `user` (`driving`, `bicycle`, `cooking`, `applied_visa`,'residence_status', `desired_period`, `reason`)
                 VALUES ('$driving', '$bicycle', '$cooking', '$visaApplied', '$residenceStatus', '$desiredPeriod', '$workingReason')";

    // Execute SQL query
    $rs = mysqli_query($con, $sql);

    if ($rs) {
        echo "Contact Records Inserted";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}

// Handle form submission for Education
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['education_submit'])) {
    // Retrieve data from form
    $started =mysqli_real_escape_string($con,  $_POST["started"]);
    $finished =  mysqli_real_escape_string($con,$_POST["finished"]);
    $schoolName =  mysqli_real_escape_string($con,$_POST["school-name"]);
    $major =  mysqli_real_escape_string($con,$_POST["major"]);
    $degree = mysqli_real_escape_string($con, $_POST["degree"]);
    // Insert data into 'education' table
    $sql = "INSERT INTO `education` (`edu_start_date`, `edu_end_date`, `school_name`, `major`,`degree`)
                 VALUES ('$started', '$finished', '$schoolName', '$major', '$degree')";

    // Execute SQL query
    $rs = mysqli_query($con, $sql);

    if ($rs) {
        echo "Contact Records Inserted";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}

// Handle form submission for Work Experience
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['experience_submit'])) {
    // Retrieve data from form
    $wstarted =mysqli_real_escape_string($con,  $_POST["started"]);
    $wfinished =  mysqli_real_escape_string($con,$_POST["finished"]);
    $companyName =  mysqli_real_escape_string($con,$_POST["company-name"]);
    $jobType =  mysqli_real_escape_string($con,$_POST["job-type"]);
    $city = mysqli_real_escape_string($con, $_POST["city"]);
    // Insert data into 'experience' table
    $sql = "INSERT INTO `experience` (`exp_start_date`, `exp_end_date`, `company_name`, `type_job`, `city`)
                 VALUES ('$wstarted', '$wfinished', '$companyName', '$jobType', '$city')";

    // Execute SQL query
    $rs = mysqli_query($con, $sql);

    if ($rs) {
        echo "Contact Records Inserted";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}


// Handle form submission for Family
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['family_submit'])) {
    // Retrieve data from form
    $name =mysqli_real_escape_string($con,  $_POST["name"]);
    $relation =  mysqli_real_escape_string($con,$_POST["relation"]);
    $age =  mysqli_real_escape_string($con,$_POST["age"]);
    $work =  mysqli_real_escape_string($con,$_POST["work"]);
    $telNo = mysqli_real_escape_string($con, $_POST["tel-no"]);
    $address = mysqli_real_escape_string($con, $_POST["address"]);
    // Insert data into 'family' table
    $sql = "INSERT INTO `family` (`family_name`, `relation`, `age`, `work`,`ftel_no`, `family_address`)
                 VALUES ('$name', '$relation', '$age', '$work', '$telNo', '$address')";

    // Execute SQL query
    $rs = mysqli_query($con, $sql);

    if ($rs) {
        echo "Contact Records Inserted";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}


// Handle form submission for Other
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['other_submit'])) {
    // Retrieve data from form
    $other =mysqli_real_escape_string($con,  $_POST["other"]);
    // Insert data into 'user' table
    $sql = "INSERT INTO `user` (`other`) VALUES ('$other')";

    // Execute SQL query
    $rs = mysqli_query($con, $sql);

    if ($rs) {
        echo "Contact Records Inserted";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
?>

<!-- HTML Forms (Skills and Abilities, Education, Work Experience, Family) -->
<!-- Include your HTML forms here -->




