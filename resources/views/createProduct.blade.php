@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tao moi san pham</div>

                <div class="panel-body">
                    <form action="{{url("product")}}" method="post" >
                     {{ csrf_field() }}
                    Ten san pham <input type="text" name="ten_san_pham" /> <br/>
                    Gia: <input type="text" name="gia" /><br/>
                    Mo ta <textarea row="10" name="mota"></textarea><br/>
                    <input type="submit" value="Create Product"/>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection
