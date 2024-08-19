<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <title>Full-Screen Calendar (2024 - 2025)</title>
    <!--Side Navigation bar-->
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
<div id="myModal2" class="modal2">
    <!-- Modal2 content -->
    <div class="modal-content2">
        <span class="close2">×</span>
        <div>
            <h3>SEND FEEDBACK</h3>
            <div><input type="text" name="complaint" placeholder="Between 1-400 words"></div>
            <button id="send" onclick="sendFeedback()">Send</button>
        </div>
    </div>
</div>
<script>
    var modal2 = document.getElementById("myModal2");
    var btn = document.getElementById("mybtn");
    var span = document.getElementsByClassName("close2")[0];

    btn.onclick = function() {
        modal2.style.display = "block";
    }

    span.onclick = function() {
        modal2.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == modal2) {
            modal2.style.display = "none";
        }
    }

    function sendFeedback() {
        // Add your feedback sending code here

        // Close the modal
        modal2.style.display = "none";
    }
</script>
<!--Side Navigation bar ends-->
    <style>
        /* Basic styling for the calendar */
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            background-color: wheat;
            font-family: Arial, sans-serif;
        }
        .calendar {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: auto;
            background-color: wheat;
        }
        .calendar h1 {
            font-size: 2rem;
            margin-bottom: 1rem;
        }
        .calendar table {
            border-collapse: collapse;
            width: 80%;
            max-width: 600px;
            background-color: #fff;
            box-shadow: 7px 7px 7px 0 black;
            margin-bottom: 5px;
        }
        .calendar th, .calendar td {
            padding: 0.5rem;
            text-align: center;
            border: 1px solid #ddd;
            position: relative;
            cursor: pointer;
        }
        .calendar th {
            background-color: #f5f5f5;
        }
        .calendar td:hover {
            background-color: rgb(65, 163, 255);
            color: white;
        }
        .calendar td:active {
            background-color: #042331;
            color: white;
        }
        .modal {
            display: none;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 1rem;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }
        .highlighted {
            color: black;
            background-color: orange;
        }
        .oval {
            border-radius: 30%;
            height: 55px;
            width: 160px;
            margin: -20px;
          }
        .sidebar {
            position: fixed;
            left: -270px;
            width: 250px;
            margin-top: -40px;
            height: 100%;
            z-index: 2;
            border-right: 3px black;
            background: #042331;
            transition: all .5s ease;
            }
        .sidebar header {
            font-size: 22px;
            color: white;
            line-height: 70px;
            text-align: center;
            background: #ffffff;
            user-select: none;
            z-index: 2;
            }
        .sidebar ul a{
            display: block;
            height: 100%;
            width: 100%;
            line-height: 65px;
            font-size: 20px;
            color: white;
            z-index: 2;
            margin-top: -2px;
            padding-left: 40px;
            box-sizing: border-box;
            border-bottom: 1px solid black;
            border-top: 1px solid rgba(255,255,255,.1);
            transition: .4s;
            }
            ul li:hover a{
                padding-left: 20px;
            }
            .sidebar ul a i{
                margin-right: 16px;
            }
            #check{
                display: none;
            }
            label #btn,label #cancel{
                background: #042331;
                border-radius: 3px;
                cursor: pointer;
                position: sticky;
            }
            label #btn{
                left: 55px;
                z-index: 4;
                top: 15px;
                font-size: 30px;
                color: white;
                padding: 6px 12px;
                transition: all .5s;
            }
            label #cancel{
                z-index: 3;
                left: -195px;
                top: 17px;
                font-size: 30px;
      color: #0a5275;
      padding: 4px 9px;
      transition: all .5s ease;
    }
    #check:checked ~ .sidebar{
      left: 0;
    }
    #check:checked ~ label #btn{
      left: 250px;
      opacity: 0;
      pointer-events: none;
    }
    #check:checked ~ label #cancel{
      left: 210px;
    }
    #check:checked ~ section{
      margin-left: 250px;
    }
  .modal2 {
    display: none; 
    position: fixed;
    z-index: 5; 
    padding-top: 300px; 
    left: 0;
    top: 0;
    width: 50%; 
    height: 50%; 
    overflow: auto;
    background-color: rgb(0,0,0); 
    background-color: rgba(0,0,0,0.4);
  }
  .modal-content2 {
      color: black;
      background-color: #fefefe;
      margin: auto;
      padding: 20px;
      border: 1px solid #888;
      width: 80%;
  }
  .close2 {
      color: #aaaaaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
  }
  .close2:hover,
  .close2:focus {
      color: #000;
      text-decoration: none;
      cursor: pointer;
  }
  .modal2 {
    display: none; 
    position: fixed;
    z-index: 5; 
    padding-top: 300px; 
    left: 0;
    top: 0;
    width: 50%; 
    height: 50%; 
    overflow: auto;
    background-color: rgb(0,0,0); 
    background-color: rgba(0,0,0,0.4);
  }
  .modal-content2 {
    color: black;
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
  }
  .close2 {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
  }
  .close2:hover,
  .close2:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
  }
    </style>
