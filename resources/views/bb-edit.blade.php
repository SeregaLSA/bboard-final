@extends('layouts.app')

@section('title', 'Изменение объявления :: Мои объявления')

@section('content')
<form action = "{{ route('bb.update', ['bb' => $bb->id]) }}" method="POST">
    @csrf
    @method('PATCH')
    <div class="mb-3">
        <label for="txtTitle" class="form-label">Товар</label>
        <input name="title" id="textTitle" class="form-control @error('title') is-invalid @enderror"
            value="{{ old('title', $bb->title) }}">
        @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="txtContent" class="form-label">Описание</label>
        <textarea name="content" id="textContent" class="form-control @error('content') is-invalid @enderror" row="3">{{ $bb->content }}</textarea>
        @error('content')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="txtPrice" class="form-label">Цена</label>
        <input name="price" id="textPrice" class="form-control @error('price') is-invalid @enderror"  value="{{ $bb->price }}">
        @error('price')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <input type="submit" class="btn btn-primary" value="Сохранить">
</form>
@endsection
