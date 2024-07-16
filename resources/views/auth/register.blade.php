<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/output.css')

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet" />
</head>

<body>
    <div class="h-screen font-roboto">
        <div class="h-full bg-center bg-no-repeat flex justify-center items-center bg-[#fafafa]">
            <div
                class="bg-white rounded-3xl min-w-[500px] py-[50px] px-[57px] flex flex-col text-center text-[#202224] font-semibold">
                <p class="font-bold text-3xl">Buat Akun Anda</p>
                <form id="form" action="" class="mt-9">
                    <div class="flex flex-col text-left">
                        <label for="email">Email</label>
                        <input type="email"
                            class="mt-4 bg-[#F1F4F9] p-2 border-[#D8D8D8] border rounded-lg text-[#A6A6A6] outline-none"
                            id="email" required />
                    </div>
                    <div class="flex flex-col text-left">
                        <label for="username">Username</label>
                        <input type="text"
                            class="mt-4 bg-[#F1F4F9] p-2 border-[#D8D8D8] border rounded-lg text-[#A6A6A6] outline-none"
                            id="username" required />
                    </div>
                    <div class="flex flex-col text-left">
                        <label for="password">Password</label>
                        <input type="email"
                            class="mt-4 bg-[#F1F4F9] p-2 border-[#D8D8D8] border rounded-lg text-[#A6A6A6] outline-none"
                            id="password" required />
                    </div>
                    <div class="flex flex-col text-left">
                        <label for="passwordKonfirmasi">Konfirmasi Password</label>
                        <input type="password"
                            class="mt-4 bg-[#F1F4F9] p-2 border-[#D8D8D8] border rounded-lg text-[#A6A6A6] outline-none"
                            id="passwordKonfirmasi" required />
                    </div>
                </form>
                <button form="form" type="submit"
                    class="bg-[#f74963] inline py-3 font-bold text-white rounded-xl mt-10">
                    Sign Up
                </button>
            </div>
        </div>
    </div>
</body>

</html>