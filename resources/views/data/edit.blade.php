@extends('master')

@section('content')

<div class="row">
 <div class="col-md-12">
  <br />
  <h3>Edit Record</h3>
  <br />
  @if(count($errors) > 0)

  <div class="alert alert-danger">
         <ul>
         @foreach($errors->all() as $error)
          <li>{{$error}}</li>
         @endforeach
         </ul>
  @endif
  <form method="post" action="{{action('BookController@update', $id)}}">
   {{csrf_field()}}
   <input type="hidden" name="_method" value="PATCH" />
   <div class="form-group">
    <input type="text" name="judul" class="form-control" value="{{$student->judul}}" placeholder="Enter First Name" />
   </div>
   <div class="form-group">
    <input type="text" name="pengarang" class="form-control" value="{{$student->pengarang}}" placeholder="Enter Last Name" />
   </div>
   <div class="form-group">
    <input type="text" name="kategori" class="form-control" value="{{$student->kategori}}" placeholder="Enter First Name" />
   </div>
   <div class="form-group">
    <input type="text" name="tahunTerbit" class="form-control" value="{{$student->tahunTerbit}}" placeholder="Enter Last Name" />
   </div>
   <div class="form-group">
    <input type="text" name="penerbit" class="form-control" value="{{$student->penerbit}}" placeholder="Enter Last Name" />
   </div>
   <div class="form-group">
    <input type="submit" class="btn btn-primary" value="Edit" />
   </div>
  </form>
 </div>
</div>

@endsection
