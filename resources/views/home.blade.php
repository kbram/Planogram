@extends('layouts.app')

@section('content')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Plan-O-Gram</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/dashboard/babyProducts">Baby Products <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/dashboard/beverages">Beverages</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="/dashboard/cloths">Cloths</a>
                </li>
            </ul>

            <span class="pr-4"> {{ Auth::user()->name }} </span>
            <a class="btn btn-dark my-2 my-sm-0" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row ">

            <div class="col-2 justify-content-center  productsTab">
                <p class="productsTitle d-flex justify-content-center">Products</p>
                @foreach ($stocks as $stock)
                    @if ($stock->status === 'notAssign')
                    <img id={{ 'stock-' . $stock->id }}
                    name={{ 'product-' . $stock->product_id }}
                    src={{ asset($stock->product->image) }} alt={{ 0}}
                    draggable="true" ondragstart="drag(event)"
                    height={{ $stock->product->height }}
                    width={{ $stock->product->width }}>
                    @endif
                @endforeach


            </div>
            <div class="col-10">

                @foreach ($aisles as $aisle)
                    <div class="container aisle">

                        <div class="row justify-content-center ">
                            <p class="productsTitle2 ">{{ $aisle->name }}</p>
                            <img class=" topImage" src={{ asset('storage/top.png') }} />
                        </div>
                        <div class="row justify-content-center bayTrack">
                            @foreach ($bays as $bay)
                                @if ($bay->aisle_id === $aisle->id)
                                    <div class="col-6 bay  d-flex align-items-end" id={{ 'bay-' . $bay->id }}
                                        ondrop="drop(event)" ondragover="allowDrop(event)">
                                        @foreach ($stocks as $stock)
                                            @if ($stock->bay_id === $bay->id && $stock->status === 'assign')
                                                <img id={{ 'stock-' . $stock->id }}
                                                    name={{ 'product-' . $stock->product_id }}
                                                    src={{ asset($stock->product->image) }} alt={{ $aisle->id }}
                                                    draggable="true" ondragstart="drag(event)"
                                                    height={{ $stock->product->height }}
                                                    width={{ $stock->product->width }}>
                                            @endif
                                        @endforeach
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <input type="hidden" id="department_id" value="{{ $department->id }}" />

    <script>
        function allowDrop(ev) {
            ev.preventDefault();

        }

        function drag(ev) {
            ev.dataTransfer.setData("text", ev.target.id);
            console.log("remove -" + ev.target.id);
            deleteStock(ev.target.id);
        }

        function deleteStock($id) {
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr("content");
            $.ajax({
                type: "POST",
                url: "/delete-stock",
                data: {
                    _token: CSRF_TOKEN,
                    id: parseInt($id.replace("stock-", ""))
                },
                success: function(result) {

                },
                error: function(response, status, error) {
                    if (response.status === 422) {}
                }
            });
        }

        function drop(ev) {
            ev.preventDefault();
            var data = ev.dataTransfer.getData("text");
            ev.target.appendChild(document.getElementById(data));
            createStock(ev.target.id, data);
        }

        function createStock($data1, $data) {
            $dep_id = document.getElementById('department_id').value;
            $data = {
                product_id: parseInt(document.getElementById($data).name.replace("product-", "")),
                bay_id: parseInt($data1.replace("bay-", "")),
                aisle_id: parseInt(document.getElementById($data).alt),
                department_id: parseInt($dep_id),
            }
            console.log($data);
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr("content");
            $.ajax({
                type: "POST",
                url: "/store-stock",
                data: {
                    _token: CSRF_TOKEN,
                    data: $data,
                },
                success: function(result) {

                },
                error: function(response, status, error) {
                    if (response.status === 422) {}
                }
            });
        }
    </script>
@endsection
