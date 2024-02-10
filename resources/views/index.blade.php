<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1>Laravel CRUD</h1>
        {{-- @if ($success)
        <div class="alter alter-success">{{$success}}</div>
        @endif --}}
        <table class="table table-bordered">
            <thead>
                <th>ID</th>
                <th>Company name</th>
                <th>Company E-mail</th>
                <th>Company Address</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($companies as $company)
                    <tr>
                        <td>{{ $company->id }}</td>
                        <td>{{ $company->name }}</td>
                        <td>{{ $company->email }}</td>
                        <td>{{ $company->address }}</td>
                        <td>
                            <form method="POST" action="/delete/{{$company->id}}" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                                @method('DELETE')
                            </form>
                            <a href="/edit/{{$company->id}}" class="btn btn-primary">Edit</a>
                        </td>
                    </tr>
                @endforeach
                <tr><td colspan="5">Go to <a href="/archive" class="btn btn-danger">Archive</a> </td></tr>
            </tbody>
        </table>
        <h2>Add Company</h2>
        <form action="/index" class="form" method="POST">
            @csrf
            <label class="form-label">Company Name</label>
            <input type="text" class="form-control" name="name">
            <label class="form-label">Company E-mail</label>
            <input type="email" class="form-control" name="email">
            <label class="form-label">Company Address</label>
            <input type="text" class="form-control" name="address">
            <br>
            <input type="submit" value="Add" class="btn btn-success">
        </form>
    </div>
</body>

</html>
