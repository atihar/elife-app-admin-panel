@push('css_lib')
@include('layouts.datatables_css')
@endpush
{!! $dataTable->table(['width' => '100%']) !!}

@push('scripts_lib')
@include('layouts.datatables_js')
{!! $dataTable->scripts() !!}
@endpush

{{-- @push('css_lib')
@include('layouts.datatables_css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
@endpush

<table id="example" class="display" style="width:100%">
    <thead>
        <tr>
            <th>User Id</th>
            <th>Delivery Fee(%)</th>
            <th>Total Orders</th>
            <th>Earning</th>
            <th>Available</th>
            <th>Updated At</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($drivers as $driver)
            <tr>
                <td>{{$driver->user->name}}</td>
                <td>{{$driver->delivery_fee}}</td>
                <td>{{$driver->total_orders}}</td>
                <td>{{$driver->eraning}}</td>
                <td>{{$driver->available}}</td>
                <td>{{$driver->updated_at}}</td>
                <td>

                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@push('scripts_lib')
@include('layouts.datatables_js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>
@endpush --}}