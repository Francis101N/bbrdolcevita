<?php
session_start();

if($_SERVER['REQUEST_METHOD'] !== 'POST'){
    header("Location:index.php");
    exit;
}

$privacy_consent = isset($_POST['privacy_consent']) ? "Yes" : "No";
$marketing_consent = isset($_POST['marketing_consent']) ? "Yes" : "No";

if($privacy_consent !== "Yes"){
    echo "<script>
    alert('You must accept the privacy policy to continue.');
    window.history.back();
    </script>";
    exit;
}

$_SESSION['privacy_consent'] = $privacy_consent;
$_SESSION['marketing_consent'] = $marketing_consent;

echo "<script>
alert('Consent saved successfully.');
window.location='index';
</script>";
?>