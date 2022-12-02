@extends('dashboard')

@section('report')
    {{-- <div class="block p-6 rounded-lg shadow-lg bg-white max-w-md">
        <form>
            <div class="form-group mb-6">
                <input type="text"
                    class="form-control block
                    w-full
                    px-3
                    py-1.5
                    text-base
                    font-normal
                    text-gray-700
                    bg-white bg-clip-padding
                    border border-solid border-gray-300
                    rounded
                    transition
                    ease-in-out
                    m-0
                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                    id="exampleInput7" placeholder="Name">
            </div>
            <div class="form-group mb-6">
                <input type="email"
                    class="form-control block
                    w-full
                    px-3
                    py-1.5
                    text-base
                    font-normal
                    text-gray-700
                    bg-white bg-clip-padding
                    border border-solid border-gray-300
                    rounded
                    transition
                    ease-in-out
                    m-0
                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                    id="exampleInput8" placeholder="Email address">
            </div>
            <div class="form-group mb-6">
                <textarea
                    class="
                    form-control
                    block
                    w-full
                    px-3
                    py-1.5
                    text-base
                    font-normal
                    text-gray-700
                    bg-white bg-clip-padding
                    border border-solid border-gray-300
                    rounded
                    transition
                    ease-in-out
                    m-0
                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                    "
                    id="exampleFormControlTextarea13" rows="3" placeholder="Message"></textarea>
            </div>
            <div class="form-group form-check text-center mb-6">
                <input type="checkbox"
                    class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain mr-2 cursor-pointer"
                    id="exampleCheck87" checked>
                <label class="form-check-label inline-block text-gray-800" for="exampleCheck87">Send me a copy of this
                    message</label>
            </div>
            <button type="submit"
                class="
                w-full
                px-6
                py-2.5
                bg-blue-600
                text-white
                font-medium
                text-xs
                leading-tight
                uppercase
                rounded
                shadow-md
                hover:bg-blue-700 hover:shadow-lg
                focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
                active:bg-blue-800 active:shadow-lg
                transition
                duration-150
                ease-in-out">
                Send
            </button>
        </form>
    </div> --}}
    <div class="bg-gray-100 mb-6">
        <ul>
            <li class="flex items-center border-y hover:bg-gray-200 px-3">
                <input id="default-checkbox" type="checkbox" value="" :checked="checkAll"
                    class="w-4 h-4 text-blue-600 bg-white rounded border-gray-300 focus:ring-blue-500 mr-2 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <div x-data="{ messageHover: false }" @mouseover="messageHover = true" @mouseleave="messageHover = false"
                    class="w-full flex items-center justify-between p-1 my-1 cursor-pointer">
                    <a href="{{ route('desReport') }}">
                        <div class="flex items-center">
                            <span class="w-56 pr-2 truncate">William Livingston</span>
                            <span class="w-64 truncate">Lorem ipsum dolor sit amet</span>
                            <span class="mx-1">-</span>
                            <span class="w-96 text-gray-600 text-sm truncate">Sed ut perspiciatis unde omnis iste natus
                                error
                                sit voluptatem</span>
                        </div>
                    </a>
                    <div class="w-32 flex items-center justify-end">
                        <div x-show="messageHover" class="flex items-center space-x-3" style="display: none;">
                            <a href="#" class="no-underline flex items-center mr-2">
                                <button title="Delete">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="red" stroke-width="2"
                                        stroke-linecap="square" stroke-linejoin="round">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path
                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                        </path>
                                        <line x1="10" y1="11" x2="10" y2="17"></line>
                                        <line x1="14" y1="11" x2="14" y2="17"></line>
                                    </svg>
                                </button>
                            </a>
                        </div>
                        <span x-show="!messageHover" class="text-sm text-gray-500">
                            3:05 PM
                        </span>
                    </div>
                </div>
            </li>
            <li class="flex items-center border-y hover:bg-gray-200 px-3">
                <input id="default-checkbox" type="checkbox" value="" :checked="checkAll"
                    class="w-4 h-4 text-blue-600 bg-white rounded border-gray-300 focus:ring-blue-500 mr-2 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <div x-data="{ messageHover: false }" @mouseover="messageHover = true" @mouseleave="messageHover = false"
                    class="w-full flex items-center justify-between p-1 my-1 cursor-pointer">
                    <a href="#">
                        <div class="flex items-center">
                            <span class="w-56 pr-2 truncate">William Livingston</span>
                            <span class="w-64 truncate">Lorem ipsum dolor sit amet</span>
                            <span class="mx-1">-</span>
                            <span class="w-96 text-gray-600 text-sm truncate">Sed ut perspiciatis unde omnis iste natus
                                error
                                sit voluptatem</span>
                        </div>
                    </a>
                    <div class="w-32 flex items-center justify-end">
                        <div x-show="messageHover" class="flex items-center space-x-3" style="display: none;">
                            <a href="#" class="no-underline flex items-center mr-2">
                                <button title="Delete">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="red" stroke-width="2"
                                        stroke-linecap="square" stroke-linejoin="round">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path
                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                        </path>
                                        <line x1="10" y1="11" x2="10" y2="17"></line>
                                        <line x1="14" y1="11" x2="14" y2="17"></line>
                                    </svg>
                                </button>
                            </a>
                        </div>
                        <span x-show="!messageHover" class="text-sm text-gray-500">
                            3:05 PM
                        </span>
                    </div>
                </div>
            </li>
        </ul>
    </div>
@endsection
