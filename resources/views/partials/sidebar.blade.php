<nav class="bg-gray-950 text-white flex justify-between items-center p-4 lg:hidden">
    <h1 class="text-xl font-bold title lg:hidden">AIRARAUNG</h1>
    <button id="mobileMenuButton" class="text-white focus:outline-none">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
        </svg>
    </button>
</nav>

<!-- Sidebar -->
<aside id="sidebar" class="sticky left-0 top-0  h-screen ">
    <div class="hidden lg:flex  flex-col  bg-gray-950 text-white w-52 h-screen p-4">
        <h1 class="font-bold mb-6 hidden title text-center text-3xl lg:block">AIRARAUNG</h1>
        <ul class="space-y-2">
            <li><a href="/dashboard" class="block py-2 px-4 bg-transparent hover:bg-gray-800 transition duration-200 rounded-lg">Dashboard</a></li>
            <li>
                <button class="w-full flex justify-between items-center py-2 px-4 bg-transparent hover:bg-gray-800 transition duration-200 rounded-lg accordion-trigger">
                    <span>Section</span>
                    <svg class="w-4 h-4  transform transition-transform duration-200" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M15.293 5.293a1 1 0 0 1 1.414 1.414l-6 6a1 1 0 0 1-1.414 0l-6-6a1 1 0 1 1 1.414-1.414L10 10.586l5.293-5.293z" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div class="pl-4 space-y-1">
                    <ul class="hidden">
                        <li><a href="/dashboard/home" class="block py-2 px-4 bg-transparent hover:bg-gray-800 transition duration-200 rounded-lg">Home Section</a></li>
                        <li><a href="/dashboard/about" class="block py-2 px-4 bg-transparent hover:bg-gray-800 transition duration-200 rounded-lg">About Section</a></li>
                        <li><a href="/dashboard/contact" class="block py-2 px-4 bg-transparent hover:bg-gray-800 transition duration-200 rounded-lg">Contact Section</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="/dashboard/product_list" class="block py-2 px-4 bg-transparent hover:bg-gray-800 transition duration-200 rounded-lg">Product List</a></li>
            <li><a href="/dashboard/transactions" class="block py-2 px-4 bg-transparent hover:bg-gray-800 transition duration-200 rounded-lg">Transactions</a></li>
            <li>
                <form action="/logout" method="POST">
                    @csrf
                    <button class="w-full text-left py-2 px-4  hover:bg-gray-700 transition duration-200 rounded-lg" onclick="return confirm('apakah anda yakin ingin logout?')">Logout</button>
                </form>
            </li>
        </ul>
    </div>
</aside>
