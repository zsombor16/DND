@extends('layouts.app')
@section('MainContent')
<div class="grid grid-flow-row grid-cols-3 max-w-[90vw] gap-8 mt-6 items-center text-center mx-16">

	<h1>Groups</h1>
<ul>
    @foreach($groups as $group)
        <li>
            <a href="{{ route('groups.show', $group->id) }}">{{ $group->group_name }}</a>
        </li>
    @endforeach
</ul>



    @foreach ($groups as $group)

	<div class=" sm-w-full gap-10 rounded-xl bg-[#5C9D82]">
		<div class=" w-[25vw] flex flex-wrap flex-row items-center">
			<div class="w-4/12 h-1/4 m-2">
				<img class="rounded-xl"
					src="../public../img/profilepic.jpg"
					alt="" />
			</div>
			<div class="w-7/12 h-1/4 m-2 text-left">
				<p><b>Name: </b>{{$group->name}}</p>
				<p><b></p>
				<p><b></p>
				<p></p>
			</div>
		</div>
		<div class="items-center w-full h-16 text-center bg-[#2C5246] rounded-b-xl">
			<a href=""><p class=""></p></a>
		</div>
	</div>

	@endforeach
</div>
@endsection