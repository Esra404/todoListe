@extends("panel.layout.app")

@section("content")
    <div class="card p-4">
        <h3>Kategori Oluştur</h3>
    </div>
    <div class="card-body">
        <form action="{{route('panel.categoryAdd')}}" method="post">
          @csrf
            <div class="mb-3">
                <label for="">Kategori Adı</label>
                <input type="text" class="form-control" placeholder="Lütfen Kategori İd yazınız" name="category_name" >

                <label for="exampleFormControlInput" class="form-label mt-3" >Kategori Durmu :</label>

                <select name="category_status" id="" class="form-control">
                    <option value="aktif">AKTİF</option>
                    <option value="pasif">PASİF</option>

                </select>
            </div>
            <button type="submit" class="btn btn-info">Kaydet</button>
        </form>

    </div>

@endsection

