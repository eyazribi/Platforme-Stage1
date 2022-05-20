<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
  <?php
  use App\Models\Company;

  $companies = Company::all();
  ?>
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Adresse</th>
      <th scope="col">Tel</th>
      <th scope="col">compnay size</th>
      <th scope="col">lien</th>
      <th scope="col">description</th>
      <th scope="col">founded</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($companies as $company)
      <tr>
      <th scope="row" >{{$company->id}}</th>
      <td>{{$company->adresse}}</td>
      <td>{{$company->tel}}</td>
      <td>{{$company->company_size}}</td>
      <td>{{$company->lien}}</td>
      <td>{{$company->description}}</td>
      <td>{{$company->founded}}</td>
      <td> 
        
             <Button>Edit</Button>
             <Button>Delete </Button>
             
      </td>
            </tr>
    @endforeach
  </tbody>
</table>

</body>
</html>