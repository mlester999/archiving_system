<x-layout>
    <div class="bg-white max-w-md md:max-w-2xl mx-auto p-8 rounded-lg shadow-2xl">
        <section>
            <h3 class="font-bold text-2xl text-center text-green-600">Theses and Capstone Projects Archiving System</h3>
            <p class="text-gray-600 pt-2 text-center">Login to your account.</p>
        </section>

        <section class="mt-10">
            <form class="flex flex-col" method="POST" action="">
                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="username">Username</label>
                    <input type="text" id="username" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 transition duration-500 px-3 pb-3">
                </div>
                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="password">Password</label>
                    <input type="password" id="password" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 transition duration-500 px-3 pb-3">
                </div>
                <div class="flex justify-end">
                    <a href="#" class="text-sm text-slate-600 hover:text-slate-700 hover:underline mb-6">Forgot your password?</a>
                </div>
                <button class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200" type="submit">Login</button>
            </form>
        </section>
    </div>
</x-layout>