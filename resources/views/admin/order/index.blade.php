<x-layout>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">

                    <h1>Customer Order </h1>
                    <form action="{{route("order.date")}}" method="post" class="w-25 d-flex align-items-center">
                        @csrf
                        <input type="date" name="date" class="form-control me-3" value="{{$currentDate}}">
                        <button class="btn btn-success">Search</button>
                    </form>

                </div>
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Date</th>
                        <th>Order Time</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($results as $result)
                        <tr>
                            <td>{{$result["user_id"]}}</td>
                            <td>{{$result["name"]}}</td>
                            <td>{{$result["email"]}}</td>
                            <td>{{$currentDate}}</td>
                            <td>{{$result["order_at"]}}</td>
                            <td>
                                <a href="{{route("order.view",["userId"=>$result["user_id"],"date"=>$currentDate])}}" class="btn btn-info py-2">View Order</a>
                            </td>
                        </tr>

                        @endforeach



                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</x-layout>
