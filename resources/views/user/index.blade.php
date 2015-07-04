@extends('boiler.app')

@section('content')
	<h1>{{ $user->name }}</h1>

<div class="container">
  <h2>Employees</h2>
  <p>Employees - Salaries</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Name</th>
        <th>Salary</th>
      </tr>
    </thead>
    <tbody>
    @foreach($employees as $employee)
      <tr>
        <td><a href = 'employee/{{$employee->name}}'>{{$employee->name}}</a></td>
        <td>Salary</td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>

@endsection