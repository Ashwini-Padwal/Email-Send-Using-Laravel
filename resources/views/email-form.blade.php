<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Send</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container">
  <h2 class="center">Dynamic Mail Send form</h2>
  <form class="form-horizontal" action="/send-email" method="post">
    @csrf
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="sub">Subject</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="sub" placeholder="Enter Subject" name="sub">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="msg">Mail Body</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="msg" placeholder="Enter Mail Body" name="msg">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>