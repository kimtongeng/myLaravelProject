<x-layout>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="container-fluid d-flex justify-content-between align-items-center">
                    <h1>Watches List</h1>
                    <a href="{{url("/admin/watch/create")}}" class="btn btn-success  text-white  p-3">Post Watches</a>
                </div>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Brand</th>
                    <th>Available</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>

                    @foreach ($watches as $watch)
                        <tr>
                            <td>{{$watch->id}}</td>
                            <td><img src="{{asset("image/".$watch->image)}}" alt=""></td>
                            <td>{{$watch->name}}</td>
                            <td>{{$watch->brand}}</td>
                            <td>{{$watch->available}}</td>
                            <td>${{$watch->price}}</td>
                            <td>{{$watch->quantity}}</td>
                            <td>
                                <a href="{{url("/admin/watch/".$watch->id."/show")}}" class="btn btn-info">Show</a>
                                <a href="{{url("/admin/watch/".$watch->id."/edit")}}" class="btn btn-warning">Edit</a>
                                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#model-del-{{$watch->id}}">Delete</button>
                            </td>
                        </tr>
                        <div class="modal fade" id="model-del-{{$watch->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h2 class="modal-title" id="exampleModalLabel">are you sur you want to delete?🤨</h2>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-footer">

                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <form action="{{url("/admin/watch/".$watch->id)}}" method="post">
                                        @csrf
                                        @method("delete")
                                      <button type="submit" class="btn btn-danger">Delete</button>

                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                    @endforeach


                </tbody>
              </table>
            </div>
          </div>
    </div>

</x-layout>
