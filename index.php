<?php
/**
 * Created by PhpStorm.
 * User: chamodshehanka
 * Date: 9/3/2018
 * Time: 10:47 PM
 */
require_once ("controller/Connection.php");

$db = Connection::getInstance();

//require ("controller/signIn.php");
//include ("controller/signIn.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rent 18 | Student Transport Service</title>
    <link href="images/icon.png" rel="shortcut icon">

    <!--SEO-->
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
    <meta name="description" content="Rent LIO description."/>
    <meta name="keywords" content="rent lio,school transport service,rent lio web,chamod shehanka,rent 18,rent18,sliit"/>
    <meta name="generator" content="2018.1.0.386"/>
    <meta property="og:title" content="RentLIO Web"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="rentlio.tk"/>
    <meta property="og:image" content="http://rent18.tk/images/icon.png"/>
    <meta property="og:image:type" content="image/jpeg"/>
    <meta property="og:image:width" content="300"/>
    <meta property="og:image:height" content="300"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--End SEO-->

    <!--Site Verification-->
    <meta name="google-site-verification" content="-6pThEjIUfFf0ZfA_IWSLmsVX7tL-HquC03Apt-d8S0" />
    <!--Site Verification-->

    <!--Remove banner-->
    <link rel="stylesheet" href="http://chamodshehanka.com/assets/removewebhost.css">

    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!--End Bootstrap CSS-->

    <!-- UIKit CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.10/css/uikit.min.css" />
    <!--End UIKit CSS-->

    <!--Critical CSS-->
    <style>
        #search-container{
            background-color: #0597F2;
            opacity: 0.8;
            width: 60%;
            height: 30%;
            border-radius: 5px 5px 5px 5px;
        }
    </style>
    <!--End Critical CSS-->

    <!--Custom CSS-->
    <link href="css/index.css" rel="stylesheet">
    <link href="css/ux-styles.css" rel="stylesheet">
    <!--End Custom CSS-->

    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <!--End Google fonts-->
</head>

<body>

<!--Header-->
<div id="header" uk-sticky="media: 960" class="uk-navbar-container tm-navbar-container uk-sticky uk-sticky-fixed header-hide" style="position: fixed; top: 0; width: 1349px;background-color: #1e87f0">
    <div class="uk-container uk-container-expand">
        <nav class="uk-navbar"><div class="uk-navbar-left">
                <a id="nav-logo-name" href="#" class="uk-navbar-item uk-logo" style="color: azure;">
                    <img src="images/icon.png" class="uk-margin-small-right" width="50" height="50">
                    Rent 18
                </a>
            </div>
            <div class="uk-navbar-right">
                <ul class="uk-navbar-nav uk-visible@m">
                    <li>
                        <button id="btn-sign-in" class="uk-button uk-button-secondary uk-margin-small-right btn-blue"
                                type="button" uk-toggle="target: #modal-close-outside">Sign In</button>
                    </li>
                    <li>
                        <button class="uk-button uk-button-secondary uk-margin-small-right" type="button"
                                uk-toggle="target: #modal-sign-up">Sign Up</button>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<!--End Header-->

<!--Hero search section-->
<section class="hero-background" style="height: 90vh;padding-top: 2px">
    <div style="padding-top: 160px">

        <h1 id="banner-text" align="center">FIND YOUR <span class="orange-text">NEW</span> SCHOOL TRANSPORT</h1>
        <div style="height: 15px"></div>
        <div id="search-container" style="height: 80px;margin: auto;">
            <br>
            <div class="row">
                <div class="col-sm-3">
                    <div style="width: 60px;height: 1px;float: left"></div>
                    <label>
                        <select class="uk-select">
                            <option>Vehicle</option>
                            <option>Van</option>
                            <option>Mini Bus</option>
                            <option>Bus</option>
                        </select>
                    </label>

                </div>

                <div class="col-sm-3">
                    <input class="uk-input" type="text" placeholder="From" required>
                </div>

                <div class="col-sm-3">
                    <input class="uk-input" type="text" placeholder="To" required>
                </div>

                <div class="col-sm-3">
                    <button id="btn-search-vehicle" class="uk-button uk-button-secondary">Search</button>
                </div>
            </div>

        </div>
    </div>
