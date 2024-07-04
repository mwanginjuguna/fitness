<div class="grid lg:grid-cols-2 gap-6 items-center">
    <div class="col-span-1">
        <x-cards.vertical-image-text>
            <x-slot:title>
                {{ $featured->title ?? '5 Common Fitness Mistakes That Are Holding You Back (And How to Fix Them)' }}
            </x-slot:title>

            <x-slot:excerpt>
                {{ $featured->excerpt ?? "In this post, we'll reveal the top 5 fitness mistakes that are sabotaging your success and provide actionable tips to get you back on track" }}
            </x-slot:excerpt>
        </x-cards.vertical-image-text>
    </div>

    <div class="py-3 grid gap-y-3">
        @forelse($otherPosts as $post)
            <x-cards.horizontal-image-text>
                <x-slot:title>
                    {{ $post->title ?? "From Couch to Fit: How to Overcome Your Fear of Exercise and Get Started" }}
                </x-slot:title>

                <x-slot:excerpt>
                    {{ $post->excerpt ?? "Are you intimidated by the idea of starting a new exercise routine? It's time to overcome your fear of exercise and take the first step towards a healthier, happier you." }}
                </x-slot:excerpt>
            </x-cards.horizontal-image-text>
        @empty
            <h4 class="py-3 font-medium">
                No Posts Yet. <a href="{{ route('blog') }}" class="text-blue-500">View our blog instead.</a>
            </h4>
        @endforelse
    </div>
</div>
