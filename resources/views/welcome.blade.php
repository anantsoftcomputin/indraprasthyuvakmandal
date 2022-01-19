<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
                                <h2 class="title text-center">Request For Tifin</h2>
                                <br>
                                <form action="{{ route('Enq.Store') }}" method="POST" enctype="multipart/form-data" id="res_form">
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
                                        <label style="margin-left: 25px;">Test Result</label>
                                        <select name="test_result" id="result" class="form-control">
                                            <option value="Positive">Positive</option>
                                            <option value="Negative">Negative</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label style="margin-left: 25px;">No Of Tifin</label>
                                        <input id="no_tifin" name="no_tifin" type="number" class="form-control" placeholder="No Tifin" required/>
                                    </div>

                                    <div class="form-group text-center">
                                        <div style="display: flex; align-items: center; justify-content: space-around;">
                                            <div class="1">
                                                <input type="checkbox" name="time[]" id="time" value="lunch"> <label style="font-size: 30px;" for="time">Lunch</label>
                                            </div>
                                            <div class="2">
                                                <input type="checkbox" name="time[]" id="time01" value="Dinner"> <label style="font-size: 30px;" for="time01">Dinner</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                            <label style="margin-left: 25px;">Address</label>
                                         <textarea id="address" name="address" rows="4" class="form-control" placeholder="Address"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="" style="margin-left: 22px;">Select Start Date</label>
                                         <input type="date" id="starting_from" placeholder="Start Date" name="starting_from" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="" style="margin-left: 22px;">Select Ending Date</label>
                                        <input type="date" id="ending_to" name="ending_to" class="form-control" required>
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

    <script>
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
