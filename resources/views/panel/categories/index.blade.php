@extends("panel.layout.app")

@section("content")
    <div class="card p-3">
        <div class="card-header">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    {{session("success")}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                </div>

            @endif
                @if(session('errors'))
                    <div class="alert alert-danger alert-dismissible" role="alert">
                        {{session("errors")}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                    </div>

                @endif
            <h3>Kategoriler</h3>
            <a href="{{route('panel.categoryCreate')}}"  class="btn btn-ml btn-success">Kategori oluştur</a>
</div>
            <div class="card-body">
        <div class="card">

<h5 class="card-header">Kategori Listesi</h5>
            <p class ="ms-5">Kategori Listesi aşağıda bulunmaktadır</p>
            <div class="table-responsive text-nowrap">
                @if($kategoriler->first())
                    <table class="table">
                    <thead>
                    <tr>


                        <th>Kategori Adı</th>
                        <th>Kullanıcı</th>
                        <th>Durum</th>
                        <th>Oluşturulma Tarihi</th>
                        <th>İşlemler</th>
                        <td></td>
                    </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    @foreach($kategoriler as $k)


                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$k->name}}</strong></td>
                            <td>
                                {{$k->getUser->name}}
                            </td>
                            <td>
                                @if($k->is_active==1)
                                    aktif
                                @else
                                    pasif
                                @endif
                            </td>
                            <td>
                                {{$k->created_at->diffForHumans()}}
                            </td>
                            <td>
                                <a href="{{route("panel.categoryUpdatePage",$k->id)}}" class="btn btn-info">Güncelle</a>

                                <a href="{{route("panel.categoryDelete",$k->id)}}" class="btn btn-danger">Sil</a>
                            </td>

                        </tr>
                    @endforeach




                    </tbody>
                </table>
                @else
                    <p>hiç kategori oluşturmadınız</p>

                @endif


            </div>
        </div>

    </div>
        </div>
    </div>
@endsection

