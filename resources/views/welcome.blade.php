    {!! HTML::style('css/style-personal.css') !!}
    {!! HTML::style('css/style.css') !!}
    {!! HTML::style('http://fonts.googleapis.com/css?family=Lato:300,400,700') !!}
    {!! HTML::style('http://weloveiconfonts.com/api/?family=fontawesome') !!}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>


    <script type="text/javascript">

    $(document).ready(function() {

$( "tbody.event-calendar td" ).on( "click", function( event ) {
  alert('hello');
  event.preventDefault();
});
    });
    </script>

    <!-- multistep form -->
    {!!Form::open(array('id' => 'msform', 'url'=>'user/createUser'))!!}

	<!-- progressbar -->
	<ul id="progressbar">
		<li class="active"></li>
		<li></li>
		<li></li>
    <li></li>
	</ul>
	<!-- fieldsets -->
	<fieldset>


    <script type="text/javascript">



    </script>
    <div class="row">
			<div class="col-lg-3">

			</div>
			<div class="col-lg-6">

			</div>
			<div class="col-lg-3">

			</div>
		</div>
		<div class="row">
			<div class="col-md-3">

			</div>
			<div class="col-md-6">
				<div class="calendar hidden-print">
					<header>
						<h2 class="month"></h2>
						<a class="btn-prev fontawesome-angle-left" href="#"></a>
						<a class="btn-next fontawesome-angle-right" href="#"></a>
					</header>
					<table>
						<thead class="event-days">
							<tr></tr>
						</thead>
						<tbody class="event-calendar">
							<tr class="1"></tr>
							<tr class="2"></tr>
							<tr class="3"></tr>
							<tr class="4"></tr>
							<tr class="5"></tr>
						</tbody>
					</table>

          <div class="list">






            <div class="day-event"  date-month="6" date-day="4" number="1" date-name="Gizani at Tribe" data-venue="Tribe Hotel" date-charges="5000">
							<a href="#" class="close fontawesome-remove"></a>
              <p>
              Tribe Hotel
              </p>
              <p>
                2014-7-1
              </p>
              <p>
                Charges-5000
              </p>


						</div>
						<div class="day-event"   date-month="7" date-day="11" data-number="1" date-name="Gizani at Tribe" data-venue="Tribe hotel" id="meee" date-charges="5000">
							<a href="#" class="close fontawesome-remove"></a>
							<h2 class="title">Tribe Hotel</h2>
							<p class="date">2014-6-13</p>
              <p>
                charges-5000
              </p>

						</div>

						<div class="day-event" date-month="7"    date-day="18" data-number="1" date-name="Gizani at Tribe" data-venue="Tribe Hotel" date-charges="5000">
							<a href="#" class="close fontawesome-remove"></a>
							<h2 class="title">Tribe Hotel</h2>
							<p class="date">2014-6-20</p>
              <p>
                charges-5000
              </p>

						</div>
						<div class="day-event" date-month="7"   date-day="18" data-number="1" date-name="Gizani at Tribe" data-venue="Tribe Hotel" date-charges="5000">
							<a href="#" class="close fontawesome-remove"></a>
							<h2 class="title">Gizani at Tribe</h2>
							<p class="date">2014-7-18</p>
              <p>
                Charges-5000
              </p>


						</div>
						<div class="day-event"    date-month="7" date-day="25" data-number="1" date-name="Gizani at Tribe" data-venue="Tribe Hotel" date-charges="5000">
							<a href="#" class="close fontawesome-remove"></a>
							<h2 class="title">Gizani at Tribe</h2>
							<p class="date">2014-7-25</p>
              <p>
                Charges-5000
              </p>

						</div>



						<div class="day-event" date-month="7"   date-day="8" data-number="1" date-name="Gizani at Tamambo" data-venue="Karen blixen" date-charges="5000">
							<a href="#" class="close fontawesome-remove"></a>
							<h2 class="title">Tamambo</h2>
							<p class="date">2014-7-8</p>
              <p></p>




						</div>

						<div class="day-event" date-month="7" date-day="9"   data-number="1" date-name="Gizani at Tamambo" data-venue="Karen Blixen" date-charges="5000">




							<h2 class="title">Tamambo</h2>
							<p class="date">2014-7-9</p>
							<p>Charges-6000</p>

						</div>

            	<div class="day-event" date-month="7"   date-day="10" data-number="1" date-name="Gizani at Tamambo" data-venue="Karen Blixen" date-charges="6000">



            							<h2 class="title">Tamambo</h2>
            							<p class="date">2014-7-10</p>
            							<p>charges-6000</p>

            						</div>

					</div>
				</div>
			</div>

			<div class="col-md-3">
				<label class="print pull-right">

				<div class="person-list"></div>
			</div>
		</div>
    <input type="button" name="next" class="next action-button" value="Next" />

	</fieldset>
	<fieldset>
		<h2 class="fs-title">Personal Details</h2>
		<h3 class="fs-subtitle"></h3>

    <div class="form-group">
      <label for="">REGISTER VIA FACEBOOK</label>

    </div>
    <div class="form-group">
      <script>
    // This is called with the results from from FB.getLoginStatus().
    function statusChangeCallback(response) {
      console.log('statusChangeCallback');
      console.log(response);
      // The response object is returned with a status field that lets the
      // app know the current login status of the person.
      // Full docs on the response object can be found in the documentation
      // for FB.getLoginStatus().
      if (response.status === 'connected') {
        // Logged into your app and Facebook.
        testAPI();
      } else if (response.status === 'not_authorized') {
        // The person is logged into Facebook, but not your app.
        document.getElementById('status').innerHTML = 'Please log ' +
          'into this app.';
      } else {
        // The person is not logged into Facebook, so we're not sure if
        // they are logged into this app or not.
        document.getElementById('status').innerHTML = 'Please log ' +
          'into Facebook.';
      }
    }

    // This function is called when someone finishes with the Login
    // Button.  See the onlogin handler attached to it in the sample
    // code below.
    function checkLoginState() {
      FB.getLoginStatus(function(response) {
        statusChangeCallback(response);
      });
    }

    window.fbAsyncInit = function() {
    FB.init({
      appId      : '{gizani}',
      cookie     : true,  // enable cookies to allow the server to access
                          // the session
      xfbml      : true,  // parse social plugins on this page
      version    : 'v2.3' // use version 2.2
    });

    // Now that we've initialized the JavaScript SDK, we call
    // FB.getLoginStatus().  This function gets the state of the
    // person visiting this page and can return one of three states to
    // the callback you provide.  They can be:
    //
    // 1. Logged into your app ('connected')
    // 2. Logged into Facebook, but not your app ('not_authorized')
    // 3. Not logged into Facebook and can't tell if they are logged into
    //    your app or not.
    //
    // These three cases are handled in the callback function.

    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });

    };

    // Load the SDK asynchronously
    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js";
      fjs.parentNode.insertBefore(js, fjs);7
    }(document, 'script', 'facebook-jssdk'));

