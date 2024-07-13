@extends('layout.app')

@section('content')
<div class="px-[150px] mb-16 mt-[60px]">
    <form id="form" method="post" action="" class="mt-7 grid grid-cols-5 gap-x-8 text-md font-semibold">
        <div class="col-span-3 px-8 py-6 flex flex-col gap-6">
            <div class="flex flex-col gap-3">
                <label for="judul" class="font-medium text-base text-black">Judul</label>
                <input type="text" id="judul_berita" name="judul" class="px-5 py-2 border bg-[#F5F5F5] rounded-xl" />
            </div>
            <div class="flex flex-col gap-3 rounded-xl">
                <label for="isiBerita" class="font-medium text-black text-base">Isi Berita</label>
                <textarea name="isiBerita" id="isiBerita"
                    class="p-2 h-[350px] outline-none bg-[#F5F5F5] rounded-xl resize-none"></textarea>
            </div>
        </div>
        <section class="col-span-2  py-6 h-fit rounded-lg ">
            <p class="font-bold text-base px-8 text-black mb-4">Masukkan Gambar</p>
            <div class="px-4 mb-5">
                <label for="image-upload" id="drag-area"
                    class="w-full border-2 border-dashed border-[#D9D9D9] h-[280px] bg-[#F5F5F5] rounded-lg overflow-hidden cursor-pointer flex justify-center items-center">
                    <input id="image-upload" name="image" type="file" hidden accept="image/*" />
                    <div id="image-viewer"
                        class="w-full h-full bg-no-repeat bg-center bg-cover flex flex-col justify-center items-center">
                        <img src="./img/icon.png" alt="" />
                        <p class="text-[18px]">
                            Tarik dan lepas atau
                            <span class="text-primary">pilih gambar</span>
                        </p>
                        <p class="text-base text-black/25">
                            Mendukung JPG, JPEG, dan PNG
                        </p>
                    </div>
                </label>
            </div>

            <button class="py-2.5 px-4 bg-[#f74963] text-white font-medium text-sm rounded-xl ">
                <i class='bx bx-upload mr-2 text-sm'></i>
                Upload Berita
            </button>
        </section>
    </form>
</div>
@endsection