<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Report Corona</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />

</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-4 offset-lg-4">
                <div class="select">
                <form action="{{url('/')}}" method="GET">
                    <div class="form-group">
                        <select name="country" id="" class="form-control select2">
                            <option value="">Pilih Negara</option>
                            @foreach ($country as $rs)
                        <option value="{{$rs}}">{{$rs}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-danger btn-block">Cari Tau</button>
                    </div>
                </form>
                </div>
                <div class="card" style="">
                    <img src="https://res.cloudinary.com/andikha/image/upload/v1585360235/corona_2x_cfgc3w.png" class="card-img-top" alt="...">
                    <div class="card-body">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item text-center"><h3>{{$list_data["country"]}}</h3></li>
                      <li class="list-group-item text-center text-info"><h4>{{$list_data["confirmed"]}}</h4></li>
                    </ul>
                      <table width="100%" class="mt-3">
                          <tr>
                              <th><h6 class="text-center">Meninggal</h6></th>
                              <th><h6 class="text-center">Sembuh</h6></th>
                          </tr>
                          <tr>
                              <td><h4 class="text-center text-danger">{{$list_data["deaths"]}}</h4></td>
                              <td><h4 class="text-center text-success">{{$list_data["recovered"]}}</h4></td>
                          </tr>
                      </table>
                  </div>
                  <div class="card-footer">
                      <h6 class="text-center">Data : {{$list_data["lastUpdate"]}}</h6>
                  </div>
            </div>
            <h6 class="text-center mt-2">Created by : <a href="">Andikha Dian Nugraha</a></h6>
        </div>
    </div>
    
    
    
   
    
















    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.select2').select2();
    })
</script>
</body>
</html>
