@extends('layouts.master')

@section("title", $data["title"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $data["title"] }}</div>

                <div class="row p-5">
                    <div class="col-md-12">
                        <ul id="errors">
                            <b>Meeting details: {{ $data["meeting"]["details"] }} </b>
                            <br>
                            Meeting date: {{ $data["meeting"]["date"]}}                         
                            <br />
                            Creation: {{ $data["meeting"]["created_at"] }}
                        </ul>
                    </div>
                    <form method="GET" action="{{ route('meeting.destroy', $data['meeting']->getId())  }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" > Delete </button>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection