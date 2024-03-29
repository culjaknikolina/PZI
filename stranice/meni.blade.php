@extends('layouts.app')

@section('content')
<div class="jumbotron">
    <div class="container text-center">
      <h1 class="text-danger" style="font-family: 'Lobster', cursive;">MENI</h1>
      <p><samp>-- Uživajte u najboljim jelima! --</samp></p>   <hr>
    </div>
  </div>
  <div id="meni" class="container-fluid"><br>
  <input class="form-control" id="myInput" type="text" placeholder="Pretražite meni..."><br>
  <div class="table-responsive">
  <table  class="table table-striped table-bordered" >
    <thead>
      <tr>
        <th class="text-center">Slika</th>
        <th class="text-center">Naziv</th>
        <th class="text-center">Cijena</th>
        <th class="text-center">Sastojci</th>
      </tr>
    </thead>
    <tbody id="myTable">
      @foreach($menis as $row)
      <tr>
        <td style="width:35%;height:60%;"><img class="grow img-responsive" src="{{$row->link_slike}}"></td>
        <td class="text-center"><b>{{$row->naziv}}</b></td>
        <td class="text-center"><b>{{$row->cijena}}</b></td>
        <td class="text-center"><b>{{$row->sastojci}}</b></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
</div>
  @include('inc.footer')
@endsection
