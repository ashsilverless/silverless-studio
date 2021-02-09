<?php get_header(); ?><!--L-->
<style>
.404 {
  min-height: 90vh;
}

.sl-img-wrapper {
  text-align: center;
  width: 60%;
  margin: 0;
}
.sl-img-wrapper span {
  position: absolute;
  left: 50%;
  margin-left: -50px;
}
.sl-img-wrapper span:before {
  position: absolute;
  content: "";
  height: 3px;
  width: 4px;
  background: #cecece;
  left: -40px;
  top: 15px;
  border-radius: 60px;
  box-shadow: 0px -1px 0 #8e8e8efa, 1px 1px 0px #fbfbfb;
}
.sl-img-wrapper span:after {
  position: absolute;
  content: "";
  height: 3px;
  width: 4px;
  background: #cecece;
  left: -22px;
  top: 6px;
  border-radius: 60px;
  box-shadow: 0px -1px 0 #8e8e8efa, 1px 1px 0px #fbfbfb;
  z-index: -1;
}
.sl-img-wrapper .static {
  width: auto;
  height: 50px;
}
.sl-img-wrapper .swing {
  position: absolute;
  left: -45px;
  width: auto;
  height: 50px;
  margin-right: 15px;
}
.sl-img-wrapper .swing.animate {
  -webkit-animation: shake 0.15s 8, drop 0.2s 1, swing 2s 1;
  animation: shake 0.15s 8, drop 0.2s 1, swing 2s 1;
  -webkit-animation-delay: 0s, 1.2s, 1.21s;
  animation-delay: 0s, 1.2s, 1.21s;
  -webkit-animation-fill-mode: forwards;
  animation-fill-mode: forwards;
}

.sl-content-wrapper {
  text-align: center;
  margin-top: 10rem;
}
.sl-content-wrapper h1 {
  font-weight: 400;
  font-family: Lato, sans-serif;
  font-style: normal;
}
.sl-content-wrapper a {
  background: #de722a;
  padding: 15px 20px;
  border: none;
  font-size: 15px;
  line-height: 1.3;
  letter-spacing: 0.05em;
  color: #fff;
  text-transform: uppercase;
  text-decoration: none;
  margin-top: 1em;
  display: inline-block;
}

@-webkit-keyframes shake {
  0% {
	margin-left: 0;
  }
  100% {
	margin-left: 2px;
  }
}

@keyframes shake {
  0% {
	margin-left: 0;
  }
  100% {
	margin-left: 2px;
  }
}
@-webkit-keyframes drop {
  0% {
	top: 0;
  }
  100% {
	top: 30px;
  }
}
@keyframes drop {
  0% {
	top: 0;
  }
  100% {
	top: 30px;
  }
}
@-webkit-keyframes swing {
  0% {
	top: 30px;
	-webkit-transform: rotate(0deg);
	transform: rotate(0deg);
  }
  25% {
	top: 30px;
	-webkit-transform: rotate(20deg);
	transform: rotate(20deg);
  }
  50% {
	top: 30px;
	-webkit-transform: rotate(-20deg);
	transform: rotate(-20deg);
  }
  75% {
	top: 30px;
	-webkit-transform: rotate(10deg);
	transform: rotate(10deg);
  }
  100% {
	top: 30px;
  }
}
@keyframes swing {
  0% {
	top: 30px;
	-webkit-transform: rotate(0deg);
	transform: rotate(0deg);
  }
  25% {
	top: 30px;
	-webkit-transform: rotate(20deg);
	transform: rotate(20deg);
  }
  50% {
	top: 30px;
	-webkit-transform: rotate(-20deg);
	transform: rotate(-20deg);
  }
  75% {
	top: 30px;
	-webkit-transform: rotate(10deg);
	transform: rotate(10deg);
  }
  100% {
	top: 30px;
	-webkit-transform: rotate(-7deg);
	transform: rotate(-7deg);
  }
}
</style>
</div><!--outer-container-->

	<div class="outer-container mb10">
		<div class="container content">
			<div class="change-form">

				<div class="sl-img-wrapper">
									<span>
									<img src="https://silverless.co.uk/s.svg"/ class="swing">    
									<img src="https://silverless.co.uk/ilverless.svg"/ class="static">
									  </span>
								  </div>
								
								  <div class="sl-content-wrapper">
									<h1>Sorry about this</h1>
									<p>We'll have this fixed in a jiffy. In the meantime, why not head back to the site and see what we've been up to</p>
									<a href="https://silverless.co.uk">Back Home</a>
								  </div>

			</div>
		</div>
	</div>

</div><!--wrapper-->

<script>
  $('body').on('mouseenter', function() {
	$('.swing').addClass("animate");
  });	
</script>

<?php get_footer(); ?>