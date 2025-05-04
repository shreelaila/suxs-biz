<style>
    .breadcrumb-item::before {
        margin-top: 4px;
    }
</style>
<nav class="mb-3" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">

        @foreach ($bcdata['links'] as $link)
            @if ($link['link'] != '')
                <li
                    class="breadcrumb-item {{ isset($link['active_link']) && $link['active_link'] === true ? 'active' : '' }}">
                    <a href="{{ $link['link'] }}">{{ $link['page'] }}</a>
                </li>
            @else
                <li
                    class="breadcrumb-item {{ isset($link['active_link']) && $link['active_link'] === true ? 'active' : '' }}">
                    {{ $link['page'] }}</li>
            @endif
        @endforeach
    </ol>
</nav>
<div class="d-flex justify-content-between">
    <div class="d-flex">
        @if (isset($bcdata['back']) && $bcdata['back'] != '')
            <a href="{{ $bcdata['back'] }}" class="me-1 mt-1 pt-2 text-dark"><span data-feather="arrow-left"></span> </a>
        @endif
        <h4 class="mb-5 mt-2"> {{ $bcdata['page_title'] }}</h4>
    </div>
    <div class="div">
        @if (isset($bcdata['addbutton']) && $bcdata['addbutton'] != '')
        <a href="{{ $bcdata['addbutton']['button'] }}" class="btn btn-primary btn-sm"><i
                class="far fa-plus-square"></i> {{ $bcdata['addbutton']['title'] }}</a>
        @endif
    </div>
</div>

