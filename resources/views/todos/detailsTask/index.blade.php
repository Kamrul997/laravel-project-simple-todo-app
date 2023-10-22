@extends('layouts.app')

@section('mytitle', 'Task Details')

@section('bodyContent')

<h1 class="text-center mb-4">Task Details</h1>

<div class="card">
  <div class="card-body">
    <table class="mt-3 table table">
        <tbody>
            
            <tr>
                <td>Title</td>
                <td>:</td>
                <td>Task Title</td>
            </tr>
            <tr>
                <td>Description</td>
                <td>:</td>
                <td>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                    Maxime, similique? Eligendi commodi quos voluptatum sit incidunt 
                    aliquam distinctio, perferendis at debitis natus, corrupti aperiam 
                    veritatis minima quibusdam sapiente. Quod, animi.
                </td>
            </tr>
            <tr>
                <td>Start Date</td>
                <td>:</td>
                <td>13-02-2023</td>
            </tr>
            <tr>
                <td>Deadline</td>
                <td>:</td>
                <td>13-02-2023</td>
            </tr>
            
        </tbody>
    </table>
    <a href="{{route('homePage')}}" class="btn btn-primary">Go To Home</a>
  </div>
</div>

@endsection