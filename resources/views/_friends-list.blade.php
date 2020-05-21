<div class="bg-gray-200 border border-gray-300 rounded-lg py-4 px-6">
    <h3 class="font-bold text-xl mb-4">Following</h3>
    <ul>
        @foreach (range(1, 8) as $index)  
        <li class="mb-4">
            <div>
                <a href="#" class="flex items-center text-sm">
                    <img
                        src="https://api.adorable.io/avatars/40/abott@adorable.png"
                        alt=""
                        class="rounded-full mr-2"
                        width="40"
                        height="40"
                    >

                    User Name
                </a>
            </div>
        </li>
        @endforeach
        
    </ul>
</div>
