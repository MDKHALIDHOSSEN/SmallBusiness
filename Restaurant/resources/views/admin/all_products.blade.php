@extends('admin_panel')
@section('content')
<table class="table mt-4">
    <thead class="table-dark">
        <tr>
            <th>
               Item Name
            </th>
          
            <th>
               Item Price
            </th>
            <th>
               Item Description
            </th>
            <th>
               Item Image
            </th>
            <th>
                Actions
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach($all_foods as $food)
        <tr>
            <td>{{ $food ->item_name }}</td>
            <td>{{ $food ->item_price }}</td>
            <td>{{ $food ->item_description }}</td>
            
            <td><img src="{{ URL :: to($food ->item_image) }}" style="width : 80px; height : 80px;">
            </td>
            <td>
                <a class="btn btn-danger" href="{{URL :: to('/admin/delete-product/'.$food ->menu_id)}}">
                    <i class="fas fa-trash-alt"></i>
                </a>
                <a href="{{URL :: to('/admin/edit-product/'.$food ->menu_id)}}" class="btn btn-info">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
            
        </tr>
        
        @endforeach
       
    </tbody>
</table>
        {{ $all_foods->links('vendor.pagination.bootstrap-4') }}
@endsection