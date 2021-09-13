<div id="app" class="container py-2">
    <div class="py-2">
        <div id="app" class="container py-2">
            <div class="py-2">
                <div class="modal" id="myModal">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="font-weight-bold ml-auto modal-title text-warning">Please Rate Us Of Our Services</h5>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">x</button>
                            </div>
                            <div class="modal-body">
                                <x-rms-star-rating></x-rms-star-rating>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

    var myModal = new bootstrap.Modal(document.getElementById('myModal'), {})
    myModal.toggle()

</script>
