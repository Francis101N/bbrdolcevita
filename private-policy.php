<?php
session_start();
ini_set('display_errors', 0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Private Policy | Bbr Dolce vita</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="dist/css/bootstrap.css">

    <link href="dist/font-awesome/css/all.css" rel="stylesheet" type="text/css">

    <!-- <link rel="icon" href="./dist/images/fav.png" /> -->

    <link href="dist/css/animate.css" rel="stylesheet">

    <link href="dist/css/owl.carousel.css" rel="stylesheet">

    <link href="dist/css/owl.theme.default.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="dist/js/jquery.3.4.1.min.js"></script>

    <script src="dist/js/popper.js" type="text/javascript"></script>

    <script src="dist/js/bootstrap.js" type="text/javascript"></script>

    <script src="dist/js/owl.carousel.js"></script>

    <script src="https://code.iconify.design/iconify-icon/2.3.0/iconify-icon.min.js"></script>

    <!-- Main Stylesheet -->

    <link href="dist/style.css" rel="stylesheet" type="text/css" media="all">

    <script src="dist/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
</head>
<style>
    #navbar {
        font-size: 14px;
        padding-top: 10px;
        padding-bottom: 10px;
        position: relative;
        top: 0;
        width: 100%;
        border-bottom: none;
        background-color: #013D5FB2;
    }

    .banner {
        position: relative;
        width: 100%;
        height: 300px;
        /* adjust height as needed */
        background: url('./dist/images/banner3.jpg') center center/cover no-repeat;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .banner .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.4);
        /* dark overlay for text readability */
        z-index: 1;
    }

    .banner .container {
        position: relative;
        z-index: 2;
        text-align: center;
    }

    .banner-head {
        font-size: 2.5rem;
        font-weight: 700;
        letter-spacing: 1px;
        text-transform: uppercase;
    }

    .card {
        background-color: rgba(255, 255, 255, 0.95);
    }

    h1,
    h2,
    h3 {
        color: #222;
        /* Dark headings */
    }

    ul {
        padding-left: 1.25rem;
        margin-bottom: 1rem;
    }

    p {
        line-height: 1.7;
    }

    hr {
        border-color: #1a9acd;
        /* Bootstrap red accent */
        border-width: 2px;
    }

    .card:hover {
        transform: translateY(-5px);
        transition: all 0.3s ease;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    .icon svg {
        transition: transform 0.3s ease;
    }

    .card:hover .icon svg {
        transform: scale(1.2);
    }

    @media (max-width: 768px) {
        .d-flex {
            flex-direction: column !important;
        }
    }


    /* Make mobile cart icon white */
    @media (max-width: 767.98px) {
        .d-md-none svg path {
            stroke: #ffffff !important;
        }

        .d-md-none svg circle {
            fill: #ffffff !important;
        }
    }
</style>

<body>
    <?php include 'inc/header.php'; ?>

    <div class="banner">
        <div class="overlay"></div>
        <div class="container">
            <div class="banner-head">PRIVATE POLICY</div>
        </div>
    </div>
    <br><br><br>

    <!-- Privacy Policy Section -->
    <div class="container my-5 ">
        <div class="card shadow-sm rounded-lg p-4 p-md-5">
            <h1 class="mb-2 fw-bold text-dark">Privacy Policy</h1>
            <small class="text-muted"><b class="text-danger">Last updated :</b> Febuary 25, 2026</small>

            <p class="mt-3">
                BBR Dolce Vita ("we," "us," or "our") is dedicated to safeguarding your privacy. This Privacy Policy
                outlines
                how we collect, use, disclose, and protect your information when you visit our website or contact us
                through our forms.
            </p>
            <p>
                Please review this Privacy Policy carefully. By using our website or services, you acknowledge that you
                understand
                and agree to the terms described herein.
            </p>
            <hr class="my-4">

            <h2 class="fw-bold mt-4">Information We Collect</h2>

            <h3 class="mt-3">Contact Form Details</h3>
            <p><strong>When using our contact form, we collect:</strong></p>
            <ul>
                <li>Full Name</li>
                <li>Email Address</li>
                <li>Message Content</li>
                <li>Timestamp of Submission</li>
            </ul>

            <h3 class="mt-3">Booking Form Details</h3>
            <p><strong>When submitting a booking, we collect additional information such as:</strong></p>
            <ul>
                <li>First and Last Name</li>
                <li>Email Address</li>
                <li>Physical Address (optional)</li>
                <li>Accommodation Preferences</li>
                <li>Payment Method (processed securely by third-party payment providers)</li>
            </ul>

            <h3 class="mt-3">Automatically Collected Data</h3>
            <p><strong>When you visit our website, certain data may be collected automatically, including:</strong></p>
            <ul>
                <li>IP Address</li>
                <li>Browser Type & Version</li>
                <li>Operating System</li>
                <li>Pages Visited and Time Spent</li>
                <li>Referring Website Addresses</li>
            </ul>

            <h3 class="mt-3">Cookies and Tracking</h3>
            <p>
                We use cookies and similar tracking technologies to monitor website activity and store information.
                Cookies may include a unique, anonymous identifier. You may configure your browser to reject cookies or
                alert you when cookies are being sent.
            </p>

            <h3 class="mt-3">Third-Party Services</h3>
            <p>
                We employ Google reCAPTCHA to prevent spam and abuse on our contact forms. Use of reCAPTCHA is governed
                by Google's Privacy Policy and Terms of Service.
            </p>
            <hr class="my-4">

            <h3 class="mt-3">Legal Basis for Processing (GDPR)</h3>
            <p><strong>Under the General Data Protection Regulation (GDPR), we process your personal data based on the
                    following legal grounds:</strong></p>
            <ul>
                <li><b>CONSENT: </b>We collect and process certain personal data based on your explicit consent, such as
                    when you submit our contact form or sign up for marketing communications.</li>
                <li><b>Contractual Necessity: </b> We process your personal data to fulfill our contractual obligations
                    to you when you
                    book a retreat with us.</li>
                <li><b>Legitimate Interests: </b>We may process your personal data based on our legitimate interests,
                    such as for security purposes, fraud prevention, and to improve our services.</li>
                <li><b>Legal Obligation:</b> We may process your personal data to comply with applicable laws and
                    regulations.</li>

            </ul>
            <hr class="my-4">

            <h3 class="mt-3">How We Use Your Information</h3>
            <p><strong>We may use the information we collect from you for the following purposes:</strong></p>
            <ul>
                <li>To respond to your inquiries and provide customer service.</li>
                <li>To process and manage your retreat booking.</li>
                <li>To send you information about our retreats, offers, or services (with your consent).</li>
                <li>To improve our website and services.</li>
                <li>To protect our website against fraud and abuse</li>
                <li>To comply with applicable laws and regulations</li>
            </ul>
            <hr class="my-4">

            <h3 class="mt-3">Information Storage and Transfer</h3>
            <p>Your information may be transferred to and maintained on servers located outside of your state, province,
                country, or other governmental jurisdiction where the data protection laws may differ from those in your
                jurisdiction.</p>
            <p>If you are located outside Italy and choose to provide information to us, please note that we transfer
                the information, including personal data, to Italy and process it there. Your consent to this Privacy
                Policy followed by your submission of such information represents your agreement to that transfer. </p>
            <hr class="my-4">

            <h3>Information Security</h3>
            <p>We implement appropriate security measures to protect your personal information: </p>
            <div class="container my-5">
                <div class="d-flex flex-column flex-md-row justify-content-between gap-4">

                    <!-- Card 1 -->
                    <div class="card flex-fill text-center p-4 shadow-sm border-0 rounded-lg">
                        <div class="icon mb-3">
                            <!-- Example SVG icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="bi bi-shield-lock" width="40" height="40"
                                fill="#1a9acd" viewBox="0 0 16 16">
                                <path d="M5.5 8a1.5 1.5 0 0 1 3 0v1h-3V8z" />
                                <path
                                    d="M8 0c-.69 0-1.548.21-2.368.574C4.735.93 4 1.464 4 2v5.5c0 .345.178.648.46.828L8 10.995l3.54-2.667A1 1 0 0 0 12 7.5V2c0-.536-.735-1.07-1.632-1.426C9.548.21 8.69 0 8 0z" />
                            </svg>
                        </div>
                        <h4 class="fw-bold">DATA PROTECTION</h4>
                        <p class="text-muted mt-2">We use secure methods to collect and store your information</p>
                    </div>

                    <!-- Card 2 -->
                    <div class="card flex-fill text-center p-4 shadow-sm border-0 rounded-lg">
                        <div class="icon mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="bi bi-lock-fill" width="40" height="40"
                                fill="#1a9acd" viewBox="0 0 16 16">
                                <path
                                    d="M8 1a4 4 0 0 0-4 4v3H3a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1h-1V5a4 4 0 0 0-4-4z" />
                            </svg>
                        </div>
                        <h4 class="fw-bold">SECURE TRANSMISSION</h4>
                        <p class="text-muted mt-2">All data is transmitted over secure HTTPS connections</p>
                    </div>

                    <!-- Card 3 -->
                    <div class="card flex-fill text-center p-4 shadow-sm border-0 rounded-lg">
                        <div class="icon mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="bi bi-person-check" width="40" height="40"
                                fill="#1a9acd" viewBox="0 0 16 16">
                                <path
                                    d="M15.854 5.854a.5.5 0 0 0-.708-.708L11.5 8.793 10.354 7.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l4-4z" />
                                <path d="M10 5a2 2 0 1 0-4 0 2 2 0 0 0 4 0zM8 7a3 3 0 0 0-3 3v1h6V10a3 3 0 0 0-3-3z" />
                            </svg>
                        </div>
                        <h4 class="fw-bold">LIMITED ACCESS</h4>
                        <p class="text-muted mt-2">Only authorized personnel can access your information</p>
                    </div>

                </div>
            </div>
            <p>While we implement safeguards designed to protect your information, no security system is impenetrable.
                We cannot guarantee the security of your data transmitted to our site; any transmission is at your own
                risk.</p>
            <hr class="my-4">

            <h3 class="mt-3">Data Retention</h3>
            <p>We will retain your personal information only for as long as is necessary for the purposes set out in
                this Privacy Policy. We will retain and use your information to the extent necessary to comply with our
                legal obligations, resolve disputes, and enforce our policies. </p>
            <p>For booking-related data, we typically retain information for 7 years after your retreat to comply with
                tax and legal requirements. For marketing communications, we retain your data until you withdraw
                consent.</p>
            <hr class="my-4">

            <h3 class="mt-3">Your Rights Under GDPR</h3>
            <p><strong>If you are a resident of the European Economic Area (EEA), you are entitled to the following data
                    protection rights:</strong></p>
            <ul>
                <li><b>Access:</b> You can request a copy of the personal data we hold about you.</li>
                <li><b>Rectification:</b> You can ask us to correct any inaccuracies or complete any incomplete
                    information in your personal data.</li>
                <li><b>Erasure:</b> You may request that we delete your personal data, subject to applicable conditions.
                </li>
                <li><b>Restriction of Processing:</b> You can request that we limit the processing of your personal data
                    under certain circumstances.</li>
                <li><b>Objection:</b> You have the right to object to the processing of your personal data, in certain
                    cases.</li>
                <li><b>Data Portability:</b> You can request that your data be transferred to another organization, or
                    directly to you, when technically feasible.</li>
                <li><b>Withdraw Consent:</b> You can withdraw any consent previously given at any time, where consent is
                    the legal basis for processing.</li>
            </ul>
            <p>To exercise any of these rights, please contact us using the details provided at the end of this Privacy
                Policy. We may require additional information to verify your identity before fulfilling your request.
            </p>
            <div class="bg-primary text-white p-3 rounded-3 d-flex align-items-start gap-2">

                <!-- File / Upload SVG Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                    class="flex-shrink-0 mt-1" viewBox="0 0 16 16">
                    <path
                        d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zM9.5 1.5V4a1 1 0 0 0 1 1H13" />
                    <path d="M8 11V6m0 0L6.5 7.5M8 6l1.5 1.5" />
                </svg>

                <div>
                    You may request a copy of your personal data by contacting us.
                    We will provide your data in a commonly used electronic format
                    within 30 days of your request.
                </div>

            </div>
            <hr class="my-4">

            <h3 class="mt-3">Third-Party Disclosure</h3>
            <p><strong>We do not sell, rent, or trade your personally identifiable information to third parties, except
                    in the circumstances outlined below:</strong></p>

            <ul>
                <li><b>Service Providers:</b> We may share your information with trusted third-party service providers
                    who perform services on our behalf, such as payment processing, email communications, website
                    hosting, and customer support. These providers are contractually obligated to protect your
                    information.</li>

                <li><b>Legal Compliance:</b> We may disclose your personal information when required to do so by law or
                    in response to valid legal requests, such as court orders, subpoenas, or regulatory requirements.
                </li>

                <li><b>Business Transfers:</b> In the event of a merger, acquisition, restructuring, or sale of assets,
                    your personal information may be transferred as part of that transaction, subject to appropriate
                    confidentiality safeguards.</li>
            </ul>

            <hr class="my-4">

            <h3 class="mt-3">Changes to This Privacy Policy</h3>
            <p>We may update our Privacy Policy from time to time. We will notify you of any changes by posting the new
                Privacy Policy on this page and updating the "Last updated" date. You are advised to review this Privacy
                Policy periodically for any changes.</p>
            <p>Changes to the Privacy Policy are effective when they are posted on this page. If we make material
                changes, we may provide additional notice, such as sending you an email notification.</p>

            <hr class="my-4">

            <h3 class="mt-3">Data Protection Officer</h3>
            <p>We have appointed a Data Protection Officer (DPO) who is responsible for overseeing questions regarding
                this
                Privacy Policy. If you have any questions about this Privacy Policy, including any requests to exercise
                your
                legal rights, please contact our DPO using the details provided below.</p>

            <hr class="my-4">

            <h3 class="mt-3">Complaints</h3>
            <p>You have the right to make a complaint at any time to the supervisory authority for data protection
                issues in your country. In Italy, this is the Garante per la protezione dei dati personali
                (https://www.garanteprivacy.it/). We would, however, appreciate the chance to deal with your concerns
                before you approach the supervisory authority, so please contact us in the first instance.</p>

            <hr class="my-4">

            <h3 class="mt-3">Contact Us</h3>
            <p>If you have any questions about this Privacy Policy or our data practices, please contact us at:</p>
            <ul>
                <li><b>Our Address : </b> VIA MAURE 14, 18033 CAMPOROSSO, IMPERIA ITALY</li>
                <li><b>Our Email : </b> INFO@BBRDOLCEVITA.COM</li>
                <li><b>Our Phone : </b> +39 388 159 5498</li>
            </ul>
        </div>
    </div>
    <?php include 'inc/footer.php'; ?>

</body>

</html>