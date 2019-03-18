<!DOCTYPE html>
<html>
<head>
    <title>File</title>
</head>
<body>
<form method="POST" action="/file" >
    <input id="input-fa" name="file" type="file" class="validate" enctype="multipart/form-data">
</form>

<div class="col-sm">
    <a href="File/download/{{$file->name}}" download="{{$file->name}}">
        <button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-download">download</i></button>
        </a>
</div>
</body>
</html>