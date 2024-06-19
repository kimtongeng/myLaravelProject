<x-layout>
    <div class="card w-100">
        <div class="card-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-5">
                        <img src="{{asset("image/".$watch->image)}}" width="600px" alt="">
                        <img src="{{asset("image/".$watch->mainImage)}}" width="300px" alt="">
                        <img src="{{asset("image/".$watch->sideImage)}}" width="300px" alt="">
                        <img src="{{asset("image/".$watch->subImage)}}" width="300px" alt="">
                    </div>
                    <div class="col-7">
                        <div class=" d-flex justify-content-between my-2 align-items-center broder-bottom ">
                            <p class="display-4">Name :</p>
                            <p class="display-5">{{$watch->name}}</p>
                        </div>
                        <hr>
                        <div class=" d-flex justify-content-between my-2 align-items-center">
                            <p class="display-4">Brand :</p>
                            <p class="display-5">{{$watch->brand}}</p>
                        </div>
                        <hr>
                        <div class=" d-flex justify-content-between my-2 align-items-center">
                            <p class="display-4">Price :</p>
                            <p class="display-5">${{$watch->price}}</p>
                        </div>
                        <hr>
                        <div class=" d-flex justify-content-between my-2 align-items-center">
                            <p class="display-4">Quantity :</p>
                            <p class="display-5">{{$watch->quantity}}</p>
                        </div>
                        <hr>
                        <div class=" d-flex justify-content-between my-2 align-items-center">
                            <p class="display-4">Warranty :</p>
                            <p class="display-5">{{$watch->warranty}} Day</p>
                        </div>
                        <hr>

                        <div class=" d-flex justify-content-between my-2 align-items-center">
                            <p class="display-4">Composition :</p>
                            <p class="display-5">{{$watch->composition}}</p>
                        </div>
                        <hr>
                        <div class=" d-flex justify-content-between my-2 text-danger align-items-center">
                            <p class="display-4 ">warning :</p>
                            <p class="display-5">{{$watch->warning}}</p>
                        </div>
                        <hr>
                        <div class=" d-flex justify-content-between my-2 text-danger align-items-center">
                            <p class="display-4 ">views :</p>
                            <p class="display-5">{{$watch->views}}</p>
                        </div>
                        <hr>
                        <div class=" d-flex justify-content-between my-2 text-danger align-items-center">
                            <p class="display-4 ">Available :</p>
                            <p class="display-5">{{$watch->available}}</p>
                        </div>
                        <hr>
                        <div class=" d-flex justify-content-between my-5">
                            <div class="d-flex flex-column w-50 ">
                                <h3>Description</h3>
                                <p class="display-5">{{$watch->description}}</p>
                            </div>
                            <div class="d-flex flex-column mx-4">
                                <h3>Highlights</h3>
                                <ul class="display-5">
                                    @foreach ($highlights as $highlight)
                                        <li>{{$highlight}}</li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>


                        <a href="{{url("/admin/watch")}}" class="btn btn-primary w-100 py-3">Go back</a>


                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
