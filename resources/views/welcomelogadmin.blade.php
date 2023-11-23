<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{url('css/styles.css')}}"/>
    <title>Practice</title>
</head>
<body>
    <div class="navbar">
        <ul id = "list1">
            <li class="resname">Chef's Table</li>            
            <li class="logout">
                <form class = "logout2" method="POST" action="/adminlogout">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            </li>
        </ul>
    </div>

    <div id="midsec">
        <div class="adminreservation">
            <a id="tablebook" href="/discount">Discount</a> 
        </div>
        <div class="adminreservation2">
            <a id="homedel" href="/adminreservations">Booking Request</a>
        </div>
        <div class="adminreservation3">
            <a id="menubar" href="/updatemenu">Update Menu</a>
        </div><br>
        <div class="adminreservation4">
            <a id="menubar" href="/handleorder">Online order</a>
        </div>
    </div>

    <div id="bottomsec">
        <p id="copyright">Copyright 2023 &copy; CSE471-Group02</p>
    </div>

</body>
</html>
