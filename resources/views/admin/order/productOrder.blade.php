<x-layout>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h1>Customer Order </h1>
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Item</th>
                        <th>Name</th>
                        <th>Brand</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>orderAt</th>
                        <th>Action </th>
                      </tr>
                    </thead>

                    <tbody>
                        @foreach ($products as $index => $product)
                            <tr>
                                <td>{{$index+1}}</td>
                                <td><img src="{{asset("image/".$product["item"])}}" alt=""></td>
                                <td>{{$product["name"]}}</td>
                                <td>{{$product["brand"]}}</td>
                                <td>{{$product["quantity"]}}</td>
                                <td>{{$product["price"]}}</td>
                                <td>{{$product["orderAt"]}}</td>
                                <td>
                                    <a href="{{route("order.view.product.show",["id"=>$product["productId"]])}}" class="btn btn-info">view product</a>
                                </td>

                            </tr>
                        @endforeach



                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</x-layout>
