<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class ="col-md-4 col-md-offset-4" style="margin-top:20px">
                <h3>Update Menu</h3>
                <hr>
                <form method="post" action="{{route('updateinfo')}}">
                    @if(Session::has('del success'))
                    <div class="alert alert-success">{{Session::get('del success')}}</div>
                    @endif
                    @if(Session::has('not del'))
                    <div class="alert alert-success">{{Session::get('not del')}}</div>
                    @endif
                    @if(Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif
                    @if(Session::has('not'))
                    <div class="alert alert-success">{{Session::get('not')}}</div>
                    @endif
                    @csrf
                    <div class="form-group">
                        <label for="add">Add new item</label>
                        <input type="text" class="form-control" placeholder="" name="add" value="">
                    </div>

                    <div class="form-group">
                        <label for="nprice">Add new item's price</label>
                        <input type="text" class="form-control" placeholder="" name="nprice" value="">
                    </div>

                    <div class="form-group">
                        <label for="del">Delete an item</label>
                        <input type="text" class="form-control" placeholder="" name="del" value="">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-block btn-primary" type="submit">Update</button>
                    </div>

                </form>
            </div>
        </div>
    </div>



    
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>