@extends("panel.layout.app")

@section("content")

    <div class="card p-3">
        <div class="card-header">
            <h2>Görev Oluşturuldu</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('panel.addTask') }}" method="POST">
                @csrf
                <div>
                    <label for="defaultFormControlInput" class="form-label">Başlık: </label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div>
                    <label for="defaultFormControlInput" class="form-label">İçerik: </label>
                    <input type="text" class="form-control" name="content">
                </div>
                <div>
                    <label for="defaultFormControlInput" class="form-label">Durum: </label>
                    <select name="status" id="status" class="form-control">
                        <option value="yapilmadi">Yapılmadı</option>
                        <option value="yapiliyor">Yapılıyor</option>
                        <option value="yapildi">Yapıldı</option>
                        <option value="iptal">İptal Oldu</option>
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
