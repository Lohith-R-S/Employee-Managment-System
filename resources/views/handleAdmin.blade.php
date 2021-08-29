@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <center><div class="card-header">Admin Dashboard</div></center>              
            </div>            
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <center><h3>View all Employees</h3></center>
            <br>
             
                     <a href="{{ url('/userdata') }}">Download Employees Data</a>
                     
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile No</th>
                    <th scope="col">Salary</th>
                    <th scope="col">Designation</th>
                    <th scope="col">Edit</th>
                    </tr>
                </thead>
                <tbody>

                        @if (count($users)!=0)
                        @foreach ($users as $user)
                        <tr>
                        <th scope="row">{{$user->id}}</th>                        
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->mobile}}</td>
                        <td>{{$user->salary}}</td>
                        <td>{{$user->designation}}</td>
                        <td><a href="" >Edit User</a></td>
                        </tr>
                        @endforeach
                    @endif    


                    
                </tbody>
            </table>
                
        </div>
</div>
@endsection