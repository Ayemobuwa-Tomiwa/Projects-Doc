<?php
include 'database.php';

if(isset($_POST['idCard'])){
    $firstName=$_POST['fName'];
    $lastName=$_POST['lName'];
    $matric=$_POST['matric'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $checkMatric="SELECT * From profile where matric='$matric'";
     $result=$conn->query($checkMatric);
     if($result->num_rows>0){
        echo "Matric Number Address Already Exists !";
     }
     else{
    $insertQuery="INSERT INTO users(firstName,lastName,matric,email,password)
                       VALUES ('$firstName','$lastName','$matric','$email','$password')";
            if($conn->query($insertQuery)==TRUE){
                header("location: test_index.php");
            }
            else{
                echo "Error:".$conn->error;
            }
        }
    }
?>
<!DOCTYPE html>
<html style="background-image: url(./assets/images/dashboarda.jpg); position: static; background-size: cover;">
    <head>
        <meta charset="UTF-8">
        <meta name="keywords" content="HTML, CSS, JavaScript">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./assets/css/school_dashboard.css">
        <title>Student Dashboard</title>
    </head>
    <div class="contents">
    <body>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
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
                <li><a href="#"><i class="fas fa-graduation-cap"></i>Results</a></li>
                <li><a href="schedule.php"><i class="fas fa-calendar-alt"></i>Schedule</a></li>
                <li><a href=""><i class="fa fa-credit-card"></i>Payments</a></li>
                <li><a href=""><i class="fas fa-bell"></i>Notifications</a></li>
                <li><a href="community_index.php"><i class="fas fa-comment-dots"></i>Community</a></li>
                <li><a href="#" id="mybtn"><i class="fa fa-ban"></i>Complaint</a></li>
                <li><a href="index.php"><i class="fas fa-door-open"></i>Log-Out</a></li>
            </ul>
        </div>
        <div class="profile">
            <div class="image-container"></div>
            <input type="file" id="profileImage" accept="image/*" style="display: none;" onchange="previewImage(event)">
            <button id="uploadButton" onclick="document.getElementById('profileImage').click()">Select Profile Picture</button><br>
            <img id="preview" style="display: none; height: 150px;">
            <style>
                button {
                    border: 2px solid gray;
                    border-radius: 20px;
                    padding: 10px;
                    transition: all 0.5 ease;
                }
                button#uploadButton {
                    float: right;
                    margin-top: -30px;
                }
                button#addProfileButton {
                    float: right;
                }
                button#uploadButton:hover {
                    margin-top: -35px;
                }
                button:hover {
                    color: white;
                    background-color: #042331;
                    border: 4px solid black;
                    padding: 13px 5px;
                    transform: scale(1.1);
                }
                button:active {
                    color: black;
                    background-color: whitesmoke;
                    border: 2px solid black;
                    padding: 16px 7px;
                }
            </style>
        </div>
        <div id="myModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
              <span class="close">&times;</span>
              <div>
                <h3>SEND FEEDBACK</h3>
                <div><input type="text" name="complaint" placeholder="Between 1-400 words"></div>
                <button id="send">Send</button>
              </div>
            </div>
            <script>
                var modal = document.getElementById("myModal");
                var btn = document.getElementById("mybtn");
                var span = document.getElementsByClassName("close")[0];
                btn.onclick = function() {
                  modal.style.display = "block";
                }
                span.onclick = function() {
                  modal.style.display = "none";
                }
                window.onclick = function(event) {
                  if (event.target == modal) {
                    modal.style.display = "none";
                  }
                }
                </script>
        </div>
    </body>
    <section style="margin-left: 130px; margin-top: -15px;">
        <header><u><h1>STUDENT DASHBOARD</h1></u></header>
        <table>
            <td>
        <tr>
            <h2 style="font-family: cursive;">Welcome To Your Student Dashboard</h2>
        </tr>
        <div class="container">
            <div class="border-text" style="position: relative; padding: 10px; margin-top: -30px;">
            <h2>Weekly Class Schedule</h2>
            <div class="horizontal-line"></div>
            <div class="vertical-line"></div>
                <p>TIME: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 7-9am &nbsp; &nbsp; 9-11am &nbsp; &nbsp; 11-1pm &nbsp; &nbsp; 1-2pm &nbsp; &nbsp; 2-4pm &nbsp; &nbsp; 4-6pm</p>
                <p>Monday:</p>
                <p>Tuesday:</p>
                <p>Wednesday:</p>
                <p>Thursday:</p>
                <p>Friday:</p>
                <p>Saturday:</p>
            </div>
            <style>
                .vertical-line {
                    position: absolute;
                    top: 19%;
                    left: 20%;
                    height: 81%;
                    width: 2px;
                    background-color: black;
                }
                .horizontal-line {
                    position: absolute;
                    top: 19%;
                    left: 0%;
                    height: 2px;
                    width: 100%;
                    background-color: black;
                }
            </style>
        </div>
        </td>
    </table> 
