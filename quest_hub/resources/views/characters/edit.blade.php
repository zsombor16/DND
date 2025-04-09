@extends('layouts.app')
@section('MainContent')
    <form action="{{ route('characters.update', $character->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="grid grid-cols-1 lg:grid-cols-3">
            <div class="border-4 border-green-800 rounded-lg m-auto relative sm:text-sm lg:text-xl">
               
            </div>

            <div class="border-4 border-green-800 rounded-xl  mx-auto relative">
                Campaign name if in one
            </div>

            <div class="grid grid-cols-2  mx-auto relative">
                <div class="col-span-1 m-auto">
                    <img src="..\public\img\profilepic.jpg" alt="profile pic">
                </div>

                <div class="col-span-1 m-auto font-bold lg:text-xl">
                    <input type="text" name="Name" id="name" value="{{old('name',$character->name)}}">
                </div>
            </div>
        </div>
        <div class="border-b-4 border-green-800 my-4">

        </div>
        <div
            class="w-[80vw] h-full grid grid-flow-row items-center grid-cols-6 gap-x-16 xl:gap-y-4 lg:gap-y-2 mt-auto mx-auto relative">
            {{-- Strength --}}
            <div class="cols-span-1 row-span-1 grid grid-flow-row grid-cols-3 h-full w-full m-auto">
                <div class=" col-span-3 row-span-3 border border-green-800 rounded-xl align-middle items-center">
                    <p class="lg:text-xl md:text-sm sm:text-sm text-center border-b border-green-800 w-10/12 mx-auto">
                        Strength
                    </p>

                    <div class="text-center items-center m-auto">
                        <input type="search" class="border-2 border-green-800 mx-auto my-2 rounded-lg bg-[#f8edd6] w-4/12"
                            name="Strength" value="{{ old('Strength', $character->charsheet->Strength) }}">
                    </div>
                </div>

            </div>
            {{-- Strength end --}}
            {{-- Dex --}}
            <div class="cols-span-1 row-span-1 grid grid-flow-row grid-cols-3 h-full w-full">
                <div class=" col-span-3 row-span-3 border border-green-800 rounded-xl align-middle items-center">
                    <p class="lg:text-xl md:text-sm sm:text-sm text-center border-b border-green-800 w-10/12 mx-auto">
                        Dexterity
                    </p>
                    <div class="text-center items-center m-auto">
                        <input type="search" class="border-2 border-green-800 mx-auto my-2 rounded-lg bg-[#f8edd6] w-4/12"
                            name="Dexterity" value="{{ old('Dexterity', $character->charsheet->Dexterity) }}">
                    </div>
                </div>


            </div>
            {{-- Dex end --}}

            {{-- Const --}}
            <div class="cols-span-1 row-span-1 grid grid-flow-row grid-cols-3 h-full w-full">
                <div class=" col-span-3 row-span-3 border border-green-800 rounded-xl align-middle items-center">
                    <p class="lg:text-xl md:text-sm sm:text-sm text-center border-b border-green-800 w-10/12 mx-auto">
                        Constitution</p>
                        <div class="text-center items-center m-auto">
                            <input type="search" class="border-2 border-green-800 mx-auto my-2 rounded-lg bg-[#f8edd6] w-4/12"
                                name="Constitution" value="{{ old('Constitution', $character->charsheet->Constitution) }}">
                        </div>
                </div>


            </div>
            {{-- Const end --}}
            {{-- Int --}}
            <div class="cols-span-1 row-span-1 grid grid-flow-row grid-cols-3 h-full w-full">
                <div class=" col-span-3 row-span-3 border border-green-800 rounded-xl align-middle items-center">
                    <p class="lg:text-xl md:text-sm sm:text-sm text-center border-b border-green-800 w-10/12 mx-auto">
                        Intelligence</p>
                        <div class="text-center items-center m-auto">
                            <input type="search" class="border-2 border-green-800 mx-auto my-2 rounded-lg bg-[#f8edd6] w-4/12"
                                name="Intelligence" value="{{ old('Intelligence', $character->charsheet->Intelligence) }}">
                        </div>
                </div>


            </div>
            {{-- int end --}}

            {{-- wisdom --}}
            <div class="cols-span-1 row-span-1 grid grid-flow-row grid-cols-3 h-full w-full">
                <div class=" col-span-3 row-span-3 border border-green-800 rounded-xl align-middle items-center">
                    <p class="lg:text-xl md:text-sm sm:text-sm text-center border-b border-green-800 w-10/12 mx-auto">Wisdom
                    </p>
                    <div class="text-center items-center m-auto">
                        <input type="search" class="border-2 border-green-800 mx-auto my-2 rounded-lg bg-[#f8edd6] w-4/12"
                            name="Wisdom" value="{{ old('Wisdom', $character->charsheet->Wisdom) }}">
                    </div>
                </div>
                

            </div>
            {{-- wisdom end --}}
            {{-- Charisma --}}
            <div class="cols-span-1 row-span-1 grid grid-flow-row grid-cols-3 h-full w-full">
                <div class=" col-span-3 row-span-3 border border-green-800 rounded-xl align-middle items-center">
                    <p class="lg:text-xl md:text-sm sm:text-sm text-center border-b border-green-800 w-10/12 mx-auto">
                        Charisma
                    </p>
                    <div class="text-center items-center m-auto">
                        <input type="search" class="border-2 border-green-800 mx-auto my-2 rounded-lg bg-[#f8edd6] w-4/12"
                            name="Charisma" value="{{ old( 'Charisma', $character->charsheet->Charisma) }}">
                    </div>
                </div>

            </div>
            {{-- Charisma end --}}



            {{-- Saving throws --}}

            <div
                class="col-span-3 row-span-3 border border-green-800 h-full rounded-lg grid grid-flow-row grid-cols-4 pb-8 pt-2">
                <div class="col-span-4 text-xl">
                    Saving throws
                </div>
                {{-- Strength --}}
                <div class="col-span-1 form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" name="Strength" id="strength" type="radio" value="checkedValue"
                             />
                    </label>
                </div>
                <div class="col-span-1 border-b-2 border-green-800 rounded-3xl mb-2">
                    {{ round(($character->charsheet->Strength - 10) / 2, 0) }}
                </div>
                <div class="col-span-2 text-center text-xl">
                    Strength
                </div>

                {{-- Dexterity --}}

                <div class="col-span-1 form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" name="Dexterity" id="Dexterity" type="radio" value="checkedValue"
                             />
                    </label>
                </div>
                <div class="col-span-1 border-b-2 border-green-800 rounded-3xl mb-2">
                    {{ round(($character->charsheet->Dexterity - 10) / 2, 0) }}
                </div>
                <div class="col-span-2 text-center text-xl">
                    Dexterity
                </div>
                {{-- Constitution --}}

                <div class="col-span-1 form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" name="Constitution" id="Constitution" type="radio" value="checkedValue"
                             />
                    </label>
                </div>
                <div class="col-span-1 border-b-2 border-green-800 rounded-3xl mb-2">
                    {{ round(($character->charsheet->Constitution - 10) / 2, 0) }}
                </div>
                <div class="col-span-2 text-center text-xl">
                    Constitution
                </div>

                {{-- Intelligence --}}

                <div class="col-span-1 form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" name="Intelligence" id="Intelligence" type="radio" value="checkedValue"
                             />
                    </label>
                </div>
                
                <div class="col-span-1 border-b-2 border-green-800 rounded-3xl mb-2">
                    {{ round(($character->charsheet->Intelligence - 10) / 2, 0) }}
                </div>
                <div class="col-span-2 text-center text-xl">
                    Intelligence
                </div>

                {{-- Wisdom --}}

                <div class="col-span-1 form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" name="Wisdom" id="Wisdom" type="radio" value="checkedValue"
                             />
                    </label>
                </div>
                <div class="col-span-1 border-b-2 border-green-800 rounded-3xl mb-2">
                    {{ round(($character->charsheet->Wisdom - 10) / 2, 0) }}
                </div>
                <div class="col-span-2 text-center text-xl">
                    Wisdom
                </div>

                {{-- Charisma --}}

                <div class="col-span-1 form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" name="Charisma" id="Charisma" type="radio" value="checkedValue"
                             />
                    </label>
                </div>
                <div class="col-span-1 border-b-2 border-green-800 rounded-3xl mb-2">
                    {{ round(($character->charsheet->Charisma - 10) / 2, 0) }}
                </div>
                <div class="col-span-2 text-center text-xl">
                    Charisma
                </div>

            </div>

            {{-- Saving throws end --}}
            {{-- Class race level --}}
            <div
                class="col-span-3 row-span-2 border border-green-800 h-full rounded-l grid grid-flow-row grid-cols-3 gap-y-4 gap-x-10 py-8 px-4 rounded-lg ">
                <div class="col-span-2 row-span-1 ">
                    <div class="text-center">
                        Class
                    </div>

                    
                    <div class="col-span-2 row-span-1 border-2 border-green-800 text-center">
                        <select name="charclass_id" class="w-full bg-[#f8edd6]">
                            <option value="" disabled> Please choose a class...</option>
                            @foreach ($charclasses as $charclass)
                                <option value="{{$charclass->id}}">{{$charclass->name}}</option>
                            @endforeach
                        </select>
                    </div>

                </div>
                <div class="col-span-1 row-span-2 rounded-lg border-2 border-green-800 pt-4 px-4 pb-2 m-4">
                    <div class=" text-3xl font-bold text-center">
                        {{ $character->character_level }}
                    </div>
                    <div class="border-t border-green-800 pt-2 text-xl m-auto">
                        Level
                    </div>
                </div>
                <div class="col-span-2 row-span-1 ">
                    <div class="text-center">
                        Race
                    </div>
                    <div class="col-span-2 row-span-1 border-2 border-green-800 text-center">
                        <select name="charrace_id" class="w-full bg-[#f8edd6]">
                            <option value="" disabled> Please choose a race...</option>
                            @foreach ($charraces as $charrace)
                                <option value="{{$charrace->id}}">{{$charrace->name}}</option>
                            @endforeach
                        </select>
                    </div>

                </div>



            </div>
            {{-- Class race level end --}}


            {{-- Armor, speed, hp, stb --}}
            <div
                class="col-span-3 row-span-2 border border-green-800 h-full rounded-l grid grid-flow-row grid-cols-3 grid-rows-2 gap-x-12 gap-y-6 p-4">
                <div class="col-span-1 row-span-1 h-full border-4 border-green-800 rounded-xl grid grid-rows-3 ">
                    <div class="w-8/12 mx-auto border-b border-green-800 mt-auto">
                        Walking speed
                    </div>
                    <div class="row-span-2 m-auto text-3xl">
                        {{ $character->charsheet->Walkingspeed }}
                    </div>
                </div>
                <div class="col-span-1 row-span-1 h-full border-4 border-green-800 rounded-xl grid grid-rows-3 ">
                    <div class="w-8/12 mx-auto border-b border-green-800 mt-auto">
                        Armor class
                    </div>
                    <div class="row-span-2 m-auto text-3xl">
                        {{ $character->charsheet->Armorclass }}
                    </div>
                </div>
                <div class="col-span-1 row-span-1 h-full border-4 border-green-800 rounded-xl grid grid-rows-3 ">
                    <div class="w-8/12 mx-auto border-b border-green-800 mt-auto">
                        Initiative bonus
                    </div>
                    <div class="row-span-2 m-auto text-3xl">
                        {{ round(($character->charsheet->Dexterity - 10) / 2, 0) }}
                    </div>
                </div>
                <div
                    class="col-span-1 row-span-1 h-full border-4 border-green-800 rounded-xl grid grid-rows-3 grid-cols-2 ">
                    <div class="w-8/12 col-span-2 mx-auto border-b border-green-800 mt-auto">
                        Health
                    </div>
                    <div class="row-span-2 ml-auto my-auto text-3xl text-right">
                        {{ $character->charsheet->Currenthealth }}
                    </div>
                    <div class="row-span-2 mr-auto ml-1 my-auto text-3xl text-left border-l-2 border-green-800">
                        {{ $character->charsheet->Maxhealth }}
                    </div>
                </div>
                <div class="col-span-2 row-span-1 grid grid-flow-row grid-cols-3 grid-rows-2 gap-y-4">
                    <div class="row-span-1 border-4 border-green-800 rounded-l-lg">
                        {{ $character->charsheet->Proficiency }}
                    </div>
                    <div class="row-span-1 col-span-2 border border-green-800 rounded-r-lg my-1 text-center pt-2 ">
                        Passive perception
                    </div>


                    <div class="row-span-1 border-4 border-green-800 rounded-l-lg">
                        +{{ $character->charsheet->Proficiency }}
                    </div>
                    <div class="row-span-1 col-span-2 border border-green-800 rounded-r-lg my-1 pt-2">
                        Proficiency bonus
                    </div>
                </div>



            </div>
            {{-- Armor, speed, hp, stb end --}}


            {{-- Skill checks --}}
            <div
                class="col-span-3 row-span-5 border border-green-800 h-full rounded-lg grid grid-flow-row grid-cols-4 grid-rows-18 pb-8 pt-2">
                <div class=" col-span-4 text-xl mb-4">
                    Skill checks
                </div>
                <div class="col-span-1 form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" name="" id="" type="radio"
                            value="checkedValue" disabled />
                    </label>
                </div>
                <div class="col-span-1 border-b-2 border-green-800 rounded-3xl mb-2">
                    {{ round(($character->charsheet->Dexterity - 10) / 2, 0) }}
                </div>
                <div class="col-span-2 text-center text-xl">
                    Acrobatics (DEX)
                </div>

                <div class="col-span-1 form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" name="" id="" type="radio"
                            value="checkedValue" disabled />
                    </label>
                </div>
                <div class="col-span-1 border-b-2 border-green-800 rounded-3xl mb-2">
                    {{ round(($character->charsheet->Wisdom - 10) / 2, 0) }}
                </div>
                <div class="col-span-2 text-center text-xl">
                    Animal Handling (WIS)
                </div>

                <div class="col-span-1 form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" name="" id="" type="radio"
                            value="checkedValue" disabled />
                    </label>
                </div>
                <div class="col-span-1 border-b-2 border-green-800 rounded-3xl mb-2">
                    {{ round(($character->charsheet->Intelligence - 10) / 2, 0) }}
                </div>
                <div class="col-span-2 text-center text-xl">
                    Arana (INT)
                </div>

                <div class="col-span-1 form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" name="" id="" type="radio"
                            value="checkedValue" disabled />
                    </label>
                </div>
                <div class="col-span-1 border-b-2 border-green-800 rounded-3xl mb-2">
                    {{ round(($character->charsheet->Strength - 10) / 2, 0) }}
                </div>
                <div class="col-span-2 text-center text-xl">
                    Athletics (STR)
                </div>

                <div class="col-span-1 form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" name="" id="" type="radio"
                            value="checkedValue" disabled />
                    </label>
                </div>
                <div class="col-span-1 border-b-2 border-green-800 rounded-3xl mb-2">
                    {{ round(($character->charsheet->Charisma - 10) / 2, 0) }}
                </div>
                <div class="col-span-2 text-center text-xl">
                    Deception (CHA)
                </div>

                <div class="col-span-1 form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" name="" id="" type="radio"
                            value="checkedValue" disabled />
                    </label>
                </div>
                <div class="col-span-1 border-b-2 border-green-800 rounded-3xl mb-2">
                    {{ round(($character->charsheet->Intelligence - 10) / 2, 0) }}
                </div>
                <div class="col-span-2 text-center text-xl">
                    History (INT)
                </div>

                <div class="col-span-1 form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" name="" id="" type="radio"
                            value="checkedValue" disabled />
                    </label>
                </div>
                <div class="col-span-1 border-b-2 border-green-800 rounded-3xl mb-2">
                    {{ round(($character->charsheet->Wisdom - 10) / 2, 0) }}
                </div>
                <div class="col-span-2 text-center text-xl">
                    Insight (WIS)
                </div>

                <div class="col-span-1 form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" name="" id="" type="radio"
                            value="checkedValue" disabled />
                    </label>
                </div>
                <div class="col-span-1 border-b-2 border-green-800 rounded-3xl mb-2">
                    {{ round(($character->charsheet->Charisma - 10) / 2, 0) }}
                </div>
                <div class="col-span-2 text-center text-xl">
                    Intimidation (CHA)
                </div>

                <div class="col-span-1 form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" name="" id="" type="radio"
                            value="checkedValue" disabled />
                    </label>
                </div>
                <div class="col-span-1 border-b-2 border-green-800 rounded-3xl mb-2">
                    {{ round(($character->charsheet->Intelligence - 10) / 2, 0) }}
                </div>
                <div class="col-span-2 text-center text-xl">
                    Investigation (INT)
                </div>

                <div class="col-span-1 form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" name="" id="" type="radio"
                            value="checkedValue" disabled />
                    </label>
                </div>
                <div class="col-span-1 border-b-2 border-green-800 rounded-3xl mb-2">
                    {{ round(($character->charsheet->Wisdom - 10) / 2, precision: 0) }}
                </div>
                <div class="col-span-2 text-center text-xl">
                    Medicine (WIS)
                </div>

                <div class="col-span-1 form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" name="" id="" type="radio"
                            value="checkedValue" disabled />
                    </label>
                </div>
                <div class="col-span-1 border-b-2 border-green-800 rounded-3xl mb-2">
                    {{ round(($character->charsheet->Intelligence - 10) / 2, 0) }}
                </div>
                <div class="col-span-2 text-center text-xl">
                    Nature (INT)
                </div>

                <div class="col-span-1 form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" name="" id="" type="radio"
                            value="checkedValue" disabled />
                    </label>
                </div>
                <div class="col-span-1 border-b-2 border-green-800 rounded-3xl mb-2">
                    {{ round(($character->charsheet->Wisdom - 10) / 2, precision: 0) }}
                </div>
                <div class="col-span-2 text-center text-xl">
                    Perception (WIS)
                </div>

                <div class="col-span-1 form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" name="" id="" type="radio"
                            value="checkedValue" disabled />
                    </label>
                </div>
                <div class="col-span-1 border-b-2 border-green-800 rounded-3xl mb-2">
                    {{ round(($character->charsheet->Charisma - 10) / 2, 0) }}
                </div>
                <div class="col-span-2 text-center text-xl">
                    Performance (CHA)
                </div>

                <div class="col-span-1 form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" name="" id="" type="radio"
                            value="checkedValue" disabled />
                    </label>
                </div>
                <div class="col-span-1 border-b-2 border-green-800 rounded-3xl mb-2">
                    {{ round(($character->charsheet->Charisma - 10) / 2, 0) }}
                </div>
                <div class="col-span-2 text-center text-xl">
                    Persuasion (CHA)
                </div>

                <div class="col-span-1 form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" name="" id="" type="radio"
                            value="checkedValue" disabled />
                    </label>
                </div>
                <div class="col-span-1 border-b-2 border-green-800 rounded-3xl mb-2">
                    {{ round(($character->charsheet->Intelligence - 10) / 2, 0) }}
                </div>
                <div class="col-span-2 text-center text-xl">
                    Religion (INT)
                </div>

                <div class="col-span-1 form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" name="" id="" type="radio"
                            value="checkedValue" disabled />
                    </label>
                </div>
                <div class="col-span-1 border-b-2 border-green-800 rounded-3xl mb-2">
                    {{ round(($character->charsheet->Dexterity - 10) / 2, 0) }}
                </div>
                <div class="col-span-2 text-center text-xl">
                    Sleight of Hand (DEX)
                </div>
                <div class="col-span-1 form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" name="" id="" type="radio"
                            value="checkedValue" disabled />
                    </label>
                </div>
                <div class="col-span-1 border-b-2 border-green-800 rounded-3xl mb-2">
                    {{ round(($character->charsheet->Dexterity - 10) / 2, 0) }}
                </div>
                <div class="col-span-2 text-center text-xl">
                    Stealth (DEX)
                </div>
                <div class="col-span-1 form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" name="" id="" type="radio"
                            value="checkedValue" disabled />
                    </label>
                </div>
                <div class="col-span-1 border-b-2 border-green-800 rounded-3xl mb-2">
                    {{ round(($character->charsheet->Wisdom - 10) / 2, 0) }}
                </div>
                <div class="col-span-2 text-center text-xl">
                    Survival (WIS)
                </div>


            </div>
            {{-- Skill checks end --}}

            {{-- traits, spells &cons --}}
            <div class="col-span-3 row-span-2 border border-green-800 h-full rounded-l">Char traits, spells&conjurations
            </div>
            {{-- traits, spells &cons end --}}


            <div class="col-span-3 row-span-3 border border-green-800 h-full rounded-l">Inventory</div>
            <div class="col-span-3 row-span-2 border border-green-800 h-full rounded-l">Other profciencies & languages
            </div>
            
        </div>
        <button type="submit">Save changes</button>
    </form>
@endsection
