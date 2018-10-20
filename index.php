
<center><h2> Twilio SMS Sender PHP By :- Sadab Khan</h2> </center>
<style>

/* Google Fonts */
@import url(https://fonts.googleapis.com/css?family=Open+Sans);

/* set global font to Open Sans */
body {
  font-family: 'Open Sans', 'sans-serif';
  background-image: url(http://benague.ca/files/pw_pattern.png);
}

/* header */
h1 {
  color: #55acee;
  text-align: center;
}

/* header/copyright link */
.link {
  text-decoration: none;
  color: #55acee;
  border-bottom: 2px dotted #55acee;
  transition: .3s;
  -webkit-transition: .3s;
  -moz-transition: .3s;
  -o-transition: .3s;
  cursor: url(http://cur.cursors-4u.net/symbols/sym-1/sym46.cur), auto;
}

.link:hover {
  color: #2ecc71;
  border-bottom: 2px dotted #2ecc71;
}

/* button div */
#buttons {
  padding-top: 50px;
  text-align: center;
}

/* start da css for da buttons */
.btn {
  border-radius: 5px;
  padding: 15px 25px;
  font-size: 22px;
  text-decoration: none;
  margin: 20px;
  color: #fff;
  position: relative;
  display: inline-block;
}

.btn:active {
  transform: translate(0px, 5px);
  -webkit-transform: translate(0px, 5px);
  box-shadow: 0px 1px 0px 0px;
}

.blue {
  background-color: #55acee;
  box-shadow: 0px 5px 0px 0px #3C93D5;
}

.blue:hover {
  background-color: #6FC6FF;
}

.green {
  background-color: #2ecc71;
  box-shadow: 0px 5px 0px 0px #15B358;
}

.green:hover {
  background-color: #48E68B;
}

.red {
  background-color: #e74c3c;
  box-shadow: 0px 5px 0px 0px #CE3323;
}

.red:hover {
  background-color: #FF6656;
}

.purple {
  background-color: #9b59b6;
  box-shadow: 0px 5px 0px 0px #82409D;
}

.purple:hover {
  background-color: #B573D0;
}

.orange {
  background-color: #e67e22;
  box-shadow: 0px 5px 0px 0px #CD6509;
}

.orange:hover {
  background-color: #FF983C;
}

.yellow {
  background-color: #f1c40f;
  box-shadow: 0px 5px 0px 0px #D8AB00;
}

.yellow:hover {
  background-color: #FFDE29;
}

/* copyright stuffs.. */
p {
  text-align: center;
  color: #55acee;
  padding-top: 20px;
}
</style>
<title>Twilio SMS</title>


		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

		<link rel="stylesheet" href="./upload_files/demo.css">
		<link rel="stylesheet" href="./upload_files/sky-forms.css">
		<link rel="stylesheet" href="./upload_files/sky-forms-blue.css">
		<!--[if lt IE 9]>
			<link rel="stylesheet" href="css/sky-forms-ie8.css">
		<![endif]-->

		<!--[if lt IE 10]>
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
			<script src="js/jquery.placeholder.min.js"></script>
		<![endif]-->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/sky-forms-ie8.js"></script>
		<![endif]-->








<script src="./javascript/cp.js"></script>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>New Campaing</title>
    <link rel="stylesheet" href="/var/www/html/style/css/style.css">

  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->




<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" type="text/css" href="../datetimepicker/jquery.datetimepicker.css"/>
<style type="text/css">

.custom-date-style {
        background-color: red !important;
}

</style>
	</head>
	<body class="bg-blue"  bgcolor="#3498DB">
		<div class="body">
                              

			<!-- Red color scheme -->
			<form action="" method="POST" class="sky-form">
				<header>SMS Board</header>

				<fieldset>
					<section>
						<label class="label">Destination Number</label>
						<label class="input">
							<input type="text" name="mobile" value="">
						</label>
					</section>
                                                    
                                                    <fieldset>
                                                        
                                                      <section>
						<label class="label">Message</label>
						<label class="textarea textarea-resizable">
							<textarea rows="5" name="msg" maxlength="160"></textarea>
						</label>
					</section>
					  </fieldset>
							<i></i>
						</label>
					</section>


				<footer>


					<button type="submit" class="button">Submit</button>
					<button type="button" class="button button-secondary" onclick="window.history.back();">Back</button>
				</footer>
			</form>
			<!--/ Red color scheme -->

<?php
require __DIR__ . '/twilio-php-master/Twilio/autoload.php';

$number = $_POST['mobile'];
$pesan = $_POST['msg'];

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;

// Your Account Sid and Auth Token from twilio.com/console
$sid    = "XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX";
$token  = "XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX";
$client = new Client($sid, $token);


$client = new Client($sid, $token);

// Use the client to do fun stuff like send text messages!
$client->messages->create(
    // the number you'd like to send the message to
    $number,
    array(
        // A Twilio phone number you purchased at twilio.com/console
        'from' => 'Your Number Here',
        // the body of the text message you'd like to send
        'body' => $pesan
    )
);
