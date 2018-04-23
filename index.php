<?php 
defined( '_JEXEC' ) or die( 'Restricted Access' );
$doc = JFactory::getDocument();

//Add stylesheets
$doc->addStyleSheet('templates/'.$this->template.'/css/bootstrap.min.css'); 
$doc->addStyleSheet('templates/'.$this->template.'/css/template.css'); 
//Add Scripts
$doc->addScript('https://code.jquery.com/jquery-3.3.1.slim.min.js');
$doc->addScript('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js');
?>

<!doctype html>
<html lang="en">
  <head>
  	<jdoc:include type="head" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Jimbo</title>
	<jdoc:include type="modules" name="custom_header_code" /> 
  </head>

  <body class="text-center">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand">Cover</h3>
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link active" href="#">Home</a>
            <a class="nav-link" href="#">Features</a>
            <a class="nav-link" href="#">Contact</a>
          </nav>
        </div>
      </header>

      <main role="main" class="inner cover">
        <h1 class="cover-heading">Cover your page.</h1>
        <p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
        <p class="lead">
          <a href="#" class="btn btn-lg btn-secondary">Learn more</a>
        </p>
      </main>

      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p>Cover template for <a href="https://getbootstrap.com/">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
        </div>
      </footer>
    </div>

  </body>
</html>