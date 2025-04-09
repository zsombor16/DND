@extends('layouts.app')

@section('MainContent')
<h1>Edit Group</h1>

<form method="POST" action="{{ route('groups.update', $group->id) }}">
    @csrf
    @method('PUT')

    <div>
        <label for="group_name">Group Name:</label>
        <input type="text" id="group_name" name="group_name" value="{{ $group->group_name }}" required>
    </div>

    <div>
        <label for="description">Description:</label>
        <textarea id="description" name="description">{{ $group->description }}</textarea>
    </div>

    <div>
        <label for="username">Add User by Username:</label>
        <input type="text" id="username" name="username">
        <button type="submit">Add User</button>
        @error('username')
            <div>{{ $message }}</div>
        @enderror
    </div>
    
    <div>
        <h2>Current Members</h2>
        <ul>
            @foreach($group->accounts as $member)
                <li>{{ $member->username }}</li>
            @endforeach
        </ul>
    </div>

    <button type="submit">Update Group</button>
</form>
@endsection