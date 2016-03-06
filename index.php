<!DOCTYPE html>
<html>
<head>
<title>Request Vedio</title>



<!-- -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">  
        $(document).ready(function(){
            $("#report tr:odd").addClass("odd");
            $("#report tr:not(.odd)").hide();
            $("#report tr:first-child").show();
            
            $("#report tr.odd").click(function(){
                $(this).next("tr").toggle();
                $(this).find(".arrow").toggleClass("up");
            });
            //$("#report").jExpand();
        });
    </script>
<!-- -->

      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
<body>
 <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>

<center>

<h1 style="margin-top:100px;color:#6666ff">  
Live vedio Request
</h1>
<p class="flow-text">Share Knowledge and experience with Others</p>
</center>
<table id="report" class="highlight responsive-table" style="width:700px; margin:auto;margin-top:100px">
        <thead>
          <tr>
              <th data-field="id"> </th>
              <th data-field="id">Title</th>
              <th data-field="name">Time Requested</th>
              <th data-field="price">Category</th>
          </tr>
        </thead>


        <tbody>

          <tr >
            <td>Free</td>
            <td style="color:#3232ff;">Help Making Apple Pie
            

            </td>
            <td>12.00 Today</td>
            <td>Entertainment</td>
          </tr>

           <tr>
            <td colspan="4">
                
                <p>Usually I am good with DIY repairs but i cant figure out how to 
                get beyond this final piece.I need someone to 
                take a look ath my car and walk me through this</p>
                    
            </td>
        </tr>
          <tr>
            <td>$25</td>
            <td style="color:#3232ff;">Need Someone to show me how to fix brakes</td>
            <td>3.00 3/10</td>
            <td>Expert advice</td>
          </tr>
          <tr>
            <td colspan="4">
                
                <p>Usually I am good with DIY repairs but i cant figure out how to 
                get beyond this final piece.I need someone to 
                take a look ath my car and walk me through this</p>
                    
            </td>
        </tr>
          <tr>
            <td>$20</td>
            <td style="color:#3232ff;">Democratic National Debate in Montana</td>
            <td>Anytime</td>
            <td>Event</td>
          </tr>

          <tr>
            <td colspan="4">
                
                <p>Usually I am good with DIY repairs but i cant figure out how to 
                get beyond this final piece.I need someone to 
                take a look ath my car and walk me through this</p>
                    
            </td>
        </tr>



        </tbody>

      </table>




</body>
</html>


