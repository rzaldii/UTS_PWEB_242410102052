<nav class="bg-slate-900 text-white px-6 py-4 flex justify-between items-center shadow-md">
    <div class="text-xl font-bold cursor-pointer">TaskSprint</div>

    <ul class="flex space-x-6">
        <li>
            <a href="{{ route('dashboard') }}" class=" hover:bg-slate-800 px-3 py-2 rounded-md duration-300">
               Dashboard
            </a>
        </li>
        <li>
            <a href="{{ route('pengelolaan') }}" class=" hover:bg-slate-800 px-3 py-2 rounded-md duration-300">
               Pengelolaan
            </a>
        </li>
        <li>
            <a href="{{ route('profile') }}" class=" hover:bg-slate-800 px-3 py-2 rounded-md duration-300">
               Profile
            </a>
        </li>
    </ul>

    <div class="flex items-center space-x-4">
        <span class="">
            Halloww, <b>{{ session('username') }}</b>
        </span>
        @if(session()->has('username'))
            <a href="{{ route('logout') }}"
               class="bg-white hover:bg-gray-200 px-3 py-2 rounded-md text-slate-800 font-semibold duration-300">
               Logout
            </a>
        @endif
    </div>
</nav>
