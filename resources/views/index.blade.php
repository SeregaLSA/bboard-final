@extends('layouts.app')

@section('title', 'Главная')

<div class="navbar-brand me-auto">
    <h2 class="text-center"> <?php echo $data->name; ?></h2>
    <p class="weather__humidity text-center">Температура: <?php echo ceil($data->main->temp_max); ?>°C, Влажность: <?php echo $data->main->humidity; ?> %,  Ветер: <?php echo $data->wind->speed; ?> км/ч</p>
</div>

@section('content')

    @if (count($bbs) > 0)
        <table class="table table-striped table-borderless">
            <thead>
            <tr>
                <th>Товар</th>
                <th>Цена</th>
                <th>&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            @foreach($bbs as $bb)
                <tr>
                    <td><h4>{{ $bb->title }}</h4></td>
                    <td>{{ $bb->price }}</td>
                    <td>
                        <a href="{{ route('detail', ['bb' => $bb->id]) }}">Подробнее...</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $bbs->links("pagination") }}
    @endif


@endsection('content')
