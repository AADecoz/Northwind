@extends('layout')

@section('content')

    <style>
        .push-top {
            margin-top: 50px;
        }
    </style>

    <div class="push-top">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div><br />
        @endif
        <table class="table table-striped">
            <thead>
            <tr class="table-warning">
                <td>ID</td>
                <td>Company</td>
                <td>FirstName</td>
                <td>Lastname</td>
                <td>Email</td>
                <td>Job-title</td>
                <td class="text-center">Action</td>
            </tr>
            </thead>
            <tbody>
            @foreach($customer as $customers)
                <tr>
                    <td>{{$customers->id}}</td>
                    <td>{{$customers->company}}</td>
                    <td>{{$customers->first_name}}</td>
                    <td>{{$customers->last_name}}</td>
                    <td>{{$customers->email_address}}</td>
                    <td>{{$customers->job_title}}</td>
                    <td><div class="d-grid gap-2 d-md-block">
                            <a href="{{ route('customer.edit', $customers->id)}}"><button class="btn btn-primary" type="button">Edit</button></a>
                            <form action="{{ route('customer.destroy', $customers->id) }}" method="post" style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </div></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div>
            @endsection


