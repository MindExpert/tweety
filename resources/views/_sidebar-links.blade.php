<ul>
    <li>
        <a class="font-bold text-lg mb-4 block" href="{{ route('home') }}">
            Home
        </a>
    </li>

    <li>
        <a class="font-bold text-lg mb-4 block" href="/explore">
            Explore
        </a>
    </li>

    @auth
        <li>
            <a class="font-bold text-lg mb-4 block" href="{{ route('profile', auth()->user()) }}">
                Profile
            </a>
        </li>

        <li>
            <form method="POST" action="/logout">
                @csrf
                <button class="font-bold bg-blue-200 hover:bg-blue-300 rounded-lg shadow px-5 text-sm text-black h-10">Logout</button>
            </form>
        </li>
    @endauth
</ul>