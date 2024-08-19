<?php
    $locker=1;
    include 'database.php';

    // Check if already logged in 
session_start(); 
if (!isset($_SESSION['id'])) {
}

$id = $_SESSION['id'];

$query = "SELECT * FROM $profile WHERE id = '$id'";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) == 1){
    while ($row = mysqli_fetch_assoc($result)) {
       $firstName = $row['firstname']; 
       $lastName = $row['lastname'];
       $age = $row['age'];
       $matric = $row['matric'];
       $department = $row['department'];
       $lastName = $row['lastName'];
       $dob = $row['dateofbirth'];
    }
}


    ?>
<!DOCTYPE html>
<html>
    <head>
        <div id="animatedBackground">
        <head>
            <meta charset="UTF-8">
            <meta name="keywords" content="HTML, CSS, JavaScript">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
            <link rel="stylesheet" href="./assets/css/student_profile.css">
            <title>Student Profile</title>
        <input type="checkbox" id="check">
        <label for="check">
            <i class="fas fa-bars" id="btn"></i>
            <i class="fas fa-times" id="cancel"></i>
        </label>
        <div class="sidebar">
            <header><img src="mufmedlogo.png" alt="Image" class="oval"></header>
            <ul>
                <li><a href="school_dashboard.php"><i class="fas fa-link"></i>Dashboard</a></li>
                <li><a href="student_profile.php"><i class="fa fa-address-card"></i>Profile</a></li>
                <li><a href=""><i class="fas fa-graduation-cap"></i>Results</a></li>
                <li><a href="schedule.php"><i class="fas fa-calendar-alt"></i>Schedule</a></li>
                <li><a href=""><i class="fa fa-credit-card"></i>Payments</a></li>
                <li><a href=""><i class="fas fa-bell"></i>Notifications</a></li>
                <li><a href="mufmed_community.php"><i class="fas fa-comment-dots"></i>Community</a></li>
                <li><a href="#" id="mybtn"><i class="fa fa-ban"></i>Complaint</a></li>
                <li><a href="index.php"><i class="fas fa-door-open"></i>Log-Out</a></li>
            </ul>
        </div>
        <style>
            #animatedBackground {
              width: 100.5%;
              height: 90px;
              background: url('slideshow1.jpg'); /* Start with an image */
              animation: slideShow 10s infinite; /* Animation: name, duration, repeat */
            }
            
            /* Keyframes for the slideshow animation */
            @keyframes slideShow {
              0% { background: url('slideshow1.jpg'); }
              25% { background: url('slideshow4.jpg'); }
              50% { background: url('slideshow3.jpg'); }
              75% { background: url('slideshow2.jpg'); }
              100% { background: url('slideshow5.jpg'); }
            }
            </style>
            <div>
            <h1 style="padding: 5px; margin-left: 20px; font-size: 40px; font-family: lobster; color: white; margin-top: -5px;">My Profile</h1>
            <img src="download.png" style="height: 100px; border: 2px solid gray; border-radius: 50% 50%; float: right; margin-top: -9.5%;">
            </div>
        </div> 
        </head>
        <body>
            <div class="container" id="divContainer1" style="margin-bottom: 20px; margin-top: 5px;">
                <button class="edit-btn">Edit</button>
                <table>
                    <th style="width: 100%; padding: 10px;"><h2>Personal Information</h2></th>
                    <tr>
                        <td>First Name:</td>
                        <td><span class="text"></span><input type="text" name="firstName" class="placeholder" /></td>
                    </tr>
                    <tr>
                        <td>Last Name:</td>
                        <td><span class="text"></span><input type="text" name="lastName" class="placeholder" /></td>
                    </tr>
                    <tr>
                        <td>Age:</td>
                        <td><span class="text"></span><input type="text" name="age" class="placeholder" /></td>
                    </tr>
                    <tr>
                        <td>Level</td>
                        <td><span class="text"></span><input type="text" name="level" class="placeholder" /></td>
                    </tr>
                    <tr>
                        <td>Matric No:</td>
                        <td><span class="text"></span><input type="text" name="matricNo" class="placeholder" /></td>
                    </tr>
                    <tr>
                        <td>department</td>
                        <td><span class="text"></span><input type="text" name="department" class="placeholder" /></td>
                    </tr>
                    <tr>
                        <td>college</td>
                        <td><span class="text"></span><input type="text" name="college" class="placeholder" /></td>
                    </tr>
                    <tr>
                        <td>Email Address:</td>
                        <td><span class="text"></span><input type="text" name="emailAddress" class="placeholder" /></td>
                    </tr>
                </table>
                <button class="save-btn">Save</button>
            </div>
            <div class="container" id="divContainer2" style="margin-bottom: 20px;">
                <button class="edit-btn">Edit</button>
                <table>
                    <th style="width: 100%; padding: 10px;"><h2>Academic Information</h2></th>
                    <tr>
                        <td>Current Level:</td>
                        <td><span class="text"></span><input type="text" name="currentLevel" class="placeholder" /></td>
                    </tr>
                    <tr>
                        <td>Course of Study:</td>
                        <td><span class="text"></span><input type="text" name="courseOfStudy" class="placeholder" /></td>
                    </tr>
                    <tr>
                        <td>Status:</td>
                        <td><span class="text"></span><input type="text" name="status" class="placeholder" /></td>
                    </tr>
                    <tr>
                        <td>Current CGPA:</td>
                        <td><span class="text"></span><input type="text" name="currentCGPA" class="placeholder" /></td>
                    </tr>
                </table>
                <button class="save-btn">Save</button>
            </div>            
            <div class="container" id="divContainer3">
                <button class="edit-btn">Edit</button>
                <table>
                    <th style="width: 100%; padding: 10px;"><h2>Other Information</h2></th>
                    <tr>
                        <td>Home Address:</td>
                        <td><span class="text"></span><input type="text" name="homeAddress" class="placeholder" /></td>
                    </tr>
                    <tr>
                        <td>Emergency Contact Info:</td>
                        <td><span class="text"></span><input type="text" name="emergencyContact" class="placeholder" /></td>
                    </tr>
                    <tr>
                        <td>Next of Kin:</td>
                        <td><span class="text"></span><input type="text" name="NextOfKin" class="placeholder" /></td>
                    </tr>
                    <tr>
                        <td>Relationship with Next of kin:</td>
                        <td><span class="text"></span><input type="text" name="Relationship" class="placeholder" /></td>
                    </tr>
                    <tr>
                        <td>Contact Info for NoK:</td>
                        <td><span class="text"></span><input type="text" name="nokContact" class="placeholder" /></td>
                    </tr>
                </table>
                <button class="save-btn">Save</button>
            </div>
        </body>
        <script>
            // JavaScript to handle editing and saving of data
            document.querySelectorAll('.edit-btn').forEach(btn => {
    btn.addEventListener('click', function() {
        let container = this.parentNode;
        let inputs = container.querySelectorAll('input[type=text]');
        inputs.forEach(input => {
            input.style.display = 'inline';
            input.previousElementSibling.style.display = 'none';
        });
        container.querySelector('.save-btn').style.display = 'inline';
    });
});

