<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Edit</title>
</head>
<body>
    <div class="container">
        <h2>Edit Company</h2>
        <form action="/edited/{{$CompanyData->id}}" class="form" method="POST">
            @csrf
            <label class="form-label">Company Name</label>
            <input type="text" class="form-control" name="name" value="{{$CompanyData->name}}">
            <label class="form-label">Company E-mail</label>
            <input type="email" class="form-control" name="email" value="{{$CompanyData->email}}">
            <label class="form-label">Company Address</label>
            <input type="text" class="form-control" name="address" value="{{$CompanyData->address}}">
            <br>
            <input type="submit" value="Edit" class="btn btn-primary">
            @method("PUT")
        </form>
    </div>
</body>
</html>
