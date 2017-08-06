<ul class="c-search__results-list m-forum">

    <li class="c-search__results-list-item">
        <span class="c-search__results-list-item-icon">
            @include('component.svg.sprite',[
                'name' => 'icon-comment'
            ])
        </span>
        {{trans('search.tab.forum')}}
        <ul class="c-search__results-sublist">

        @foreach ($content as $row)
        <li class="c-search__results-sublist-item">
            <a href="{{ route($row->type.'.show', [$row->slug]) }}" class="c-search__results-link">
                <div class="c-search__results-link-profile">
                    <div class="c-profile m-mini">
                        <div class="c-profile__image-wrap">
                            <img src="{{ $row->user->imagePreset() }}" alt="" class="c-profile__image">
                            <div class="c-profile__badge">
                                <div class="c-badge m-inverted">
                                    <span class="c-badge__count">{{ $row->comments->count() }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="c-search__results-link-text">
                    {{ $row->title }}
                </div>
            </a>
        </li>
        @endforeach

        </ul>
    </li>

</ul>