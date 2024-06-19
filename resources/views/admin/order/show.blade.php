<x-layout>
    <div class="card w-100">
        <div class="card-body">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-7">
                        <div class=" d-flex justify-content-between my-2 align-items-center broder-bottom ">
                            <p class="display-4">Name :</p>
                            <p class="display-5">{{$customer->name}}</p>
                        </div>
                        <hr>
                        <div class=" d-flex justify-content-between my-2 align-items-center">
                            <p class="display-4">Email :</p>
                            <p class="display-5">{{$customer->email}}</p>
                        </div>
                        <hr>
                        <div class=" d-flex justify-content-between my-2 align-items-center">
                            <p class="display-4">Country :</p>
                            <p class="display-5">{{$customer->country}}</p>
                        </div>
                        <hr>
                        <div class=" d-flex justify-content-between my-2 align-items-center">
                            <p class="display-4">City :</p>
                            <p class="display-5">{{$customer->city}}</p>
                        </div>
                        <hr>
                        <div class=" d-flex justify-content-between my-2 align-items-center">
                            <p class="display-4">State :</p>
                            <p class="display-5">{{$customer->state}}</p>
                        </div>
                        <hr>
                        <div class=" d-flex justify-content-between my-2 align-items-center">
                            <p class="display-4">Postal Code :</p>
                            <p class="display-5">{{$customer->postal_code}}</p>
                        </div>
                        <hr>
                        <div class=" d-flex justify-content-between my-2 align-items-center">
                            <p class="display-4">Calling Code :</p>
                            <p class="display-5">{{$customer->calling_code}}</p>
                        </div>
                        <hr>
                        <div class=" d-flex justify-content-between my-2 align-items-center">
                            <p class="display-4">Phone :</p>
                            <p class="display-5">{{$customer->phone}}</p>
                        </div>
                        <hr>
                        <div class=" d-flex justify-content-between my-2 align-items-center">
                            <p class="display-4">Account Create :</p>
                            <p class="display-5">{{$customer->created_at}}</p>
                        </div>
                        <hr>
                        <div class=" d-flex justify-content-between my-2 align-items-center">
                            <p class="display-4">Address :</p>
                            <p class="display-5">{{$customer->address}}</p>
                        </div>
                        <hr>


                        <a href="{{route("order.index")}}" class="btn btn-primary w-100 py-3">Go back</a>


                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
