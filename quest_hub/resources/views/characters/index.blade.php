@extends('layouts.app')
@section('MainContent')
<div class="grid grid-flow-row grid-cols-3 max-w-[80vw] gap-8 mt-6 items-center text-center mx-16">
	@foreach ($characters as $character)

	<div class=" sm-w-10/12 gap-10 rounded-xl bg-[#5C9D82]">
		<div class=" w-[25vw] flex flex-wrap flex-row items-center">
			<div class="w-4/12 h-1/4 m-2">
				<img class="rounded-xl"
					src="../public../img/profilepic.jpg"
					alt=""/>
			</div>
			<div class="w-7/12 h-1/4 m-2 text-left">
				<p><b>Name: </b>{{$character->name}}</p>
				<p><b>Race: </b>{{$character->race}}</p>
				<p><b>Class: </b>{{$character->class}}</p>
				<p><b>Character Level:</b> {{$character->character_level}}</p>
			</div>
		</div>
		<div class="items-center w-full h-16 text-center bg-[#2C5246] rounded-b-xl">
			<a href="{{route('characters.show',$character->id)}}"><p class="text-3xl text-center align-middle font-semibold">To char list</p></a>
		</div>
	</div>

	@endforeach
</div>
@endsection