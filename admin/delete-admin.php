<?php
  session_start();
  require_once "pdo.php";
    $sql = "DELETE FROM booking WHERE booking_id = :zip";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(':zip' => $_GET['booking_id']));
    //$_SESSION['success'] = 'Record deleted';
    header( 'Location: viewAllBooking.php' ) ;
    return;


  $stmt = $pdo->prepare("SELECT booking_id FROM booking where booking_id = :xyz");
  $stmt->execute(array(":xyz" => $_GET['booking_id']));
  $row = $stmt->fetch(PDO::FETCH_ASSOC);
  // if ( $row === false ) {
  //   $_SESSION['error'] = 'Bad value for user_id';
  //   header( 'Location: index.php' ) ;
  //   return;
  // }
?>
