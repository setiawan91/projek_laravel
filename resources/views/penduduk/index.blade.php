<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Data Penduduk</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
   <div class="container">
      <br>
      <table class="table table-striped table-bordered">
         <thead>
            <h1>Tabel Penduduk</h1>
         <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Gender</th>
            <th>City</th>
         </tr>
         </thead>
         <tbody>
            @foreach($penduduk as $item)
            <tr>
               <td>{{ $item->id }}</td>
               <td>{{ $item->name }}</td>
               <td>{{ $item->age }}</td>
               <td>{{ $item->gender }}</td>
               <td>{{ $item->city }}</td>
            </tr>
            @endforeach
         </tbody>
         
      </table>
      {{ $penduduk->links() }}
   </div>
</body>
</html>