@if (isset($breadcrumbs) && $breadcrumbs)
    <div class="breadcrumbs">
        <a class="active" href="{{getUrl('/')}}">
            <i class="fa fa-long-arrow-left fa-lg" aria-hidden="true"></i>
            <i class="fa fa-caret-left" aria-hidden="true"></i>
            {{__t('Назад')}}
        </a>
        @foreach ($breadcrumbs->crumbs as $breadcrumb)
        <a href="{{$breadcrumb['url']}}">{{$breadcrumb['title']}}</a>
        @endforeach
        <hr class="hr-header">
    </div>
@endif