</section>
<!--End hero search section-->

<!--SignIn Modal-->
<div id="modal-close-outside" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <button class="uk-modal-close-outside" type="button" uk-close></button>
        <h2 class="uk-modal-title">Sign In</h2>

        <form action="controller/signIn.php">
            <div class="uk-margin">
                <input id="txtEmail" class="uk-input" name="email" type="email" placeholder="Email or User Name">
            </div>

            <div class="uk-margin">
                <input id="txtPassword" class="uk-input" name="password" type="password" placeholder="Password">
            </div>

            <div style="float: right">
                <button id="btnSignIn" class="uk-button uk-button-primary" onclick="login()">Sign In</button>
            </div>
        </form>
        <br><br>
        <div class="uk-alert-primary" uk-alert>
            <a class="uk-alert-close" uk-close></a>
            <p>Don't have an account yet? <a uk-toggle="target: #modal-sign-up"><u>Sign Up</u></a></p>
        </div>
    </div>
</div>
<!--End SignIn modal-->

<!--Sign Up Modal-->
<div id="modal-sign-up" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <button class="uk-modal-close-outside" type="button" uk-close></button>
        <h2 class="uk-modal-title">Sign Up</h2>

        <div uk-grid>
            <div class="uk-grid">
                <div class="uk-width-1-2">
                    <input class="uk-input" type="text" placeholder="First Name" required>
                </div>

                <div class="uk-width-1-2">
                    <input class="uk-input" type="text" placeholder="Last Name" required>
                </div>

                <div style="height: 7px"></div>
                <div class="uk-width-1-1">
                    <input class="uk-input" type="email" placeholder="Email Address" required>
                </div>

                <div style="height: 7px"></div>
                <div class="uk-width-1-1">
                    <input class="uk-input" type="text" placeholder="Phone Number" required>
                </div>

                <div style="height: 10px"></div>

                <!--Adding bootstrap grid system-->
                <div class="row"></div>

                <div class="uk-width-1-5">
                    <label><input class="uk-radio" type="radio" name="radioButton" checked> Parent</label>
                </div>

                <div class="uk-width-1-5">
                    <label><input class="uk-radio" type="radio" name="radioButton"> Student</label>
                </div>

                <div class="uk-width-1-5">
                    <label><input class="uk-radio" type="radio" name="radioButton"> Vehicle Owner</label>
                </div>

                <div class="uk-width-1-5">
                    <label><input class="uk-radio" type="radio" name="radioButton">Business Owner</label>
                </div>

                <div style="height: 7px"></div>
                <div class="uk-width-1-1">
                    <input class="uk-input" type="password" placeholder="Password" required>
                </div>

                <div style="height: 7px"></div>
                <div class="uk-width-1-1">
                    <input class="uk-input" type="password" placeholder="Confirm Password" required>
                </div>

                <div style="height: 7px"></div>
                <div class="uk-width-1-1">
                    <label>
                        <input class="uk-checkbox" type="checkbox" required>
                        I agree to the terms and conditions.
                    </label>
                </div>
            </div>
        </div>

        <div style="height: 7px"></div>
        <div style="float: right">
            <button id="btnSignUp" class="uk-button uk-button-primary">Sign Up</button>
        </div>
        <div style="height: 22px"></div>
        <div class="uk-alert-primary" uk-alert>
            <a class="uk-alert-close" uk-close></a>
            <p>Do you have an account? <a uk-toggle="target: #modal-close-outside"><u>Sign In</u></a></p>
        </div>
    </div>
</div>
<!--End Sign Up Modal-->

