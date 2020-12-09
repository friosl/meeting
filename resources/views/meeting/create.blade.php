@extends('layouts.master')

@section("title", $data["title"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('util.message')
            <div class="card">
                <div class="card-header">Create meeting</div>
                <div class="card-body">
                    @if($errors->any())
                    <ul id="errors">
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    @endif

                    <form method="POST" action="{{ route('meeting.save') }}">
                        @csrf
                        <div class="input1">
                            <input type="text" placeholder="Enter place" name="place" value="{{ old('place') }}" />
                        </div>

                        <div class="input2">
                            <input type="text" autocomplete="off" placeholder="Enter date" class="date form-control" name="date" value="{{ old('date') }}" />
                        </div>

                        <div class="input3">
                            <input type="text" placeholder="Meeting details" name="details" value="{{ old('details') }}" />
                        </div>

                        <input type="submit" value="Send" />
                    </form>

                </div>
            </div>
        </div>
    </div>


</div>
@endsection