<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

<title>UNITEN R&D</title>
<!--

TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
<!-- Additional CSS Files -->
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

<link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

<link rel="stylesheet" href="assets/css/owl-carousel.css">

<link rel="stylesheet" href="assets/css/lightbox.css">

</head>

<header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="{{url('/')}}" class="active">Home</a></li>
                            <div style="position: relative; top: 60px; centre: -150px">
    <h2>Details</h2>
    <table  border="3px">
        <tr>
            <th style="padding: 30px">Project ID</th>
            <th style="padding: 30px">Project</th>
            <th style="padding: 30px">Project Members</th>
            <th style="padding: 30px">Project Start Date</th>
            <th style="padding: 30px">Project End Date</th>
            <th style="padding: 30px">Duration</th>
            <th style="padding: 30px">Cost</th>
            <th style="padding: 30px">Client</th>
            <th style="padding: 30px">Update</th>
        </tr>
      
        <tr align="center">
            <td>1</td>
            <td>Twitter Text Analytics</td>
            <td><input type="text" id="fname" name="fname"><br></td>
            <td><input type="text" id="fname" name="fname"><br></td>
            <td><input type="text" id="fname" name="fname"><br></td>
            <td><input type="text" id="fname" name="fname"><br></td>
            <td><input type="text" id="fname" name="fname"><br></td>
            <td><input type="text" id="fname" name="fname"><br></td>
            <td><input type="submit" value="Save"></td>
        </tr>
       
    </table><br/><br/>
  </div>
                            
                           	
                        <!-- 
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->
                           
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                             
                            <li> @if (Route::has('login'))
                                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                    @auth
                                    
                    
                                    </li>
                                @else
                                 <li><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>

                                @if (Route::has('register'))
                                <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                                @endif
                                    @endauth
                                </div>
                                @endif
</li>
