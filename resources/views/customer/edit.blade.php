@extends('layouts.master')


@section('content')

    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <h3>Edit {{$customer->name}}</h3>
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-2">
                            <a href="{{route('customer.index')}}" class="btn" style="background-color: #4643d3; color: white;"><i
                                    class="fas fa-chevron-left"></i> Back</a>
                        </div>

                    </div>

                </div>
                <form method="POST" action="{{route('customer.update' , $customer->id )}}" >
                    @method('PUT')
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    <label for="">Image</label>
                                    <input type="file" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="">First Name</label>
                                    <input type="text" class="form-control" value="{{$customer->name}}" name="name">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="">Last Name</label>
                                    <input type="text" class="form-control" value="{{$customer->last_name}}"
                                           name="last_name">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email" class="form-control" value="{{$customer->email}}" name="email">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="">Phone</label>
                                    <input type="text" class="form-control" value="{{$customer->phone}}" name="phone">
                                </div>
                            </div>

                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    <label for="">Bank Account Number</label>
                                    <input type="text" class="form-control" value="{{$customer->card_number}}"
                                           name="card_number">
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <button type="submit" class="btn btn-dark"><i class="fas fa-save"></i> UPDATE</button>

                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
