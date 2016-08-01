<?php
if(isset($_REQUEST['s2']))
{
    $arr=insertfeed();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <title></title>
        

    </head>
   
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <center>
                        <div class="img-thumbnail">
                            
            
  <img src="images/download.jpg" class="img-rounded" alt="" width="200" height="150"> 
</div
                        </div>
                    </center>
                </div>
            </div>
        <div class="row">
            <center>
            <p>
                Please feel free to give us your feedback to better meet your expectations or just express your satisfaction. Your feedback is valuable to us.
            </p>
            </center>
        </div>
        <div class="row">
            <div class="col-md-4">
                
            </div>
            <div class="col-md-4">
                <form method="post">
                <div class="form-group">
    <label for="Inputname1">Name</label>
    <input type="name1" class="form-control" id="Inputname1" name="Inputname1" placeholder="Name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="exampleInputEmail1" placeholder="Email">
  </div>
  
  <div class="form-group">
    <label for="mobile1">Mobile No.</label>
    <input type="mobile1" class="form-control" id="mobile1" name="mobile1" placeholder="+91-">
  </div>
               
                 <div class="form group">
                                <label for="query">Feedback</label>
                                <textarea class="form-control" rows="8" id="query" name="query" placeholder="Enter your feedback"></textarea>
                            </div>
  <div class="checkbox">
    
  </div>
  <button type="submit"  name="s2" class="btn btn-default">Submit</button>
</form>
            </div>
            <div class="col-md-4">
        </div>
         <div class="row">
                <div class="col-md-12">
                    <center>
                        <div class="img-thumbnail">
                            
            
  <img src="images/456.jpg" class="img-rounded" alt="" width="200" height="150"> 
</div
                        </div>
                    </center>
                </div>
        
        </div>
    </body>
    <br>
    <br>
    <div>
<table class="style1, color" style="text-align:left" border="0" cellspacing="5px" cellpadding="5px" width="100%">
<tr>
<td class="style1" >
</td><td valign="top">
</tr></table>
</div>
<div class="row btn-success">
                <center>
                    <a href="index.php?p=home">HOME |</a>
                    <a href="index.php?p=know us">ABOUT US |</a>
                    <a href="index.php?p=privacy">PRIVACY POLICY |</a>
                    <a href="index.php?p=online register">TERMS AND CONDITIONS |</a>
                    <br>
                    <p><b><em>CMC Limited is a Subsidiary of TCS Limited</em></b></p>
                </center>
                
            </div>
</div>

<div style="visibility: hidden">
<a href="http://apycom.com/">Apycom jQuery Menus</a>
</div>
    </body>
</html>