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
            Add User
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
                <form method="post" action>
                    @csrf
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <div class="row mb-4">
                        <div class="col">
                            <div class="form-outline">
                                <input type="text" id="form6Example1" class="form-control" />
                                <label class="form-label" for="form6Example1" name="first_name">First name</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <input type="text" id="form6Example2" class="form-control" />
                                <label class="form-label" for="form6Example2" name="last_name">Last name</label>
                            </div>
                        </div>
                    </div>

                    <!-- Text input -->
                    <div class="form-outline mb-4">
                        <input type="text" id="form6Example3" class="form-control" />
                        <label class="form-label" for="form6Example3" name="company">Company name</label>
                    </div>

                    <!-- Text input -->
{{--                    <div class="form-outline mb-4">--}}
{{--                        <input type="text" id="form6Example4" class="form-control" />--}}
{{--                        <label class="form-label" for="form6Example4">Address</label>--}}
{{--                    </div>--}}

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" id="form6Example5" class="form-control" />
                        <label class="form-label" for="form6Example5" name="email_address">Email</label>
                    </div>

                    <!-- Number input -->
{{--                    <div class="form-outline mb-4">--}}
{{--                        <input type="number" id="form6Example6" class="form-control" />--}}
{{--                        <label class="form-label" for="form6Example6">Phone</label>--}}
{{--                    </div>--}}

                    <!-- Message input -->
{{--                    <div class="form-outline mb-4">--}}
{{--                        <textarea class="form-control" id="form6Example7" rows="4"></textarea>--}}
{{--                        <label class="form-label" for="form6Example7">Additional information</label>--}}
{{--                    </div>--}}

                    <!-- Checkbox -->
                    <div class="form-check d-flex justify-content-center mb-4">
                        <input
                            class="form-check-input me-2"
                            type="checkbox"
                            value=""
                            id="form6Example8"
                            checked
                        />
                        <label class="form-check-label" for="form6Example8"> Create an account? </label>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4">Place order</button>
                </form>
        </div>
    </div>
@endsection
