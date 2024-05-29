<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyData</title>
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.c
    ss" rel="stylesheet" integrity="sha384-
    T3c6Coli6uLrA9TRxnatzjcDSCmG1MXxSR1GAsXEV/DwwykcMPK8M2HN"
    crossorigin="anonymous">
</head>
<body> style="background: lightgray">

<div class="container mt-5">
    <div class="row">
        <div clas="col-md-12">
            <div>
                <h3 class="text-center my-4"> HALAMAN ADMIN</h3>
                <hr>
            </div>
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <a href="{{route('posts.create') }}" class="btn
                    btn-md btn-success mb-3>TAMBAH POST"></a>
                    <div class="card border-0 shadow-sm rounded"> 
<div class="card-body"> 
<a href="{{ route('posts.create') }}" class="btn 
btn-md btn-success mb-3">TAMBAH POST</a> 
<table class="table table-bordered"> 
<thead> 
<tr> 
<th scope="col">GAMBAR</th> 
<th scope="col">JUDUL</th> 
<th scope="col">CONTENT</th> 
<th scope="col">AKSI</th> 
</tr> 
</thead> 
<tbody> 
@forelse ($posts as $post) 
<tr> 
<td class="text-center"> 
<img src="{{ 
asset('/storage/posts/'.$post->image) }}" class="rounded" style="width: 
150px"> 
</td> 
<td>{{ $post->title }}</td> 
<td>{!! $post->content !!}</td> 
<td class="text-center"> 
<form onsubmit="return 
confirm('Apakah Anda Yakin ?');" action="{{ route('posts.destroy', $post- 
>id) }}" method="POST"> 
<a href="{{ route('posts.show', 
$post->id) }}" class="btn btn-sm btn-dark">SHOW</a> 
<a href="{{ route('posts.edit', 
$post->id) }}" class="btn btn-sm btn-primary">EDIT</a> 
@csrf 
@method('DELETE') 
<button type="submit" 
class="btn btn-sm btn-danger">HAPUS</button> 
</form> 
</td> 
</tr> 
@empty 
<div class="alert alert-danger"> 
Data Post belum Tersedia. 
</div> 
@endforelse 
</tbody> 
</table> 
{{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>