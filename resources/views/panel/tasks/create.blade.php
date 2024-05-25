@extends("panel.layout.app")

@section("content")

    <div class="card p-3">
        <div class="card-header">
            <h2>Görev Oluştur</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('panel.addTask')  }}" method="post" >
                @csrf
                <div>
                    <label for="defaultFormControlInput" class="form-label">Başlık: </label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div>
                    <label for="defaultFormControlInput" class="form-label">İçerik: </label>
                    <input type="text" class="form-control" name="content"  required>
                </div>
                <div>
                    <label for="defaultFormControlInput" class="form-label">Kategori </label>
                    <select name="category" id="" class="form-control">

                        <option  selected value="" disabled >Lütfen Seçim yapınız</option>
                   @foreach($categories as $c)
                            <option value="{{$c->id}}">{{$c->name}}</option>
                   @endforeach
                    </select>
                    <label for="defaultFormControlInput" class="form-label">Durum: </label>
                    <select name="status" id="" class="form-control">

                        <option  selected value="" disabled >Lütfen Seçim yapınız</option>
                        <option value="0" name="">Yapılmadı</option>
                        <option value="1"   name="">Yapılıyor</option>
                        <option value="2" name="">Yapıldı</option>
                        <option value="3" name="">İptal Oldu</option>
                    </select>
                </div>
                <div>
                    <label for="defaultFormControlInput" class="form-label">Bitiş Tarihi: </label>
                    <input type="datetime-local" class="form-control" name="deadline">
                </div>
                <button type="submit" class="btn btn-success mt-3">Kaydet</button>
            </form>
        </div>
    </div>

@endsection
