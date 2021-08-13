<x-app-layout>
    <x-slot name="header">{{$quiz->title}} - Quizine Ait Sorular</x-slot>
    <div class="car">
        <div class="card-body">
            <h5 class="card-title">
                <a href="{{route('questions.create',$quiz->id)}}" class="btn btn-sm btn-primary"> + Soru Oluştur</a>
            </h5>
            <table class="table table-bordered table-sm">
                <thead>
                <tr>
                    <th scope="col">Soru</th>
                    <th scope="col">Fotoğraf</th>
                    <th scope="col">1.Cevap</th>
                    <th scope="col">2.Cevap</th>
                    <th scope="col">3.Cevap</th>
                    <th scope="col">4.Cevap</th>
                    <th scope="col">5.Cevap</th>
                    <th scope="col">Doğru Cevap</th>
                    <th scope="col" style="width: 150px;">İşlemler</th>
                </tr>
                </thead>
                <tbody>
                @foreach($quiz->questions as $question)
                    <tr>
                        <th>{{$question->question}}</th>
                        <td>
                            @if($question->image)
                                <a href="{{asset($question->image)}}" target="_blank"><img style="width: 200px;" src="{{asset($question->image)}}"></a>
                            @endif
                        </td>
                        <td>{{$question->answer1}}</td>
                        <td>{{$question->answer2}}</td>
                        <td>{{$question->answer3}}</td>
                        <td>{{$question->answer4}}</td>
                        <td>{{$question->answer5}}</td>
                        <td style="width: 70px;" class="text-success">{{substr($question->correct_answer,-1)}}. cevap</td>
                        <td>
                            <a href="{{route('questions.edit',[$quiz->id,$question->id])}}" class="btn btn-sm btn-primary">Düzenle</a>
                            <a href="{{route('quizzes.destroy',$question->id)}}" class="btn btn-sm btn-danger">Kaldır</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
