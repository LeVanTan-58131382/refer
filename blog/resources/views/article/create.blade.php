
@extends("layouts.app")

@section("content")
    <form action="{{ route('baiviet.store') }}" method="POST">
        @csrf
        <label for="">Tiêu đề: </label>
        <input type="text" name="title">
        @error('title')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <br>
        <label for="">Nội dung:</label>
        <textarea name="content" id="" cols="30" rows="10"></textarea>
        <button type="submit">Tạo</button>
    </form>
@endsection