<!--Featured Section-->
<div class="container">
    <div class="row">
        <h5 class="custom-heading">Featured <span class="orange-text">Transport</span> Services</h5>
        <br>
        <div class="col-sm-4">
            <div>
                <div class="uk-card uk-card-hover">
                    <div class="uk-card-media-top">
                        <p align="center"><img src="images/bus-1.jpeg" alt=""></p>
                    </div>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title">Kollupitiya - Kaduwela</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        <div class="card-button">
                            <button class="uk-button uk-button-primary">BOOK A SEAT</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div>
                <div class="uk-card uk-card-hover">
                    <div class="uk-card-media-top">
                        <p align="center"><img src="images/bus-2.jpeg" alt=""></p>
                    </div>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title">Kollupitiya - Kaduwela</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        <div class="card-button">
                            <button class="uk-button uk-button-primary">BOOK A SEAT</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div>
                <div class="uk-card uk-card-hover">
                    <div class="uk-card-media-top">
                        <p align="center"><img src="images/bus-3.jpeg" alt=""></p>
                    </div>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title">Kollupitiya - Kaduwela</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        <div class="card-button">
                            <button class="uk-button uk-button-primary">BOOK A SEAT</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End Featured Section-->

<!--Footer-->
<footer class="page-footer font-small blue pt-4">
    <br>
    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">

        <div class="container">
            <!-- Grid row -->
            <div class="row">
                <div class="col-md-3">
                    <h5 align="left" class="footer-list-items-titles">Rent-18</h5>
                    <p class="no-margin" align="left">Address: 200 East 65th Street 17NO<br>
                        New York<br>
                        Email: support@rent18.com<br>
                        Phone: +94 (11) 123 456789<br>
                        Fax: +94 (11) 123 456789
                </div>
                <div class="col-md-3 footer-list-items">
                    <h5 align="left" class="footer-list-items-titles" style="padding-left: 12%;">Ride</h5>
                    <ul class="footer-nav" style="list-style: none;">
                        <li><a href="#modal-ride-terms" class="uk-link-reset" uk-toggle>Terms and Conditions</a></li>
                        <li><a href="#" class="uk-link-reset">House for rent</a></li>
                        <li><a href="#" class="uk-link-reset">Support</a></li>
                        <li><a href="#" class="uk-link-reset">Contact an agent</a></li>
                        <li><a href="#" class="uk-link-reset">FAQs</a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer-list-items">
                    <h5 align="left" class="footer-list-items-titles" style="padding-left: 12%;">Drive</h5>
                    <ul class="footer-nav" style="list-style: none;">
                        <li><a href="#modal-drive-terms" class="uk-link-reset" uk-toggle>Terms and Conditions</a></li>
                        <li><a href="#" class="uk-link-reset">House for rent</a></li>
                        <li><a href="#" class="uk-link-reset">Support</a></li>
                        <li><a href="#" class="uk-link-reset">Contact an agent</a></li>
                        <li><a href="#" class="uk-link-reset">FAQs</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <p class="no-margin" align="left">&copy; 2018 Rent-18 </p>
                    <p align="left">All rights reserved</p>

                    <p align="left" style="font-size: 24px;">
                        <ion-icon name="logo-facebook"></ion-icon>
                        <ion-icon name="logo-instagram"></ion-icon>
                        <ion-icon name="logo-youtube"></ion-icon>
                    </p>
                </div>
            </div>
            <!-- Grid row -->

        </div>

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
        <a href="https://rent18.tk" style="text-decoration: none;" class="uk-link-reset">Rent 18</a>
    </div>
    <!-- Copyright -->

</footer>
<!--End Footer-->

