@extends('layout.app')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Template · Bootstrap</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"></head>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><div style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">All Products</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
                <a href="{{url('add-product')}}" class="btn btn-outline-secondary">Add New Product</a>
            </div>
    </div>
    </div>

    <div class="btn-toolbar mb-2 mb-md-0">
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th width="280px">Actions</th>
            </tr>

            @foreach ($products as $product)

            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->quantity }}</td>
                <td>

               <a class="btn btn-info" href="{{url('edit/'.$product->id)}}" method="POST">Edit</a>

               <a class="btn btn-danger" href="{{url('delete/'.$product->id)}}" method="POST" >Delete</a>

                </td>
            </tr>

            @endforeach
        </table>
    </div>

    <script src="Dashboard%20Template%20%C2%B7%20Bootstrap_files/jquery-3.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="Dashboard%20Template%20%C2%B7%20Bootstrap_files/bootstrap.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
      <script src="Dashboard%20Template%20%C2%B7%20Bootstrap_files/feather.js"></script>
      <script src="Dashboard%20Template%20%C2%B7%20Bootstrap_files/Chart.js"></script>
      <script src="Dashboard%20Template%20%C2%B7%20Bootstrap_files/dashboard.js"></script>


    </body>
    </html>
@endsection
