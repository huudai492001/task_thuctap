<x-layouts.base>
    @include('layouts.sidenav')
<main class="content">
    @include('layouts.topbar')

        @if(\Illuminate\Support\Facades\Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{\Illuminate\Support\Facades\Session::get('success')}}
            </div>
        @endif
        <div class="row">
            <div class="col-md-10 "></div>
            <div class="col-md-2 mb-5" ><a href="{{route('product.add')}}" class="btn btn-primary float-end ">Add Product</a></div>
        </div>
        <table class="table table-striped table-bordered ">
            <thead>
            <tr>
                <th>S.no</th>
                <th>Product Name</th>
                <th>Category Name</th>
                <th>Price</th>
                <th>Display</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
            </thead>
                    <tbody>
                    @php
                        $i = 1
                    @endphp
                    @foreach($products as $product)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$product->name}}</td>
                            <td>
                                @if($product->category_id)
                                    {{$product->category->name}}
                                @endif
                            </td>
                            <td>{{$product->price}}</td>
                            <td> @if($product->display == 1)
                                    <i class='fas fa-check' style=" font-size: 20px;color: #63de05;"></i>
                                @elseif($product->display == 0)
                                    <i class='far fa-window-close' style=" font-size: 20px;color: red;"></i>
                                @endif</td>
                            <td>
                                <img style="height: 80px ; width: 80px" src="{{asset('upload/'.$product->image)}}">
                            </td>

                            <td>
                                <a href="" style="font-size: 25px; padding: 5px"> <ion-icon name="create-outline"></ion-icon> </a>

                                <a href="" style="font-size: 25px; padding: 5px"> <ion-icon name="trash-outline"></ion-icon></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
        </table>
        <div class="row">
            <div class="col-md-5">
            </div>
            <div class="col-md-6">
                {{--            {{$products->links()}}--}}
            </div>
        </div>

</main>

</x-layouts.base>
