@foreach($vacancies as $vacancy)
    {{ $vacancy->t('title') }}
    {{ $vacancy->created_at }}
@endforeach

{{ $vacancies->appends(request()->all())->render() }}
