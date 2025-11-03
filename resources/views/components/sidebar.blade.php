<aside class="w-64 bg-white shadow-md flex flex-col p-4">
    <div class="flex flex-col items-center mb-6">
        <img src="{{ asset('images/logo-ada.png') }}" alt="ADA Barbershop Logo" class="w-32 h-auto mb-2">
    </div>

    <nav class="flex flex-col space-y-4">
        <a href="{{ route('dashboard') }}"
           class="flex items-center px-3 py-2 rounded-lg text-lg font-semibold
           {{ request()->routeIs('dashboard') ? 'text-blue-600' : 'text-gray-600 hover:text-blue-600' }}">
            <i class="fa-solid fa-house mr-4 text-2xl"></i> Dashboard
        </a>

        <a href="{{ route('data.kapster') }}"
           class="flex items-center px-3 py-2 rounded-lg text-lg
           {{ request()->routeIs('data.kapster') ? 'text-blue-600 font-semibold' : 'text-gray-600 hover:text-blue-600' }}">
            <i class="fa-solid fa-user-group mr-4 text-2xl"></i> Data Kapster
        </a>

        <a href="{{ route('ubah.jadwal') }}"
           class="flex items-center px-3 py-2 rounded-lg text-lg
           {{ request()->routeIs('ubah.jadwal') ? 'text-blue-600 font-semibold' : 'text-gray-600 hover:text-blue-600' }}">
            <i class="fa-solid fa-calendar-days mr-4 text-2xl"></i> Ubah Jadwal
        </a>

        <a href="{{ route('outlet') }}"
           class="flex items-center px-3 py-2 rounded-lg text-lg
           {{ request()->routeIs('outlet') ? 'text-blue-600 font-semibold' : 'text-gray-600 hover:text-blue-600' }}">
            <i class="fa-solid fa-store mr-4 text-2xl"></i> Outlet
        </a>
    </nav>
</aside>