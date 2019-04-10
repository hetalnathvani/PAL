<!DOCTYPE html>
    <html>
    <head>
        <title></title>
    </head>
    <body>
        <form class="" action="{{URL::to('/store')}}" method="POST" enctype="multipart/form-data">
            <input type="file" name="userfile" value=""><br><br>
            <input type="hidden" name="_token" value="{{ csrf_token()}}">
            <input type="submit" value="upload"/>
            

        </form>
    </body>
    </html> 