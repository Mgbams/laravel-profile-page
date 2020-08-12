@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSL7HOia2PtCfJIkBwFp3uRKM6ZneXctEn74Q&usqp=CAU" style="height: 150px;" alt="codecamp address" />
        </div>

        <div class="col-9 p-5">
            <div class="d-flex">
                <div class="mr-3"><h1>{{$hello -> username}}</h1></div>
                <div><button>Follow</button></div>
            </div>

            <div class="d-flex justify-content-between">
                <div><strong>315</strong> posts</div>
                <div><strong>53.8k</strong> followers</div>
                <div><strong>277</strong> following</div>
            </div>

            <div class="font-weight-bold">freecodecamp.org</div>
            <div>
                <p>
                We're a global community of millions of people learning to code together. We're an open source, 
                donor-supported, 501(c)(3) nonprofit.
                </p>
            </div>
            <div><a href="https://l.instagram.com/?u=https%3A%2F%2Fwww.freecodecamp.org%2F&e=ATMfr3PjvBcSzIro04tsPJ4KJWDBcizEwkuyoaRW0hidoJzXDL9lxjiVimIIPJJ10wojRbyps3XfcEjt&s=1">freecodecamp.org</a></div>
        </div>

        <div class="row pt-4">
            <div class="col-4"><img  src="https://scontent-cdt1-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/c3.0.744.744a/s640x640/117243751_3191331930959937_4248390780708663081_n.jpg?_nc_ht=scontent-cdt1-1.cdninstagram.com&_nc_cat=109&_nc_ohc=gJwN-gzhtz0AX-Kvfqo&oh=84a08b0aead30ae2326162cae578cca2&oe=5F5DEA02" alt="images"  class="w-100 pb-3" /></div>
            <div class="col-4"><img  src="https://scontent-cdt1-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/c3.0.744.744a/s640x640/117243751_3191331930959937_4248390780708663081_n.jpg?_nc_ht=scontent-cdt1-1.cdninstagram.com&_nc_cat=109&_nc_ohc=gJwN-gzhtz0AX-Kvfqo&oh=84a08b0aead30ae2326162cae578cca2&oe=5F5DEA02" alt="images" class="w-100 pb-3" /></div>
            <div class="col-4"><img  src="https://scontent-cdt1-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/c3.0.744.744a/s640x640/117243751_3191331930959937_4248390780708663081_n.jpg?_nc_ht=scontent-cdt1-1.cdninstagram.com&_nc_cat=109&_nc_ohc=gJwN-gzhtz0AX-Kvfqo&oh=84a08b0aead30ae2326162cae578cca2&oe=5F5DEA02" alt="images"  class="w-100 pb-3" /></div>
            <div class="col-4"><img  src="https://scontent-cdt1-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/c3.0.744.744a/s640x640/117243751_3191331930959937_4248390780708663081_n.jpg?_nc_ht=scontent-cdt1-1.cdninstagram.com&_nc_cat=109&_nc_ohc=gJwN-gzhtz0AX-Kvfqo&oh=84a08b0aead30ae2326162cae578cca2&oe=5F5DEA02" alt="images"  class="w-100 pb-3" /></div>
            <div class="col-4"><img  src="https://scontent-cdt1-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/c3.0.744.744a/s640x640/117243751_3191331930959937_4248390780708663081_n.jpg?_nc_ht=scontent-cdt1-1.cdninstagram.com&_nc_cat=109&_nc_ohc=gJwN-gzhtz0AX-Kvfqo&oh=84a08b0aead30ae2326162cae578cca2&oe=5F5DEA02" alt="images" class="w-100 pb-3" /></div>
            <div class="col-4"><img  src="https://scontent-cdt1-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/c3.0.744.744a/s640x640/117243751_3191331930959937_4248390780708663081_n.jpg?_nc_ht=scontent-cdt1-1.cdninstagram.com&_nc_cat=109&_nc_ohc=gJwN-gzhtz0AX-Kvfqo&oh=84a08b0aead30ae2326162cae578cca2&oe=5F5DEA02" alt="images"  class="w-100 pb-3" /></div>
        </div>
    </div>
</div>
@endsection
