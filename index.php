<!DOCTYPE html>
<html>
<head>
<title>Request Vedio</title>

<script type="text/javascript">
  
  $(document).ready(function(){
    $('.collapsible').collapsible({
      accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
    });
  });
       

</script>
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



<table class="highlight responsive-table" style="width:700px; margin:auto;margin-top:100px">
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
            <td style="color:blue;height:25px;overflow:hidden;white-space: nowrap;text-overflow: ellipsis;" >Help Making Apple Pie</td>
            <td>12.00 Today</td>
            <td>Entertainment</td>
          </tr>
          <tr>
            <td>$25</td>
            <td style="color:blue;">Need Someone to show me how to fix brakes</td>
            <td>3.00 3/10</td>
            <td>Expert advice</td>
          </tr>
          <tr>
            <td>$20</td>
            <td style="color:blue;">Democratic National Debate in Montana</td>
            <td>Anytime</td>
            <td>Event</td>
          </tr>



        </tbody>

      </table>



</body>
</html>


