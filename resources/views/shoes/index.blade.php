@extends('Shoes.layout')
@section('content')
    <div class="">
        <div class="">
            <div class="">
                <div class="">
                    <div class=""><b>Shoe Library</b></div>
                    <div class="">
                        <a href="{{ url('/shoe/create') }}" class="btn btn-success btn-sm" title="Add New Shoe">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New

                        </a>

                        <form action="{{ route('search') }}" method="GET" >
                        <input class="form-control-sm mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success btn-sm my-2 my-sm-0" type="submit">Search</button>
                        </form>
                        
                        <div class="">
                            <table class="table table-dark table-striped" ,width="100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Brand</th>
                                        <th>Size</th>
                                        <th>Color</th>
                                        <th>Price</th>
                                        <th>Supplier</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($shoe as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->brand  }}</td>
                                        <td>{{ $item->size }}</td>
                                        <td>{{ $item->color }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>{{ $item->supplier }}</td>
                                        <td>
                                            <a href="{{ url('/shoe/' . $item->id) }}" title="View"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/shoe/' . $item->id . '/edit') }}" title="Edit"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/shoe' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach    
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td style= "color: yellow;">{{ $totalsize }}</td>
                                        <td></td>
                                        <td></td>
                                        <td> </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
