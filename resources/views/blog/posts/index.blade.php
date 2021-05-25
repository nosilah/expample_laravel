@extends('layouts.app')

@section('content')
<table>
    @foreach($items as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->title }}</td>
            <td>{{ $item->created_at }}</td>
        </tr>
    @endforeach
</table>
@if($items->total() > $items->count())
    <br>
    <div class="d-flex justify-content-center">
        {!! $items->links() !!}
    </div>
@endif
@endsection
