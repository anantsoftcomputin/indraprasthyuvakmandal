<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Feedback For Tifin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
body {
    background: #D2ECFF;
}

.contact-us-form {
    margin-top: 10em;
    box-shadow: 0px 3px 32px 2px rgba(0,0,0,.2);
    width: 100%;
    padding: 15px 30px;
    border-radius: 15px;
    z-index: 3;
    position: absolute;


  .submit-form {
    background: #FF6600;
    padding-left: 45px;
    padding-right: 45px;
    color: #fff;
  }

  h2.title {
    font-size: 2em;
    margin-bottom: 30px;
    width: 100%;
    margin-right: auto;
    margin-left: auto;
  }
}

.form-control {
  height: 50px;
  border-radius: 25px;
  font-size: 1.25em;
  padding: 0 20px;
  background: #F8FAFB;
  border: 0;
  box-shadow: none;
  -webkit-box-shadow: none;
}
textarea.form-control {
  padding-top: 15px;
  resize: none;
}

.social {
    background: #00A0FF;
    width: 15%;
    text-align: center;

      position: absolute;
      top: 66px;
      right: 30px;
      padding-left: 25px;
      z-index: 1;
      border-radius: 15px;

  li {
    padding: 15px;
    &:first-child { padding-top: 30px; }
    &:last-child { padding-bottom: 30px; }
    a {
        color: white;
        font-size: 2.25em;
    }
  }
}

.wrap {
    position: relative;
}

.star-rating,.star-rating01,.star-rating02 {
padding-top: 5px;
  line-height:32px;
  font-size:3em;
}

.fa-star{color: #e67e22;}
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="margin-right: auto; margin-left: auto;">
                <div class="wrap">
                    <div class="panel panel-default contact-us-form">
                        <div class="panel-body">
                            <center>
                                <img src="{{ asset('logo.png') }}" alt="" width="200px">
                            </center>
                                <h2 class="title text-center">Feedback For Tifin</h2>
                                <br>
                                <form action="{{ route('Feedback.Store') }}" method="POST" enctype="multipart/form-data" id="res_form">
                                    @csrf
                                    <div class="form-group">
                                        <label style="margin-left: 25px;">Name</label>
                                        <input id="name" name="name" type="text" class="form-control" placeholder="Name" required/>
                                    </div>
                                    <div class="form-group">
                                        <label style="margin-left: 25px;">Phone</label>
                                        <input id="phone" name="phone" type="number" class="form-control" placeholder="Phone" required/>
                                    </div>

                                    <div class="form-group">
                                        <label style="margin-left: 25px;">Number of tifin requested</label>
                                        <input id="phone" name="number_of_tifin" type="number" class="form-control" placeholder="Number of tifin" required/>
                                    </div>

                                    <div class="form-group">
                                        <label style="margin-left: 25px;">How was the quality of the food rate ? </label>
                                        <div class="star-rating01 form-control">
                                            <span class="fa fa-star-o" data-rating="1"></span>
                                            <span class="fa fa-star-o" data-rating="2"></span>
                                            <span class="fa fa-star-o" data-rating="3"></span>
                                            <span class="fa fa-star-o" data-rating="4"></span>
                                            <span class="fa fa-star-o" data-rating="5"></span>
                                            <input type="hidden" name="quality" class="rating-value" value="0" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label style="margin-left: 25px;"> Hygiene of the food ? </label>
                                        <div class="star-rating form-control">
                                            <span class="fa fa-star-o" data-rating="1"></span>
                                            <span class="fa fa-star-o" data-rating="2"></span>
                                            <span class="fa fa-star-o" data-rating="3"></span>
                                            <span class="fa fa-star-o" data-rating="4"></span>
                                            <span class="fa fa-star-o" data-rating="5"></span>
                                            <input type="hidden" name="hygiene" class="rating-value" value="0" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label style="margin-left: 25px;"> Punctuality of the delivery guy ? </label>
                                        <div class="star-rating02 form-control">
                                            <span class="fa fa-star-o" data-rating="1"></span>
                                            <span class="fa fa-star-o" data-rating="2"></span>
                                            <span class="fa fa-star-o" data-rating="3"></span>
                                            <span class="fa fa-star-o" data-rating="4"></span>
                                            <span class="fa fa-star-o" data-rating="5"></span>
                                            <input type="hidden" name="panchuality" class="rating-value" value="0" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                            <label style="margin-left: 25px;">Remarks</label>
                                         <textarea id="Remarks" name="remarks" rows="4" class="form-control" placeholder="Remarks"></textarea>
                                    </div>

                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn btn-lg submit-form btn-info" onclick="myFunction('Thank You For the Tifin Request.\n We pray that you Get Well Soon!!');">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                </div> <!-- /wrap -->
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
     var $star_rating = $('.star-rating .fa');

var SetRatingStar = function() {
  return $star_rating.each(function() {
    if (parseInt($star_rating.siblings('input.rating-value').val()) >= parseInt($(this).data('rating'))) {
      return $(this).removeClass('fa-star-o').addClass('fa-star');
    } else {
      return $(this).removeClass('fa-star').addClass('fa-star-o');
    }
  });
};

$star_rating.on('click', function() {
  $star_rating.siblings('input.rating-value').val($(this).data('rating'));
  return SetRatingStar();
});

SetRatingStar();



var $star_rating1 = $('.star-rating01 .fa');

var SetRatingStar1 = function() {
  return $star_rating1.each(function() {
    if (parseInt($star_rating1.siblings('input.rating-value').val()) >= parseInt($(this).data('rating'))) {
      return $(this).removeClass('fa-star-o').addClass('fa-star');
    } else {
      return $(this).removeClass('fa-star').addClass('fa-star-o');
    }
  });
};

$star_rating1.on('click', function() {
  $star_rating1.siblings('input.rating-value').val($(this).data('rating'));
  return SetRatingStar1();
});

SetRatingStar1();

var $star_rating2 = $('.star-rating02 .fa');

var SetRatingStar2 = function() {
  return $star_rating2.each(function() {
    if (parseInt($star_rating2.siblings('input.rating-value').val()) >= parseInt($(this).data('rating'))) {
      return $(this).removeClass('fa-star-o').addClass('fa-star');
    } else {
      return $(this).removeClass('fa-star').addClass('fa-star-o');
    }
  });
};

$star_rating2.on('click', function() {
  $star_rating2.siblings('input.rating-value').val($(this).data('rating'));
  return SetRatingStar2();
});

SetRatingStar2();

        function myFunction(){


            let text = "Thank You For the Tifin Request.\n We pray that you Get Well Soon!!";
            if (confirm(text) == true) {

            } else {
                text = "You canceled!";
            }
            document.getElementById("demo").innerHTML = text;
        }
    </script>
</body>
</html>
