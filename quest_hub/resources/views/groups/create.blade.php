@extends('layouts.app')

@section('MainContent')
<h1>Create Group</h1>

<form method="POST" action="{{ route('groups.store') }}">
    @csrf

    <div>
        <label for="group_name">Group Name:</label>
        <input type="text" id="group_name" name="group_name" required>
    </div>

    <div>
        <label for="description">Description:</label>
        <textarea id="description" name="description"></textarea>
    </div>

    <button type="submit">Create Group</button>
</form>
@endsection