``    // Here we run a very simple test of the Graph API after login is
    // successful.  See statusChangeCallback() for when this call is made.
    function testAPI() {
      console.log('Welcome!  Fetching your information.... ');
      FB.api('/me', function(response) {
        console.log('Successful login for: ' + response.name);
        document.getElementById('status').innerHTML =
          'Proceed to the next step, ' + response.name + '!';
          namee.value=response.name;
          emaill.value=response.email;

      });
    }
  </script>

  <!--
    Below we include the Login Button social plugin. This button uses
    the JavaScript SDK to present a graphical Login button that triggers
    the FB.login() function when clicked.
  -->

  <fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
  </fb:login-button>

  <div id="status">
  </div>

    </div>
    <br>
    <br>
    <input type="button" name="showw" onclick="shooow()" id="shoow" value="register with Name and Email Address">

    <div class="form-group" id="manuall" style="display: none">

                <input type="name" name="name" id="name" placeholder="name" value="">
								<input type="email" name="email" value="" placeholder="Email" id="email">
								<input type="phone" name="phone" value="" placeholder="phone" required id="phone">








    </div>


		<input type="button" name="previous" class="previous action-button" value="Previous" />
		<input type="button" name="next" class="next action-button" value="Next" />
	</fieldset>
	<fieldset>
		<h2 class="fs-title"></h2>
		<h3 class="fs-subtitle"></h3>
	  <table class="">
      <tr>
        <td>
          {!!Form::text('name',null,['placeholder'=>'Name','id'=>'namee'])!!}



        </td>
        <td>
          {!!Form::text('emaill',null,['placeholder'=>'Email','id'=>'emaill'])!!}


        </td>
        <td>
          {!!Form::text('phonee',null,['placeholder'=>'Phone', 'id'=>'phonee'])!!}


        </td>
				<td>
          {!!Form::text('allergies',null,['placeholder'=>'Allergies','id'=>'allergies'])!!}


				</td>
      </tr>
			<br>

	  </table>
		<h6>MORE TICKETS</h6>
    <script type="text/javascript">
    $(document).ready(function() {
  $("input").attr({
     "max" : 10,        // substitute your own
     "min" : 0          // values (or variables) here
  });
});
    </script>
    {!! Form::input('number',null) !!}



    <br>

    <div class="" id="menul">

    </div>
    <script type="text/javascript">


    function append() {
      var i;


    //  var btn = document.createElement("BUTTON");
      var k=document.getElementById('inpp');
      var j=parseInt(document.getElementById("inpp").value, 10);
      var div=document.createElement('div');

      var table = document.createElement('table');
      for (var i = 0; i < j; i++){
      var tr = document.createElement('tr');

      var td1 = document.createElement('td');
      var td2 = document.createElement('td');
      var td3 = document.createElement('td');
      var td4 = document.createElement('td');

      var text1 = document.createElement('input');
      text1.name="name";
      text1.placeholder="name";
      var text2 = document.createElement('input');
      text1.name="Email";
      text1.placeholder="Email";
      var text3 = document.createElement('input');
      text1.name="phone";
      text1.placeholder="Phone Number";
      var text4 = document.createElement('input');
      text1.name="allergies";
      text1.placeholder="Alelrgies";


      td1.appendChild(text1);
      td2.appendChild(text2);
      td3.appendChild(text3);
      td4.appendChild(text4);
      tr.appendChild(td1);
      tr.appendChild(td2);
      tr.appendChild(td3);
      tr.appendChild(td4);

      table.appendChild(tr);

  }
  //div.appendChild(inpp);


  document.body.appendChild(div);
  div.appendChild(table)

      // body...
    }

    </script>

    </table>
		<input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
	</fieldset>
  <fieldset>

    <h4> Thank you for booking. <small></small></h4>
    <h6>our team will get back to you to finish the payment process</h6>

    <br>
  <!--  <p>

    <script type="text/javascript">
    var currency_code=$("active input:currency_code").value;
    var item_name=$("active input:item_name").value;
    var amount=$("active input:amount").value;
    var hosted_button_id=$("active input:hosted_button_id").value;
    </script>
    <input type="hidden" name="currency_code" value="USD">
    <input type="hidden" name="item_name" value="">
    <input type="hidden" name="amount" value="12.99">
    <input type="hidden" name="cmd" value="_s-xclick">
    <input type="hidden" name="hosted_button_id" value="2ZYWKJ34MW47W">


    <input type="hidden" name="business" value="moese@gizani.com">
    <input type="hidden" name="currency_code" value="USD">
    <input type="hidden" name="item_name" value="Gizani at Tribe ticket">
    <input type="hidden" name="amount" value="12.99">


    <input type="image" src="http://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"         border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!">
    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">






  -->
  {!! Form::hidden('eName', '') !!}
  {!! Form::hidden('eCharges', '') !!}
  {!! Form::hidden('eVenue', '') !!}


    <input type="button" name="previous" class="previous action-button" value="Previous" />
    {!!Form::submit('Finish','',array('class' => 'next action-button' ))!!}
  </fieldset>
  {!!Form::close() !!}

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
{!! HTML::script('js/simplecalendar.js') !!}
<!-- jQuery easing plugin -->
<script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript">
    $(function() {
   $( "#datepicker" ).datepicker();
 });

    </script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript">
    /*
    Orginal Page: http://thecodeplayer.com/walkthrough/jquery-multi-step-form-with-progress-bar

    */
    //jQuery time
    var current_fs, next_fs, previous_fs; //fieldsets
    var left, opacity, scale; //fieldset properties which we will animate
    var animating; //flag to prevent quick multi-click glitches

    $(".next").click(function(){
    if(animating) return false;
    animating = true;

    current_fs = $(this).parent();
    next_fs = $(this).parent().next();

    //activate next step on progressbar using the index of next_fs
    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

    //show the next fieldset
    next_fs.show();
    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
    step: function(now, mx) {
      //as the opacity of current_fs reduces to 0 - stored in "now"
      //1. scale current_fs down to 80%
      scale = 1 - (1 - now) * 0.2;
      //2. bring next_fs from the right(50%)
      left = (now * 50)+"%";
      //3. increase opacity of next_fs to 1 as it moves in
      opacity = 1 - now;
      current_fs.css({'transform': 'scale('+scale+')'});
      next_fs.css({'left': left, 'opacity': opacity});
    },
    duration: 800,
    complete: function(){
      current_fs.hide();
      animating = false;
    },
    //this comes from the custom easing plugin
    easing: 'easeInOutBack'
    });
    });

    $(".previous").click(function(){
    if(animating) return false;
    animating = true;

    current_fs = $(this).parent();
    previous_fs = $(this).parent().prev();

    //de-activate current step on progressbar
    $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

    //show the previous fieldset
    previous_fs.show();
    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
    step: function(now, mx) {
      //as the opacity of current_fs reduces to 0 - stored in "now"
      //1. scale previous_fs from 80% to 100%
      scale = 0.8 + (1 - now) * 0.2;
      //2. take current_fs to the right(50%) - from 0%
      left = ((1-now) * 50)+"%";
      //3. increase opacity of previous_fs to 1 as it moves in
      opacity = 1 - now;
      current_fs.css({'left': left});
      previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
    },
    duration: 800,
    complete: function(){
      current_fs.hide();
      animating = false;
    },
    //this comes from the custom easing plugin
    easing: 'easeInOutBack'
    });
    });

    $(".submit").click(function(){
    return false;
    });


    </script>
    <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1601605030109078',
      xfbml      : true,
      version    : 'v2.3'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));

</script>
<script type="text/javascript">


</script>

  </body>
</html>
