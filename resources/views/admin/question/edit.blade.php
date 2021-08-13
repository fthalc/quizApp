<x-app-layout>
    <x-slot name="header">{{$question->question}} Düzenle</x-slot>
    <div class="card">
        <div class="card-body">
           <form method="POST"action="{{route('questions.update',[$question->quiz_id,$question->id])}}" enctype="multipart/form-data">
                @csrf
               @method('PUT')
                <div class="form-group">
                    <label>Soru</label>
                    <textarea name="question" class="form-control" rows="4">{{$question->question}}</textarea>
                </div>
                <br>
                <div class="form-group">
                    <label>Fotograf</label>
                    <br>
                    @if($question->image)
                    <a href="{{asset($question->image)}}" target="_blank">
                        <img style="width: 100px;" src="{{asset($question->image)}}">
                    </a>
                    @endif
                    <br>
                    <input type="file" name="image" class="form-control">
                </div>
            <br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>1. Cevap</label>
                            <textarea name="answer1" class="form-control" rows="2">{{$question->answer1}}</textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>2. Cevap</label>
                            <textarea name="answer2" class="form-control" rows="2">{{$question->answer2}}</textarea>
                        </div>
                    </div>
                </div>
            <br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>3. Cevap</label>
                            <textarea name="answer3" class="form-control" rows="2">{{$question->answer3}}</textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>4. Cevap</label>
                            <textarea name="answer4" class="form-control" rows="2">{{$question->answer4}}</textarea>
                        </div>
                    </div>
                </div>
            <br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>5. Cevap</label>
                            <textarea name="answer5" class="form-control" rows="2">{{$question->answer5}}</textarea>
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label>Doğru Cevap</label>
                    <select name="correct_answer" class="form-control">
                        <option value="" hidden> Doğru Cevabı Seçiniz</option>
                        <option @if( $question->correct_answer === 'answer1') selected @endif value="answer1">1.Cevap</option>
                        <option @if( $question->correct_answer === 'answer2') selected @endif value="answer2">2.Cevap</option>
                        <option @if( $question->correct_answer === 'answer3') selected @endif value="answer3">3.Cevap</option>
                        <option @if( $question->correct_answer === 'answer4') selected @endif value="answer4">4.Cevap</option>
                        <option @if( $question->correct_answer === 'answer5') selected @endif value="answer5">5.Cevap</option>
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-sm btn-block">Soruyu Güncelle</button>
                </div>
           {{-- </form>--}}
        </div>
    </div>
</x-app-layout>
