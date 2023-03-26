<x-layouts.base>
    {{--    HEADER--}}
    @include('layouts.sidenav')
    <title>Product List</title>
    <main class="content" >
        @include('layouts.topbar')
        <div class="row ">
            <div class="col-md-12 ">
                <a href="{{route('category.add')}}" type="button" style="text-align: right; float: right" class="btn btn-success">Category Add</a></div>
        </div>


        <div class="py-4">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                    <li class="breadcrumb-item">
                        <a href="#">
                            <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                        </a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Tables</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Bootstrap tables</li>
                </ol>
            </nav>
            <div class="d-flex justify-content-between w-100 flex-wrap">
                <div class="mb-3 mb-lg-0">
                    <h1 class="h4">Bootstrap tables</h1>
                    <p class="mb-0">Dozens of reusable components built to provide buttons, alerts, popovers, and more.</p>
                </div>
                <div>
                    <a href="https://themesberg.com/docs/volt-bootstrap-5-dashboard/components/tables/" class="btn btn-outline-gray-600 d-inline-flex align-items-center">
                        <svg class="icon icon-xs me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>
                        Bootstrap Tables Docs
                    </a>
                </div>
            </div>
        </div>

        <div class="card border-0 shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-centered table-nowrap mb-0 rounded">
                        <thead class="thead-light">
                        <tr>
                            <th class="border-0 rounded-start">#</th>
                            <th class="border-0">Category Name</th>
                            <th class="border-0">Parent Category Name</th>
                            <th class="border-0">Status</th>
                            <th class="border-0">Display</th>
                            <th class="border-0">Category Created</th>
                            <th class="border-0">Created By</th>
                            <th class="border-0 rounded-end">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <!-- Item -->
                        @php
                            $i = 1
                        @endphp
                        @foreach($categories as $categorie)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$categorie->name}}</td>
                                <td>
                                    @if($categorie->category_id)
                                        {{$categorie->parent->name}}
                                    @else
                                        No parent id
                                    @endif
                                </td>
                                <td>
                                    {{$categorie->display}}

                                </td>  <td>

                                    @if($categorie->status == 1)
                                        <i class='fas fa-check' style="  font-size: 20px;color: #63de05;"></i>
                                    @endif
                                </td>
                                <td>
                                    {{$categorie->created_at}}
                                </td>    </td>
                                <td>
                                    {{$categorie->created_by}}
                                </td>
                                <td>

                                    <a href="" style="font-size: 25px; padding: 5px"> <ion-icon name="create-outline"></ion-icon> </a>

                                    <a href="" style="font-size: 25px; padding: 5px"> <ion-icon name="trash-outline"></ion-icon></a>
                                    {{--                            <a href="javascript:void(0)" style="font-size: 25px; padding: 5px;" data-id="{{$categorie->id}}" class="category_delete" >--}}
                                    {{--                                <ion-icon name="trash-outline"></ion-icon> </a>--}}
                                </td>
                            </tr>
                        @endforeach

                        <!-- End of Item -->


                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </main>
</x-layouts.base>
