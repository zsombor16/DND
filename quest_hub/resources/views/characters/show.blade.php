@extends('layouts.app')
@section('MainContent')

<div class="w-[80vw] h-[90vh] grid grid-flow-row items-center grid-cols-6 gap-x-16 gap-y-4 mt-4 mx-24">
    <div class="cols-span-1 row-span-1 grid grid-flow-row grid-cols-3 h-full w-full">
        <div class=" col-span-3 row-span-3 border border-green-800 rounded-xl align-middle items-center">
            <p class="text-xl text-center border-b border-green-800">Strength</p>
            <div class="text-center items-center">
                16
            </div>
        </div>
        <div class="col-span-1 col-start-2 row-span-1 border border-green-800 rounded-xl">
                +3
        </div>

    </div>
    <div class="col-span-2 row-span-2 border border-green-800 h-full rounded-l">Saving throws</div>
    <div class="col-span-3 row-span-1 border border-green-800 h-full rounded-l">Class,race,level</div>
    <div class="cols-span-1 row-span-1 grid grid-flow-row grid-cols-3 h-full w-full">
        <div class=" col-span-3 row-span-3 border border-green-800 rounded-xl align-middle items-center">
            <p class="text-xl text-center border-b border-green-800">Dexterity</p>
            <div class="text-center items-center">
                16
            </div>
        </div>
        <div class="col-span-1 col-start-2 row-span-1 border border-green-800 rounded-xl">
                +3
        </div>

    </div>
    <div class="col-span-3 row-span-2 border border-green-800 h-full rounded-l">Speed, Armor class, initiative, hp, passive perc, prof ponus</div>
    <div class="cols-span-1 row-span-1 grid grid-flow-row grid-cols-3 h-full w-full">
        <div class=" col-span-3 row-span-3 border border-green-800 rounded-xl align-middle items-center">
            <p class="text-xl text-center border-b border-green-800">Constitution</p>
            <div class="text-center items-center">
                16
            </div>
        </div>
        <div class="col-span-1 col-start-2 row-span-1 border border-green-800 rounded-xl">
                +3
        </div>

    </div>
    <div class="col-span-2 row-span-4 border border-green-800 h-full rounded-l">Skill checks</div>
    <div class="cols-span-1 row-span-1 grid grid-flow-row grid-cols-3 h-full w-full">
        <div class=" col-span-3 row-span-3 border border-green-800 rounded-xl align-middle items-center">
            <p class="text-xl text-center border-b border-green-800">Intelligence</p>
            <div class="text-center items-center">
                16
            </div>
        </div>
        <div class="col-span-1 col-start-2 row-span-1 border border-green-800 rounded-xl">
                +3
        </div>

    </div>
    <div class="col-span-3 row-span-2 border border-green-800 h-full rounded-l">Char traits, spells&conjurations</div>
    <div class="cols-span-1 row-span-1 grid grid-flow-row grid-cols-3 h-full w-full">
        <div class=" col-span-3 row-span-3 border border-green-800 rounded-xl align-middle items-center">
            <p class="text-xl text-center border-b border-green-800">Wisdom</p>
            <div class="text-center items-center">
                16
            </div>
        </div>
        <div class="col-span-1 col-start-2 row-span-1 border border-green-800 rounded-xl">
                +3
        </div>

    </div>
    <div class="cols-span-1 row-span-1 grid grid-flow-row grid-cols-3 h-full w-full">
        <div class=" col-span-3 row-span-3 border border-green-800 rounded-xl align-middle items-center">
            <p class="text-xl text-center border-b border-green-800">Charisma</p>
            <div class="text-center items-center">
                16
            </div>
        </div>
        <div class="col-span-1 col-start-2 row-span-1 border border-green-800 rounded-xl">
                +3
        </div>

    </div>
    <div class="col-span-3 row-span-3 border border-green-800 h-full rounded-l">Inventory</div>
    <div class="col-span-3 row-span-2 border border-green-800 h-full rounded-l">Other profciencies & languages</div>
</div>
@endsection