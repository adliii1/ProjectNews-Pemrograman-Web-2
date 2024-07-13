@extends('layout.app')

@section('content')
<div class="px-[150px] py-8 mb-[70px]">
    <div class="flex flex-col">
        <div class="mb-[30px]">
            <h1 class="flex items-center text-xl font-medium">
                <div class="w-1 h-2.5 bg-[#F81539] rounded-xl mr-1.5"></div>
                Categori UI/UX
            </h1>
        </div>
        <div class="flex justify-start gap-6 flex-wrap">
            <button class="flex flex-col p-2.5 w-[300px] h-[430px] bg-white rounded-xl">
                <img src="./img/gambar3.png" alt="" class="rounded-xl w-[280px] h-[180px]" />
                <p class="font-medium text-base py-4 text-left">
                    Opening Day Of Boating Season, Seatle WA
                </p>
                <p class="font-normal text-sm text-left mb-4">
                    Of Course The puget sound is very watery, And Where There is
                    water, there are boats. Today is....
                </p>
                <div class="flex flex-row gap-2.5 rounded-xl py-[14px] pl-4 bg-[#F5F5F5] w-full">
                    <img src="./img/gambar2.jpg" alt="" class="w-[44px] h-[44px] rounded-xl" />
                    <div class="flex items-center justify-between">
                        <div class="">
                            <p class="font-medium text-sm text-left">James</p>
                            <p class="font-normal text-xs text-[#3E3232] text-left">
                                August 18, 2022
                            </p>
                        </div>
                    </div>
                </div>
            </button>
            <button class="flex flex-col p-2.5 w-[300px] h-[430px] bg-white rounded-xl">
                <img src="./img/gambar3.png" alt="" class="rounded-xl w-[280px] h-[180px]" />
                <p class="font-medium text-base py-4 text-left">
                    Opening Day Of Boating Season, Seatle WA
                </p>
                <p class="font-normal text-sm text-left mb-4">
                    Of Course The puget sound is very watery, And Where There is
                    water, there are boats. Today is....
                </p>
                <div class="flex flex-row gap-2.5 rounded-xl py-[14px] pl-4 bg-[#F5F5F5] w-full">
                    <img src="./img/gambar2.jpg" alt="" class="w-[44px] h-[44px] rounded-xl" />
                    <div class="flex items-center justify-between">
                        <div class="">
                            <p class="font-medium text-sm text-left">James</p>
                            <p class="font-normal text-xs text-[#3E3232] text-left">
                                August 18, 2022
                            </p>
                        </div>
                    </div>
                </div>
            </button>
        </div>
    </div>
</div>
@endsection