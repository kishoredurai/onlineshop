<?php // <--- do NOT put anything before this PHP tag
	include('functions.php');
	include('navbar.php');
	$cookieMessage = getCookieMessage();
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8" /> 
	<title>E shopping</title>
	<link rel="stylesheet" type="text/css" href="./css/search.css" />
	
</head>
<body>
	
	<?php
		// display any cookie messages. TODO style this message so that it is noticeable.
		echo $cookieMessage;
	?>
	
  <!-- <form>
    <div class="input-group">
      <input type="text" id="search" placeholder="Search..." autocomplete="off">
      <label for="search"><i class="fas fa-search"></i></label>
    </div>
    
    <div class="suggestion-list hidden">
    </div>
  </form> -->
  <div>
  <div class="container" >
    <input type="radio" name="slider" id="item-1" checked>
    <input type="radio" name="slider" id="item-2">
    <input type="radio" name="slider" id="item-3">
  <div class="cards">
    <label class="card" for="item-3" id="song-3">
      <!-- <img src="https://images.unsplash.com/photo-1530651788726-1dbf58eeef1f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=882&q=80" alt="song"> -->
      <img src="./img/icons8-team-7LNatQYMzm4-unsplash.jpg" alt="song">
    </label>
    <label class="card" for="item-1" id="song-1">
      <img src="./img/pepi-stojanovski-tulxmkTXmRw-unsplash.jpg" alt="song">
    </label>
    <label class="card" for="item-2" id="song-2">
      <img src="./img/c-d-x-PDX_a_82obo-unsplash.jpg" alt="song">
    </label>
  </div>
  <div class="player">
    <div class="upper-part">
      <div class="play-icon">
        <svg width="20" height="20" fill="#2992dc" stroke="#2992dc" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="feather feather-play" viewBox="0 0 24 24">
          <defs/>
          <path d="M5 3l14 9-14 9V3z"/>
        </svg>
      </div>
      <div class="info-area" id="test">
        <label class="song-info" id="song-info-1">
          <div class="title">i products</div>
          <div class="sub-line">
            <div class="subtitle">Apple inc</div>
            <div class="time">4.05</div>
          </div>
        </label>
        <label class="song-info" id="song-info-2">
          <div class="title">Head set</div>
          <div class="sub-line">
            <div class="subtitle">Moderator</div>
            <div class="time">4.05</div>
          </div>
        </label>
        <label class="song-info" id="song-info-3">
          <div class="title">Falling Out</div>
          <div class="sub-line">
            <div class="subtitle">Mod</div>
            <div class="time">4.05</div>
          </div>
        </label>
      </div>
    </div>
    <div class="progress-bar">
      <span class="progress"></span>
    </div>
  </div>
</div>
</div>
<div class="col">
	<h2>Want to explore more</h2>
	<a href="products.php?cars=1&email="><button>See More</button></a>
</div>
		<!-- 
		
			// TODO put a search box here and a submit button.
			
			// TODO the rest of this page is your choice, but you must not leave it blank.
			
			Possible ideas:
			•	List the 10 most recently purchased products.
			•	Use a CSS Animated Slider.
			•	Display any sales or promotions (using an image)

		-->

	
</body>
</html>