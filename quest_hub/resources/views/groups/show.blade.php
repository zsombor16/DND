@extends('layouts.app')

@section('MainContent')
<h1>{{ $group->group_name }}</h1>
<p>{{ $group->description }}</p>

<h2>Members</h2>
<ul>
    @foreach($members as $member)
        <li>{{ $member->name }} ({{ $member->email }})</li>
    @endforeach
</ul>
<button><a href="{{route('groups.edit', $group->id)}}">edit</a></button>
@endsection