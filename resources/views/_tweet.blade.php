<div class="flex p-4 border-b border-b-gray-400">

    <div class="mr-2 flex-shrink-0">
    <a href="{{ route('profile', $tweet->user) }}">
            <img
                {{-- src="https://avatars.dicebear.com/api/avataaars/example.svg" --}}
                src="{{ $tweet->user->avatar }}"
                alt=""
                class="rounded-full mr-2"
                width="50"
                height="50"
            >
        </a>
    </div>

    <div>
        <h5 class="font-bold mb-2">
            <a href="{{ route('profile', $tweet->user->name) }} ">
                {{ $tweet->user->name }}
            </a>
        </h5>

        <p class="text-sm mb-3">
           {{ $tweet->body }}
        </p>

    </div>
    
</div>
