<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Discount</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class ="col-md-4 col-md-offset-4" style="margin-top:20px">
                <h3>Discount</h3>
                <hr>
                <form method="post" action="{{route('discountAdmin')}}">
                    @if(Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif
                    @if(Session::has('not'))
                    <div class="alert alert-success">{{Session::get('not')}}</div>
                    @endif
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="item_name">Item Name</label>
                        <input type="text" class="form-control" placeholder="Chicken" name="item_name" value="">
                    </div>

                    <div class="form-group">
                        <label for="percentage">Discount Percentage(Just write the number)</label>
                        <input type="text" class="form-control" placeholder="10" name="percentage" value="">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-block btn-primary" type="submit">Discount!!</button>
                    </div>

                </form>
            </div>
        </div>
    </div>



    
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>