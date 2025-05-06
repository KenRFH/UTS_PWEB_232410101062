<header class="bg-blue-700 fixed top-0 left-0 px-6 md:px-10 py-4 md:py-6 flex justify-between items-center w-full text-white font-light z-50">
    <div id="sidebar-overlay" class="fixed inset-0 bg-black bg-opacity-50 z-40 hidden"></div>

<div id="mobile-menu" class="fixed inset-y-0 left-0 w-64 bg-blue-700 text-white transform -translate-x-full transition-transform duration-300 z-50 md:hidden">
    <div class="p-6 space-y-4">
        <h2 class="text-xl font-semibold mb-4">Menu</h2>
        <a href="{{ route('dashboard', ['username' => $username]) }}" class="block px-4 py-2 rounded hover:bg-blue-600">Dashboard</a>
        <a href="{{ route('pengelolaan', ['username' => $username]) }}" class="block px-4 py-2 rounded hover:bg-blue-600">Employee</a>
    </div>
</div>
    <div class="flex items-center hover:bg-white rounded-3xl hover:text-blue-500 font-semibold transition duration-500 px-2 py-2">
        <a href="{{ route('profile', ['username' => $username]) }}" class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 md:w-8 md:h-8" viewBox="0 0 24 24" fill="currentColor">
                <path
                    d="M12 2C17.52 2 22 6.48 22 12C22 17.52 17.52 22 12 22C6.48 22 2 17.52 2 12C2 6.48 6.48 2 12 2ZM6.02332 15.4163C7.49083 17.6069 9.69511 19 12.1597 19C14.6243 19 16.8286 17.6069 18.2961 15.4163C16.6885 13.9172 14.5312 13 12.1597 13C9.78821 13 7.63095 13.9172 6.02332 15.4163ZM12 11C13.6569 11 15 9.65685 15 8C15 6.34315 13.6569 5 12 5C10.3431 5 9 6.34315 9 8C9 9.65685 10.3431 11 12 11Z" />
            </svg>
            <span class="text-lg ml-2 hidden md:inline">Hola! {{ $username }}</span>
        </a>
    </div>

    <button id="hamburger-button" class="md:hidden focus:outline-none">
        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
    </button>


<nav class="hidden md:flex space-x-6 text-lg">
    <a href="{{ route('dashboard', ['username' => $username]) }}" class="{{ request()->routeIs('dashboard') ? 'bg-white text-blue-500 rounded-3xl px-4 py-2' : 'hover:bg-white hover:text-blue-500 rounded-3xl px-4 py-2 transition duration-300' }}">
        Dashboard
    </a>
    <a href="{{ route('pengelolaan', ['username' => $username]) }}" class="{{ request()->routeIs('pengelolaan') ? 'bg-white text-blue-500 rounded-3xl px-4 py-2' : 'hover:bg-white hover:text-blue-500 rounded-3xl px-4 py-2 transition duration-300' }}">
        Employee
    </a>
</nav>

</header>

<script>
    const hamburgerButton = document.getElementById('hamburger-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const overlay = document.getElementById('sidebar-overlay');


    hamburgerButton.addEventListener('click', () => {
        mobileMenu.classList.remove('-translate-x-full');
        mobileMenu.classList.add('translate-x-0');
        overlay.classList.remove('hidden');
    });

    overlay.addEventListener('click', () => {
        mobileMenu.classList.remove('translate-x-0');
        mobileMenu.classList.add('-translate-x-full');
        overlay.classList.add('hidden');
    });
</script>

