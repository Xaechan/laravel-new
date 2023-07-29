<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="card bg-white">
                <div class="body">
                    <form action="{{ route('tweet.store') }}" method="post">
                        @csrf
                        <textarea name="content" class="textarea textarea-bordered w-full" placeholder="Apa yang sedang kamu pikirkan?" rows="3"></textarea>  <!--Emmet textarea-->
                        <input type="submit" value="Tweet" class="btn-primary">
                    </form>
                </div>
            </div>

            
            @foreach ($tweets as $tweet)
                <div class="card my-4 bg-white">
                    <div class="card-body">
                    <h2 class="text-xl font-bold">{{ $tweet->user->name }}</h2>
                    <p>{{$tweet->content}}</p>
                    {{-- <p>{{$tweet-></p> --}}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
