@extends('layout')

@section('content')

    <style>
        .container {
            max-width: 450px;
        }
        .push-top {
            margin-top: 50px;
        }
    </style>

    <div class="card push-top">
        <div class="card-header">
            Edit & Update
        </div>

        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
            <form method="post" action="{{ route('customer.update', $customer->id) }}">
                <div class="form-group">
                    @csrf
                    @method('PATCH')
                    <label for="name">Company</label>
                    <input type="text" class="form-control" name="company" value="{{ $customer->company }}"/>
                </div>
                <div class="form-group">
                    <label for="name">FirstName</label>
                    <input type="text" class="form-control" name="first_name" value="{{ $customer->first_name }}"/>
                </div>
                <div class="form-group">
                    <label for="name">Lastname</label>
                    <input type="text" class="form-control" name="last_name" value="{{ $customer->last_name }}"/>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email_address" value="{{ $customer->email_address }}"/>
                </div>
{{--                <div class="form-group">--}}
{{--                    <label for="password">Password</label>--}}
{{--                    <input type="text" class="form-control" name="password" value="{{ $customer->password }}"/>--}}
{{--                </div>--}}
                <button type="submit" class="btn btn-block btn-danger">Update User</button></a>
            </form>
        </div>
    </div>
@endsection
