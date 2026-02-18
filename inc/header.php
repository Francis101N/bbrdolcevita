<?php
session_start();
include './connection/connect.php';

$session_id = session_id();

// Count number of items in cart for this session
$stmt = $db->prepare("SELECT COUNT(*) AS total_items FROM cart WHERE session_id = ?");
$stmt->bind_param("s", $session_id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$cart_count = $row['total_items'] ?? 0;
?>
<nav class="navbar navbar-expand-md sticky-top navbar-light" id="navbar">
  <div class="container">

    <a class="navbar-brand" href="./">
      <img src="./dist/images/BBR_logo-removebg-preview-removebg-preview.png" class="img-fluid" style="width: 100px;">
    </a>

    <!-- Right Side (Mobile: Cart + Toggler) -->
    <div class="d-flex align-items-center">

      <!-- Cart Icon (VISIBLE ONLY ON SMALL SCREENS) -->
      <a href="cart" class="nav-link d-md-none position-relative mr-2 p-0">
        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
          style="cursor:pointer;">
          <path d="M3 3H5L6.5 14H18.5L21 6H6" stroke="#1a9acd" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round" />
          <circle cx="9" cy="20" r="1.5" fill="#1a9acd" />
          <circle cx="18" cy="20" r="1.5" fill="#1a9acd" />
        </svg>

        <?php if ($cart_count > 0): ?>
          <span class="badge bg-danger rounded-circle position-absolute d-flex align-items-center justify-content-center"
            style="font-size: 0.7rem; width: 18px; height: 18px; top: -6px; right: -6px;">
            <?= $cart_count ?>
          </span>
        <?php endif; ?>
      </a>

      <!-- Toggler -->
      <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect y="5" width="30" height="3" fill="#1a9acd" />
          <rect y="13.5" width="30" height="3" fill="#1a9acd" />
          <rect y="22" width="30" height="3" fill="#1a9acd" />
        </svg>
      </button>

    </div>


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">

        <li class="nav-item"><a class="nav-link" href="./">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="about">About Us</a></li>
        <li class="nav-item"><a class="nav-link" href="retreats">Retreats</a></li>
        <li class="nav-item"><a class="nav-link" href="schedule">Schedule</a></li>
        <!-- <li class="nav-item"><a class="nav-link" href="gallery">Gallary</a></li> -->
        <li class="nav-item"><a class="nav-link" href="accomodations">Accommodations</a></li>

        <!-- Cart Icon (VISIBLE ONLY ON DESKTOP) -->
        <li class="nav-item d-none d-md-flex align-items-center mr-3 position-relative">
          <a href="cart" class="nav-link p-0 position-relative">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
              style="cursor:pointer;">
              <path d="M3 3H5L6.5 14H18.5L21 6H6" stroke="#1a9acd" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" />
              <circle cx="9" cy="20" r="1.5" fill="#1a9acd" />
              <circle cx="18" cy="20" r="1.5" fill="#1a9acd" />
            </svg>

            <?php if ($cart_count > 0): ?>
              <span class="badge bg-danger rounded-circle position-absolute" style="font-size: 0.7rem; width: 18px; height: 18px; display: flex; align-items: center; justify-content: center;
                         top: -6px; right: -6px;">
                <?= $cart_count ?>
              </span>
            <?php endif; ?>
          </a>
        </li>

        <li class="nav-item2">
          <a class="nav-link2" href="contact"><button>Contact Us</button></a>
        </li>

      </ul>
    </div>

  </div>
</nav>