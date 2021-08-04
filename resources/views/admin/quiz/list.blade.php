<x-app-layout>
    <x-slot name="header">Quizler</x-slot>
    <div class="car">
        <div class="card-body">
            <h5 class="card-title">
                <a href="#" class="btn btn-sm btn-primary"> + Quiz Oluştur</a>
            </h5>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">Quiz</th>
                    <th scope="col">Durum</th>
                    <th scope="col">Bitiş Tarihi</th>
                    <th scope="col">İşlemler</th>
                </tr>
                </thead>
                <tbody>
                @foreach($quizzes as $quiz)
                <tr>
                    <th>{{$quiz->title}}</th>
                    <td>{{$quiz->status}}</td>
                    <td>{{$quiz->finished_at}}</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-primary">Düzenle</a>
                        <a href="#" class="btn btn-sm btn-danger">Kaldır</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
