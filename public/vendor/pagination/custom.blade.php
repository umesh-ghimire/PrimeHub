@if ($paginator->hasPages())
    <div class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <button class="page-btn disabled">
                <i class="fas fa-chevron-left"></i>
            </button>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="page-btn">
                <i class="fas fa-chevron-left"></i>
            </a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <span style="padding: 0 12px; color: var(--gray);">{{ $element }}</span>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <button class="page-btn active">{{ $page }}</button>
                    @else
                        <a href="{{ $url }}" class="page-btn">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="page-btn">
                <i class="fas fa-chevron-right"></i>
            </a>
        @else
            <button class="page-btn disabled">
                <i class="fas fa-chevron-right"></i>
            </button>
        @endif
    </div>
@endif