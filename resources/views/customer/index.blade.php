@extends('layouts.master')


   @section('content')

    <div class="row justify-content-center mt-5">
        <div class="col-md-10">
            <h3>Customers</h3>
            <div class="card">
                <div class="card-header">
                    <div class="row">
                    <div class="col-md-2">
                        <a href="{{route('customer.create')}}" class="btn" style="background-color: #4643d3; color: white;"><i class="fas fa-plus"></i> Create Customer</a>
                    </div>
                    <div class="col-md-8">
                        <form action="{{route('customer.index')}}" method="get">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="keyword" placeholder="Search anything..." aria-describedby="button-addon2">
                                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
                            </div>

                    </div>
                    <div class="col-md-2">

                        <div class="input-group mb-3">
                            <select class="form-select" name="" id="">
                                <option value="">Newest to Old</option>
                                <option value="">Old to Newest</option>
                            </select>
                        </div>
                    </div>
                    </div>

                </div>
                </form>
                <div class="card-body">
                    <table class="table table-bordered" style="border: 1px solid #dddddd">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Date of Birth</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Email</th>
                            <th scope="col">BAN</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                           @foreach($customers as $customer)


                          <tr>
                            <th scope="row">{{$customer->id}}</th>
                            <td>{{$customer->name}}</td>
                            <td>{{$customer->last_name}}</td>
                            <td>{{$customer->birth_date}}</td>
                            <td>{{$customer->phone}}</td>
                            <td>{{$customer->email}}</td>
                            <td>{{$customer->card_number}}</td>
                            <td>
                                <a href="{{route('customer.edit' , $customer->id)}}" style="color: #2c2c2c;" class="ms-1 me-1"><i class="far fa-edit"></i></a>
                                <a href="{{route('customer.show' , $customer->id)}}" style="color: #2c2c2c;" class="ms-1 me-1"><i class="far fa-eye"></i></a>
                                <a href="{{route('customer.destroy' , $customer->id)}}" style="color: #2c2c2c;" class="ms-1 me-1"><i class="fas fa-trash-alt"></i></a>
                            </td>
                          </tr>
                           @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>


@endsection
