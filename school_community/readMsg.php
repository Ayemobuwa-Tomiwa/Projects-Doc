<?php
session_start();
include "db.php";

$q = "SELECT * FROM `msg`";
if ($rq = mysqli_query($db, $q)) {

  if (mysqli_num_rows($rq) > 0) {

    while ($data = mysqli_fetch_assoc($rq)) {
      $senderId = $data["sender_id"];
      $receiverId = $data["receiver_id"];
      $message = $data["msg"];

      // Determine the CSS class based on sender or receiver
      $messageClass = ($senderId === $_SESSION["phone"]) ? "sender" : "received";
?>
      <p class="<?= $messageClass ?>">
        <span><?= $data["phone"] ?></span>
        <?= $message ?>
      </p>
<?php
    }
  } else {
    echo "<h3>Chat is empty at this moment!</h3>";
  }
}
?>
