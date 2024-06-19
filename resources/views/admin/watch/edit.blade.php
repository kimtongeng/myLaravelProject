<x-layout>
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <form action="{{url("/admin/watch/".$watch->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")
                    <h1>
                        Edit Watch Information
                    </h1>
                    <div class="mb-3 mt-4">
                        <label for="" class="form-label">Name</label>
                        <input type="text" placeholder="Enter watch Name" class="form-control" name="name" value="{{$watch->name}}">
                    </div>
                    <div class="mb-3 mt-4">
                        <label for="" class="form-label">Brand</label>
                        <input type="text" placeholder="Enter watch Brand" class="form-control" name="brand" value="{{$watch->brand}}">
                    </div>
                    <div class="mb-3 mt-4">
                        <label for="" class="form-label">Price</label>
                        <input type="number" placeholder="Enter watch Price" class="form-control" name="price" value="{{$watch->price}}">
                    </div>
                    <div class="mb-3 mt-4">
                        <label for="" class="form-label">Quantity</label>
                        <input type="number" placeholder="Enter watch Quantity" class="form-control" name="quantity" value="{{$watch->quantity}}">
                    </div>
                    <div class="mb-3 mt-4">
                        <label for="" class="form-label">Date Warranty</label>
                        <input type="number" placeholder="Enter watch Warranty" class="form-control" name="warranty" value="{{$watch->warranty}}">
                    </div>
                    <div class="mb-3 mt-4">
                        <label for="" class="form-label">Highlights</label>
                        <textarea class="form-control" placeholder="Enter watch Highlights" name="highlight"  id="floatingTextarea">
                            {{$watch->highlights}}
                        </textarea>
                    </div>

                    <div class="mb-3 mt-4">
                        <label for="" class="form-label">Composition</label>
                        <input type="text" class="form-control" placeholder="Enter watch Composition" name="composition" value="{{$watch->composition}}">
                    </div>

                    <div class="mb-3 mt-4">
                        <label for="" class="form-label">warning</label>
                        <input type="text" class="form-control" placeholder="Enter watch warning" name="warning" value="{{$watch->warning}}">
                    </div>

                    <div class="mb-3 mt-4">
                        <label for="" class="form-label">Available</label>
                        <select class="form-control form-select-lg mb-3" aria-label=".form-select-lg example" name="available">
                            <option value="Pre-Order"
                            @if ($watch->available=="Pre-Order")
                                selected
                            @endif
                            >Pre-Order</option>
                            <option value="Instock"
                            @if ($watch->available=="Instock")
                                selected
                            @endif
                            >Instock</option>
                        </select>
                    </div>
                    <label for="#floatingTextarea" >Description</label>
                    <div class="form-floating mb-3 mt-2">

                        <textarea class="form-control" placeholder="Add a description" id="floatingTextarea" name="description">{{$watch->description}}</textarea>
                    </div>
                    <div class="mb-3 mt-4">
                        <label for="formFileLg" class="form-label">Image</label>
                        <input class="form-control form-control-lg" id="formFileLg" type="file" name="image">
                    </div>

                    <div class="mb-3 mt-4">
                        <label for="formFileLg" class="form-label">Main Image</label>
                        <input class="form-control form-control-lg" id="formFileLg" type="file" name="mainImage">
                    </div>

                    <div class="mb-3 mt-4">
                        <label for="formFileLg" class="form-label">Side Image</label>
                        <input class="form-control form-control-lg" id="formFileLg" type="file" name="sideImage">
                    </div>

                    <div class="mb-3 mt-4">
                        <label for="formFileLg" class="form-label">Sub Image</label>
                        <input class="form-control form-control-lg" id="formFileLg" type="file" name="subImage">
                    </div>


                    <img src="{{asset("image/".$watch->image)}}" width="200px" class="my-3" alt="">
                    <img src="{{asset("image/".$watch->mainImage)}}" width="200px" class="my-3" alt="">
                    <img src="{{asset("image/".$watch->sideImage)}}" width="200px" class="my-3" alt="">
                    <img src="{{asset("image/".$watch->subImage)}}" width="200px" class="my-3" alt="">



                    <div class="container-fulid">
                        <button class="btn btn-success p-3 mt-4">Update Watches</button>
                        <a href="{{url("/admin/watch")}}" class="btn btn-danger p-3 mt-4">Back</a>
                    </div>

                </form>
            </div>
        </div>
      </div>
</x-layout>