</head>
<body>
    <h1 style="padding-left: 20px; font-family: cursive;">My Schedule</h1>
    <div class="calendar">
        <!-- Calendar will be generated here -->
    </div>

    <!-- Event Input Modal -->
    <div class="modal" id="eventModal">
        <input type="text" id="eventInput" placeholder="Enter your event">
        <button onclick="saveEvent()">Confirm</button>
        <button onclick="closeModal()">Close</button>
    </div>

    <!-- Display Box for Previously Inputted Events -->
    <div class="display-box" id="displayBox">
        <!-- Displayed event content will be inserted here -->
    <!-- For example: -->
    <!-- <p>Previously inputted event:</p> -->
    <!-- <p>Event details go here...</p> -->
    <!-- <button onclick="addNewInput()">Add New Input</button> -->
    <!-- <button onclick="closeDisplayBox()">Close</button> -->
    </div>

    <script>
        // Global variables to store events and selected day
        let events = {};
        let selectedDay;

        // Function to get the day of the week (0 = Sunday, 1 = Monday, etc.)
        function getDayOfWeek(year, month, day) {
            return new Date(year, month - 1, day).getDay();
        }

        // Function to populate the calendar
        function populateCalendar(year) {
            const calendarDiv = document.querySelector('.calendar');
            for (let month = 0; month < 12; month++) {
                const daysInMonth = new Date(year, month + 1, 0).getDate();
                const firstDayOfWeek = getDayOfWeek(year, month, 1);
                let table = document.createElement('table');
                let thead = document.createElement('thead');
                let tbody = document.createElement('tbody');
                let monthHeader = `<tr><th colspan="7">${new Date(year, month).toLocaleString('default', { month: 'long' })} ${year}</th></tr>`;
                let weekHeader = `<tr><th>Sun</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th></tr>`;
                thead.innerHTML = monthHeader + weekHeader;
                table.appendChild(thead);

                let row = document.createElement('tr');
                for (let i = 0; i < firstDayOfWeek; i++) {
                    row.appendChild(document.createElement('td'));
                }
                for (let day = 1; day <= daysInMonth; day++) {
                    let cell = document.createElement('td');
                    cell.innerText = day;
                    cell.onclick = function() { showModal(year, month, day); };
                    row.appendChild(cell);
                    if ((firstDayOfWeek + day) % 7 === 0 || day === daysInMonth) {
                        tbody.appendChild(row);
                        row = document.createElement('tr');
                    }
                }
                table.appendChild(tbody);
                calendarDiv.appendChild(table);
            }
        }

        // Populate the calendar for the years 2024 and 2025
        populateCalendar(2024);
        populateCalendar(2025);

        // Show modal with event input
    function showModal(year, month, day) {
        const modal = document.getElementById('eventModal');
        modal.style.display = 'block';
        selectedDay = day; // Save the selected day
    }

    // Save event and close modal
    function saveEvent() {
        const eventInput = document.getElementById('eventInput');
        const eventText = eventInput.value.trim();

        if (eventText) {
            // Store the event for the selected day
            const dateKey = `${year}-${month + 1}-${selectedDay}`;
            events[dateKey] = eventText;

            // Highlight the selected date
            const selectedDateCell = document.getElementById(selectedDay);
            selectedDateCell.classList.add('highlighted');

            closeModal(); // Close the modal
        } else {
            alert('Please enter an event.'); // Show an alert if no event is entered
        }
    }

    // Close the modal
    function closeModal() {
        const modal = document.getElementById('eventModal');
        modal.style.display = 'none';
    }

    // Display previously inputted event (assuming events[dateKey] contains the saved event)
    function displayEvent(event) {
        const displayBox = document.getElementById('displayBox');
        displayBox.innerHTML = `
            <p>Previously inputted event:</p>
            <p>${event}</p>
            <button onclick="addNewInput()">Add New Input</button>
            <button onclick="closeDisplayBox()">Close</button>
        `;
        displayBox.style.display = 'block';
    }

    // Add New Input button (to reopen the modal)
    function addNewInput() {
        const modal = document.getElementById('eventModal');
        modal.style.display = 'block';
    }

    // Close display box
    function closeDisplayBox() {
        const displayBox = document.getElementById('displayBox');
        displayBox.style.display = 'none';
    }
    </script>
</body>
</html>
