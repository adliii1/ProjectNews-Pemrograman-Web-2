@extends('layout.app')

@section('content')
<div class="mx-[150px] py-8 mb-20 flex gap-5">
    <div class="w-4/6 flex items-center flex-col gap-8 mx-4">
        <h1 class="text-left font-normal text-2xl">
            How to Spend the Perfect Day on Croatia's Most Magical Island
        </h1>
        <img src="{{asset('./img/gambar4.png')}}" alt="" class="max-w-[500px] rounded-xl" />
        <div class="flex items-center gap-10">
            <p class="text-[#6e6565] font-medium text-sm">
                <i class="bx bxs-calendar mr-2 font-normal text-sm"></i>
                July 14 , 2022
            </p>
            <p class="text-[#6e6565] font-medium text-sm">
                <i class="bx bx-folder font-medium text-sm text-[#6e6565]"></i>
                Category : Sport
            </p>
        </div>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse
            sapiente reprehenderit libero sequi quis aspernatur placeat
            obcaecati laboriosam ratione eveniet animi, ducimus natus itaque
            illum, ut necessitatibus quas eaque fugit. Hic doloribus iste, eum
            corrupti obcaecati aperiam nihil earum eaque libero nulla ex
            necessitatibus similique at expedita sequi sunt ratione unde enim
            incidunt ea, dicta explicabo corporis assumenda. Iusto, voluptate.
            Soluta consequatur aut aperiam! Vero quaerat, modi odio sed
            quibusdam quos impedit quis ullam natus enim. Provident
            perspiciatis rem ut debitis, dolore ullam repellat placeat nulla
            cum maiores, maxime totam? Dolores id nihil commodi natus! Nisi,
            harum expedita error modi praesentium quas inventore iusto saepe
            fuga doloremque fugiat commodi sed sequi laboriosam omnis culpa
            tempora dicta vero! Magni, vero harum. Soluta nostrum consequatur
            temporibus dolorem pariatur dignissimos minima? Pariatur provident
            doloribus maxime quam consequuntur excepturi nisi, architecto
            repellendus beatae, quasi accusantium vero nostrum nemo
            repudiandae distinctio itaque cum soluta ex. Molestiae eum nihil
            quasi repellendus ad saepe provident! Pariatur reprehenderit
            consequuntur enim omnis cum. Numquam soluta facere aliquam id quas
            saepe earum temporibus similique voluptatem sint illo natus, quis
            neque. Incidunt, rem, quae nobis magnam distinctio culpa dolorem
            placeat et consequuntur ad ipsam dolore quod explicabo corporis
            natus vel. Suscipit, magnam. Non consectetur harum officiis
            corporis quis modi accusantium ipsa. Sapiente sequi a natus vel
            odio, eaque, non numquam iste blanditiis, quam laudantium commodi
            voluptatem quia aut. Dolorum dicta, voluptatum explicabo
            cupiditate maiores ratione nam recusandae praesentium dolore
            sapiente. Porro? Reiciendis non autem sequi dolorem fugiat quam
            similique. Unde, dolore veritatis nulla reiciendis inventore
            consectetur pariatur quidem vel ab porro soluta id dignissimos
            ullam optio exercitationem mollitia ipsam cupiditate iste. Eveniet
            nulla, aspernatur libero eum rerum culpa, veniam doloribus
            repellendus architecto tempore, neque tenetur mollitia officia ab
            odio natus optio suscipit est? Debitis nisi a nobis culpa
            exercitationem explicabo corrupti?
        </p>
    </div>
    <div class="w-2/6 flex flex-col gap-5">
        <div class="p-3.5 bg-[#F5F5F5] flex rounded-xl gap-2">
            <img src="{{asset("./img/gambar5.png")}}" alt="" class="rounded-xl max-w-[70px] max-h-[70px]" />
            <div class="flex flex-row justify-between w-full">
                <div class="flex flex-col gap-1.5">
                    <p class="font-medium text-sm text-black mt-2">
                        Lois Hoebregts
                    </p>
                    <div>
                        <button
                            class="bg-[#f74963] py-2 pr-6 pl-4 rounded-xl text-white font-medium text-sm flex items-center">
                            <i class="bx bx-plus mr-2"></i>
                            Ikuti
                        </button>
                    </div>
                </div>
                <a class="font-normal text-xs text-[#6e6565] mt-2" href="">
                    27 Posts
                </a>
            </div>
        </div>
    </div>
</div>
@endsection