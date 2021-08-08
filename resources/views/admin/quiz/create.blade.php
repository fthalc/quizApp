<x-app-layout>
    <x-slot name="header">Quiz Oluştur</x-slot>
    <div class="car">
        <div class="card-body">
            <form method="POST"action="{{route('quizzes.store')}}">
                @csrf
                <div class="form-group">
                    <label>Quiz Başlığı</label>
                    <input type="text" name="title" class="form-control" required>
                </div>
                <br>
                <div class="form-group">
                    <label>Quiz Açıklama</label>
                    <textarea name="description" class="form-control" rows="4"></textarea>
                </div>
                <br>
                <div class="form-group">
                    <label>Bitiş Tarihi</label>
                    <input type="datetime-local" name="finished_at" class="form-control">
                </div>
                <br>
                <div class="form-group">

                    <button type="submit" class="btn btn-success btn-sm btn-block">Quiz Oluştur</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
