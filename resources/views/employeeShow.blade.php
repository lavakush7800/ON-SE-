@extends('layouts.app')

@section('content')
<div class="container">
<center><h4>Employee Data</h4></center>
 <a href="/employee"><button class="btn btn-primary btn-sm">Add Employee</button></a>
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>IMAGES</th>
        <th>NAME</th>
      </tr>
    </thead>
    <tbody>
    @foreach($results as $data)
      <tr>
        <td>{{ $data['id'] }}</td>
        <td><img src='<?php echo "/storage/".str_replace('public/','',$data['image']); ?>' width="80" /></td>
        <td>{{ $data['name'] }}</td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>
@endsection
