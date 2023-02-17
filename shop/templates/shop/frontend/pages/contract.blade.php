@extends('frontend.layouts.app')


@section('content')
    <!-- Contract -->
    <div class="contract">
        <div class="content">
            <div class="image">
                <img
                    src="https://images.unsplash.com/photo-1624280433509-b01afeaf68e5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1315&q=80"
                    alt="Technology"
                />
            </div>
            <form action="" id="form">
                <div class="box-center">
                    <div class="box-input">
                        <label for="address">CONTRACT ADDRESS </label>
                        <input
                            type="text"
                            name="address"
                            id="address"
                            placeholder="Ox..."
                        />
                    </div>
                    <div class="box-input">
                        <label for="token">TOKEN ID</label>
                        <input
                            type="text"
                            name="token"
                            id="token"
                            placeholder="Your Id..."
                        />
                    </div>

                    <input
                        type="submit"
                        value="View transcation history"
                        id="submit"
                    />
                </div>
            </form>
        </div>
    </div>
@endsection


@push('contract')
    <link rel="stylesheet" href="{{url('assets/contract.css')}}">
@endpush