<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Archive</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1>Archive</h1>
        <table class="table table-bordered">
            <thead>
                <th>ID</th>
                <th>Company name</th>
                <th>Company E-mail</th>
                <th>Company Address</th>
                <th>Deleted at</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($trashed as $company)
                    <tr>
                        <td>{{ $company->id }}</td>
                        <td>{{ $company->name }}</td>
                        <td>{{ $company->email }}</td>
                        <td>{{ $company->address }}</td>
                        <td>{{$company->deleted_at}}</td>
                        <td>
                            <a href="/restore/{{ $company->id }}" class="btn btn-success">Restore</a>
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <td colspan="6">Go to <a href="/" class="btn btn-danger">Data</a> </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>
