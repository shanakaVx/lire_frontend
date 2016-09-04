<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Lire | Framework that reads</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/font-awesome/css/lirefonts.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link href="css/grayscale.css" rel="stylesheet">
    <link href="vendor/bootstrap-slider/slider.css" rel="stylesheet">

    <!-- Views CSS -->
    <link href="css/dashboard.css" rel="stylesheet">
    <link href="css/timeline.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="icon-fa-lire-logo"></i> <span class="light">Lire</span>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#dashboard">Dashboard</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#read">Read</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#record">Record</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#learn">Learn</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#api">API</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About Lire</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <span class="icon-fa-lire-logo" style="font-size: 1500%;"></span>
                        <p class="intro-text">tone based voice synthesizer framework for voice based application development</p>

                        <a href="#dashboard" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Dashboard Section -->
    <section id="dashboard" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Dashboard</h2>
                <p>Click and play the letters, or drag and drop on to the SpeechTimeline to read</p>
            </div>
        </div>
        <div class="row">
            <div id="container">
                <div id="content">

                </div>

                <div id="vowels">
                    <div id='language'>
                        <select id="lang">
                            <option name="si">Sinhala</option>
                            <option name="ta">Tamil</option>
                        </select>
                    </div>
                    <div id=keys>
                        <!-- dynamic content -->
                    </div>
                </div>
            </div>
        </div><br>

        <audio id="audio" preload="auto" controls="">
            <source src=""> HTML5 audio not supported in this browser!
        </audio>

        <!-- Timeline section inside the dashboard -->
        <div class="row">

            <ul id="playlist" class="timeline" draggable="true">
                <li class="entry">
                    <button id="delete" class="delete">X</button><br>
                    <a data="voiceprofiles/1/01-3482-3536.wav" data-pitch="N" data-time="L">
                        a
                    </a>
                </li>
                <li class="entry">
                    <button id="delete" class="delete">X</button><br>
                    <a data="voiceprofiles/1/01-3482-3537.wav" data-pitch="H" data-time="S">
                        aa
                    </a>
                </li>
                <li class="entry">
                    <button id="delete" class="delete btn-tile">X</button><br>
                    <a data="voiceprofiles/1/01-3482-3542.wav" data-pitch="L" data-time="N">
                        a
                    </a>
                </li>

            </ul>

        </div>

        <div class="container well">
            <div class="row">
                <div class="col-md-4">
                    <h4>Tone options</h4>
                </div>
                <div class="col-md-2">
                    <h3 id="letterEdit"></h3>
                </div>
                <div class="col-md-3">
                    <a class="btn btn-default btn-lg">Reset</a>
                </div>
                <div class="col-md-3">
                    <a id="setopt" class="btn btn-default btn-lg">Apply</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1 col-sm-1">
                    Pitch
                </div>
                <div class="col-md-3 col-sm-3">
                    <input id="pitchSlider" type="text" />
                </div>
            </div>
            <div class="row">&nbsp;	&nbsp;</div>
            <div class="row">
                <div class="col-md-1 col-sm-1">
                    Timing
                </div>
                <div class="col-md-3 col-sm-3">
                    <input id="timingSlider" type="text" />
                </div>
            </div>
        </div>

    </section>

    <!-- Tokenizer Section -->
    <section id="read" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Read from Sinhala</h2>
                    <p>Enter Sinhala text and listen</p>
                    <a class="btn btn-default btn-lg">Read!</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Contact Lire team</h2>
                <p>Feel free to email us and provide some feedback or ask for assistance</p>
                <p><a href="mailto:shanaka.vx@gmail.com">feedback@lire.com</a>
                </p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li>
                        <a href="" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Request the source</span></a>
                    </li>
                    <li>
                        <a href="" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright 2016 &copy; Tone based voice synthesizer framework for voice based application development | SLIIT
                | CDAP | Group 16-05</p>
        </div>
    </footer>

    <!-- Loading Javascripts -->
    <!-- jQuery -->
    <script src="vendor/jquery/jquery-3.1.0.min.js"></script>
    <script src="vendor/jquery/jquery-ui.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery/jquery.easing.min.js"></script>
    <script src="vendor/bootstrap-slider/slider.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/grayscale.js"></script>

    <!-- Control JavaScript -->
    <script src="js/dashboard.js"></script>
    <script src="js/timeline.js"></script>
    <script src="js/index.js"></script>
</body>

</html>