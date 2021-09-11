@props(['galleryImages'])
<!-- Start Gallery -->
<div class="gallery-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading-title text-center">
                    <h2>Gallery</h2>
                    <p>Some Of Our Restaurant Outside & Inside Views </p>
                </div>
            </div>
        </div>
        <div class="tz-gallery">
            <div class="row">

                @foreach($galleryImages as $galleryImage)
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <a class="lightbox" href="{{ asset('storage').'/'.$galleryImage->thumbnail }}">
                        <img class="img-fluid" src="{{ asset('storage').'/'.$galleryImage->thumbnail }}" alt="Gallery Images">
                    </a>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
<!-- End Gallery -->
