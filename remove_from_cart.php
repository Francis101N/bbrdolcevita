<?php
session_start();
include './connection/connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cart_id'])) {

    $cart_id = intval($_POST['cart_id']);
    $session_id = session_id();

    $stmt = $db->prepare("DELETE FROM cart WHERE id = ? AND session_id = ?");
    $stmt->bind_param("is", $cart_id, $session_id);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
  
        echo "<script>
                alert('Item removed from cart.');
                window.location.href='cart';
              </script>";
        exit;
    } else {
       
        echo "<script>
                alert('Failed to remove item from cart.');
                window.location.href='cart';
              </script>";
        exit;
    }

} else {
    // Invalid request
    echo "<script>
            alert('Invalid request.');
            window.location.href='cart';
          </script>";
    exit;
}
?>
