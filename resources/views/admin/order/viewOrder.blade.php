<x-layout>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h1>Customer Order</h1>
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Country</th>
                        <th>City</th>
                        <th>Phone</th>
                        <th>Product</th>
                        <th>orderAt</th>
                        <th>Action </th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($orderTime as $order)

                            <tr>
                                <td>{{$order->user_id}}</td>
                                <td>{{$order->name}}</td>
                                <td>{{$order->email}}</td>
                                <td>{{$order->country}}</td>
                                <td>{{$order->city}}</td>
                                <td>{{$order->phone}}</td>
                                <td>{{$order->watchNum}}</td>
                                <td>{{$order->created_at}}</td>
                                <td>
                                    <a href="{{route("order.show",["userId"=>$order->user_id,"date"=>$order->created_at])}}" class="btn btn-info">User Info</a>
                                    <a href="{{route("order.view.product",["userId"=>$order->user_id,"date"=>$order->created_at])}}" class="btn btn-success">View Proudcut</a>
                                </td>
                            </tr>
                        @endforeach



                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</x-layout>