document.querySelectorAll('.save-btn').forEach(btn => {
    btn.addEventListener('click', function() {
        let container = this.parentNode;
        let data = {};
        let inputs = container.querySelectorAll('input[type=text]');
        inputs.forEach(input => {
            let value = isNaN(input.value) ? input.value : Number(input.value);
            data[input.name] = value;
            input.style.display = 'none';
            input.previousElementSibling.textContent = value;
            input.previousElementSibling.style.display = 'inline';
        });
        this.style.display = 'none';

        // Send data to the server using AJAX (replace with your actual server endpoint)
        fetch('insert.php', {
            method: 'POST',
            body: JSON.stringify(data),
            headers: {
                'Content-Type': 'application/json'
            }
        })
        .then(response => response.json())
        .then(result => {
            console.log(result); // Handle the server response (e.g., success message)
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
});

// Load data from the server when the page is loaded (replace with your actual endpoint)
fetch('get_profile.php') // Adjust the endpoint to retrieve profile data
    .then(response => response.json())
    .then(profileData => {
        // Populate the input fields with retrieved data
        document.querySelector('input[name=firstName]').value = profileData.firstName;
        document.querySelector('input[name=lastName]').value = profileData.lastName;
        document.querySelector('input[name=age]').value = profileData.age;
        document.querySelector('input[name=matricNo]').value = profileData.matricNo;
        document.querySelector('input[name=department]').value = profileData.department;
        document.querySelector('input[name=college]').value = profileData.college;
        document.querySelector('input[name=level]').value = profileData.level;
        document.querySelector('input[name=emailAddress]').value = profileData.emailAddress;
    })
    .catch(error => {
        console.error('Error fetching profile data:', error);
    });
        </script>
</html>