</div>
<div id="idCard">
    <table>
        <td style="inline-size: 10px; font-family: cursive; width: 550px; height: 300px; font-size: 20px;">
            <img id="profile-pic" src="download.png" alt="Profile Picture" style="display: flex; float: right; height: 150px; width: 150px; border: 4px solid grey; border-radius: 50% 50%; margin-top: 20px;">
            <h1 style="margin-top: 0; font-size: 30px;">Student ID Card</h1>
            <p id="cardName"><?php echo $name; ?></p>
            <p id="cardMatric"><?php echo $matric; ?></p>
            <p id="cardEmail"><?php echo $email; ?></p>
            <p id="cardDepartment"><?php echo $department; ?></p>
            <p id="cardCollege"><?php echo $college; ?></p>
            <p id="cardDob"><?php echo $dateOfBirth; ?></p>
        </td>
    </table>
</div>
    <div id="myModal2" class="modal2">
        <div class="modal-content2">
            <span class="close2">×</span>
            <h3 style="font-family: cursive; font-weight: 700">Are you sure you want to use this image as your school profile picture?</h3>
            <img id="modal2Image" style="height: 150px; width: auto; border: 5px solid black; border-radius: 20px; display: flex;"><br>
            <button id="confirmButton" onclick="addProfileImage()">Confirm Profile Picture</button>
        </div>
    </div>
<script>
    // profile picture settings
    function previewImage(event) {
    var reader = new FileReader();
    reader.onload = function() {
        var output = document.getElementById('preview');
        output.src = reader.result;

        // Show the modal box
        var modal2 = document.getElementById('myModal2');
        var modal2Image = document.getElementById('modal2Image');
        modal2.style.display = 'block';
        modal2Image.src = reader.result;

        // When the user clicks on <span> (x), close the modal
        var span = document.getElementsByClassName('close2')[0];
        span.onclick = function() {
            modal2.style.display = 'none';
            output.src = '';
        }

        // When the user clicks "Confirm", update the profile picture and close the modal
        var confirmButton = document.getElementById('confirmButton');
        confirmButton.onclick = function() {
            document.getElementById('profile-pic').src = modal2Image.src;
            modal2.style.display = 'none';
        }
    }
    reader.readAsDataURL(event.target.files[0]);
}
// checking for stored images
window.onload = function() {
    var profilePic = document.getElementById('profile-pic');
    var storedImage = sessionStorage.getItem('profilePic');

    if (storedImage) {
        profilePic.src = storedImage;
    }
};
// storing the image function 
function addProfileImage() {
    var preview = document.getElementById('preview');
    var profilePic = document.getElementById('profile-pic');

    // Wait for the image to load before drawing it on the canvas
    preview.onload = function() {
        // Convert the image to a Base64 string
        var canvas = document.createElement('canvas');
        canvas.width = preview.width;
        canvas.height = preview.height;
        var ctx = canvas.getContext('2d');
        ctx.drawImage(preview, 0, 0, preview.width, preview.height);
        var base64String = canvas.toDataURL('image/png');

        // Store the Base64 string in sessionStorage
        sessionStorage.setItem('profilePic', base64String);

        // Update the profile picture
        profilePic.src = base64String;
    };

    // Trigger the onload event by updating the src of the preview image
    preview.src = preview.src;
}

    // Function to get a parameter from the URL
    function getParameterByName(name) {
        name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
        var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
            results = regex.exec(location.search);
        return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
    }

    // Get the parameters from the URL
    window.onload = function() {
    var name = getParameterByName('name');
    var matric = getParameterByName('matric');
    var email = getParameterByName('email');
    var department = getParameterByName('department');
    var college = getParameterByName('college');
    var dob = getParameterByName('dob');

    // Display the ID card
    document.getElementById('cardName').innerText = `Name: ${name}`;
    document.getElementById('cardMatric').innerText = `Matric: ${matric}`;
    document.getElementById('cardEmail').innerText = `Email: ${email}`;
    document.getElementById('cardDepartment').innerText = `Department:  ${department}`;
    document.getElementById('cardCollege').innerText = `College: ${college}`;
    document.getElementById('cardDob').innerText = `Date of Birth: ${dob}`;
    };
</script>
    <footer style="height: 300px; bottom: -30px">
        <table id="footertd">
            <th>
            <li><a href="sign_up.php"><i class="fa fa-address-card">&nbsp;</i>Register New Account</a></li><br>
            <li><a href="privacy_policy.php"><i class="fas fa-balance-scale">&nbsp;</i>Privacy Policy</a></li><br>
            <li><a href="about_us.php"><i class="fas fa-book-open">&nbsp;</i>About Us</a></li><br>
            <li><a href="#" id="myBtn"><i class="fa fa-phone">&nbsp;</i>Contact Us</a></li><br>
            <li><a href="index.php"><i class="fas fa-door-open"></i>Log-Out</a></li>
            </th>
        </table>
    </footer>
    </section>
</html>
