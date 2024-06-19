<x-layout>
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <form action="{{url("/admin/watch")}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h1>
                        Enter Watches Information
                    </h1>
                    <div class="mb-3 mt-4">
                        <label for="" class="form-label">Name</label>
                        <input type="text" placeholder="Enter watch Name" class="form-control" name="name">
                    </div>
                    <div class="mb-3 mt-4">
                        <label for="" class="form-label">Brand</label>
                        <input type="text" placeholder="Enter watch Brand" class="form-control" name="brand">
                    </div>
                    <div class="mb-3 mt-4">
                        <label for="" class="form-label">Price</label>
                        <input type="number" placeholder="Enter watch Price" class="form-control" name="price">
                    </div>
                    <div class="mb-3 mt-4">
                        <label for="" class="form-label">Quantity</label>
                        <input type="number" placeholder="Enter watch Quantity" class="form-control" name="quantity">
                    </div>
                    <div class="mb-3 mt-4">
                        <label for="" class="form-label">Date Warranty</label>
                        <input type="number" placeholder="Enter watch Warranty" class="form-control" name="warranty">
                    </div>
                    <div class="mb-3 mt-4">
                        <label for="" class="form-label">Highlights</label>
                        <textarea class="form-control" placeholder="Enter watch Highlights" id="floatingTextarea" name="highlight"></textarea>
                    </div>

                    <div class="mb-3 mt-4">
                        <label for="" class="form-label">Composition</label>
                        <input type="text" class="form-control" placeholder="Enter watch Composition" name="composition">
                    </div>

                    <div class="mb-3 mt-4">
                        <label for="" class="form-label">warning</label>
                        <input type="text" class="form-control" placeholder="Enter watch warning" name="warning">
                    </div>

                    <div class="mb-3 mt-4">
                        <label for="" class="form-label">Available</label>
                        <select class="form-control form-select-lg mb-3" aria-label=".form-select-lg example" name="available">
                            <option value="Pre-Order">Pre-Order</option>
                            <option value="Instock">Instock</option>
                        </select>
                    </div>
                    <div class="mb-3 mt-4">
                        <label for="" class="form-label">Type</label>
                        <select class="form-control form-select-lg mb-3" aria-label=".form-select-lg example" name="type">
                            <option value="men">Men</option>
                            <option value="women">Women</option>
                            <option value="all">All</option>
                        </select>
                    </div>
                    <div class="form-floating mb-3 mt-4">
                        <label for="#floatingTextarea">Description</label>
                        <textarea class="form-control" placeholder="Add a description" id="floatingTextarea" name="description"></textarea>
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



                    <div class="container-fulid">
                        <button type="submit" class="btn btn-success p-3 mt-4">Post Watches</button>
                        <a href="{{url("/admin/watch")}}" class="btn btn-danger p-3 mt-4">Back</a>
                    </div>

                </form>
            </div>
        </div>
      </div>
</x-layout>
