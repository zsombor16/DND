@extends('layouts.app')
@section('MainContent')
    <h1>sddfs
        dds
        <button>
            <a href="{{route('characters.index')}}"> Chars</a>
        </button>

        <button>
            <a href="{{route('groups.create')}}">Create a group</a>
        </button>
    </h1>
@endsection