<!--Ride Terms and conditions modal-->
<div id="modal-ride-terms" uk-modal>
    <div class="uk-modal-dialog">

        <button class="uk-modal-close-default" type="button" uk-close></button>

        <div class="uk-modal-header">
            <h2 class="uk-modal-title">Rent 18 - Ride Terms & Conditions</h2>
        </div>

        <div class="uk-modal-body" uk-overflow-auto>
            <p>These terms and conditions create a contract between you and Apple (the “Agreement”). Please read the Agreement carefully. To confirm your understanding and acceptance of the Agreement, click “Agree.”</p>
            <h5>A. INTRODUCTION TO OUR SERVICES</h5>
            <p>This Agreement governs your use of Apple’s services (“Services”), through which you can buy, get, license, rent or subscribe to media, apps (“Apps”), and other in-app services (“Content”). Our Services are: iTunes Store, App Store, iBooks Store, Apple Music, and Apple News. Our Services are available for your use in your country of residence (“Home Country”). To use our Services, you need compatible hardware, software (latest version recommended and sometimes required) and Internet access (fees may apply). Our Services’ performance may be affected by these factors.</p>
            <h5>B. USING OUR SERVICES</h5>
            <p>PAYMENTS, TAXES, AND REFUNDS</p>
            <p>You can acquire Content on our Services for free or for a charge, either of which is referred to as a “Transaction.” Each Transaction is an electronic contract between you and Apple, and/or you and the entity providing the Content on our Services. However, if you are a customer of Apple Distribution International and you acquire an App or a book, Apple Distribution International is the merchant of record; this means that you acquire the Content from Apple Distribution International, and it is licensed by the App Provider (as defined below) or book publisher. When you make your first Transaction, we will ask you to choose how frequently we should ask for your password for future Transactions. If you enable Touch ID for Transactions, we will ask you to authenticate all Transactions with your fingerprint. Manage your password settings at any time by following these instructions: https://support.apple.com/en-us/HT204030. Apple will charge your payment method (such as your credit card, debit card, gift card/code, or other method available in your Home Country) for any paid Transactions, including any applicable taxes. If you pre-order Content, you will be charged when the Content is delivered to you (unless you cancel prior to the Content’s availability). In accordance with local law, Apple may update information regarding your payment method if provided such information by your financial institution. For details about how Transactions are billed, please visit http://support.apple.com/kb/HT5582. All Transactions are final. Content prices may change at any time. If technical problems prevent or unreasonably delay delivery of Content, your exclusive and sole remedy is either replacement of the Content or refund of the price paid, as determined by Apple. From time to time, Apple may refuse a refund request if we find evidence of fraud, refund abuse, or other manipulative behavior that entitles Apple to a corresponding counterclaim. Terms related to gift cards/codes are available here: https://www.apple.com/legal/internet-services/itunes/giftcards/.</p>
            <p>Using our Services and accessing your Content requires an Apple ID. An Apple ID is the account you use across Apple’s ecosystem. Your Apple ID is valuable, and you are responsible for maintaining its confidentiality and security. Apple is not responsible for any losses arising from the unauthorized use of your Apple ID. Please contact Apple if you suspect that your Apple ID has been compromised.</p>
            <p>You must be age 13 (or equivalent minimum age in your Home Country, as set forth in the registration process) to create an Apple ID and use our Services. Apple IDs for persons under this age can be created by a parent or legal guardian using Family Sharing or by an approved educational institution.</p>
        </div>

        <div class="uk-modal-footer uk-text-right">
            <button class="uk-button uk-button-default uk-modal-close" type="button">Close</button>
            <button class="uk-button uk-button-primary" type="button">Agree</button>
        </div>

    </div>
</div>
<!--Ride Terms and conditions modal-->

<!--Drive Terms and conditions modal-->
<div id="modal-drive-terms" uk-modal>
    <div class="uk-modal-dialog">

        <button class="uk-modal-close-default" type="button" uk-close></button>

        <div class="uk-modal-header">
            <h2 class="uk-modal-title">Rent 18 - Drive Terms & Conditions</h2>
        </div>

        <div class="uk-modal-body" uk-overflow-auto>
            <p>These terms and conditions create a contract between you and Apple (the “Agreement”). Please read the Agreement carefully. To confirm your understanding and acceptance of the Agreement, click “Agree.”</p>
            <h5>A. INTRODUCTION TO OUR SERVICES</h5>
            <p>This Agreement governs your use of Apple’s services (“Services”), through which you can buy, get, license, rent or subscribe to media, apps (“Apps”), and other in-app services (“Content”). Our Services are: iTunes Store, App Store, iBooks Store, Apple Music, and Apple News. Our Services are available for your use in your country of residence (“Home Country”). To use our Services, you need compatible hardware, software (latest version recommended and sometimes required) and Internet access (fees may apply). Our Services’ performance may be affected by these factors.</p>
            <h5>B. USING OUR SERVICES</h5>
            <p>PAYMENTS, TAXES, AND REFUNDS</p>
            <p>You can acquire Content on our Services for free or for a charge, either of which is referred to as a “Transaction.” Each Transaction is an electronic contract between you and Apple, and/or you and the entity providing the Content on our Services. However, if you are a customer of Apple Distribution International and you acquire an App or a book, Apple Distribution International is the merchant of record; this means that you acquire the Content from Apple Distribution International, and it is licensed by the App Provider (as defined below) or book publisher. When you make your first Transaction, we will ask you to choose how frequently we should ask for your password for future Transactions. If you enable Touch ID for Transactions, we will ask you to authenticate all Transactions with your fingerprint. Manage your password settings at any time by following these instructions: https://support.apple.com/en-us/HT204030. Apple will charge your payment method (such as your credit card, debit card, gift card/code, or other method available in your Home Country) for any paid Transactions, including any applicable taxes. If you pre-order Content, you will be charged when the Content is delivered to you (unless you cancel prior to the Content’s availability). In accordance with local law, Apple may update information regarding your payment method if provided such information by your financial institution. For details about how Transactions are billed, please visit http://support.apple.com/kb/HT5582. All Transactions are final. Content prices may change at any time. If technical problems prevent or unreasonably delay delivery of Content, your exclusive and sole remedy is either replacement of the Content or refund of the price paid, as determined by Apple. From time to time, Apple may refuse a refund request if we find evidence of fraud, refund abuse, or other manipulative behavior that entitles Apple to a corresponding counterclaim. Terms related to gift cards/codes are available here: https://www.apple.com/legal/internet-services/itunes/giftcards/.</p>
            <p>Using our Services and accessing your Content requires an Apple ID. An Apple ID is the account you use across Apple’s ecosystem. Your Apple ID is valuable, and you are responsible for maintaining its confidentiality and security. Apple is not responsible for any losses arising from the unauthorized use of your Apple ID. Please contact Apple if you suspect that your Apple ID has been compromised.</p>
            <p>You must be age 13 (or equivalent minimum age in your Home Country, as set forth in the registration process) to create an Apple ID and use our Services. Apple IDs for persons under this age can be created by a parent or legal guardian using Family Sharing or by an approved educational institution.</p>
        </div>

        <div class="uk-modal-footer uk-text-right">
            <button class="uk-button uk-button-default uk-modal-close" type="button">Close</button>
            <button class="uk-button uk-button-primary" type="button">Agree</button>
        </div>

    </div>
</div>
<!--Drive Terms and conditions modal-->

<!--JS Controllers-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- UIKit JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.10/js/uikit.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.10/js/uikit-icons.min.js"></script>
<!--End UIKit JS-->

<!--Bootstrap JS-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--End Bootstrap JS-->

<script async src="js/validationController.js"></script>
<script async src="js/index.js"></script>
<script async src="js/utilController.js"></script>

<!-- Ioinic icons -->
<script src="https://unpkg.com/ionicons@4.3.0/dist/ionicons.js"></script>
<!--End Icons-->

<script type="text/javascript">
    function login() {
        $.get("controller/signIn.php");
        return false;
    }
</script>
<!--End JS Controllers-->
</body>
</html>