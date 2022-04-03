<style>
    .explore-gallery {
        transition: transform .2s;
        cursor: pointer;
        border-radius: 10px;

    }

    .explore-gallery:hover {
        transform: scale(1.4);
    }

    .modal-content {
        width: 700px;

    }

    .cross {
        padding: 10px;
        color: #d6312d;
        cursor: pointer;
        font-size: 23px
    }

    .cross i {
        margin-top: -5px;
        cursor: pointer
    }

    .comment-box {
        padding: 5px
    }

    .comment-area textarea {
        resize: none;
        border: 1px solid #ff0000
    }

    .form-control:focus {
        color: #495057;
        background-color: #fff;
        border-color: #ffffff;
        outline: 0;
        box-shadow: 0 0 0 1px rgb(255, 0, 0) !important
    }

    .send {
        color: #fff;
        background-color: #ff0000;
        border-color: #ff0000
    }

    .send:hover {
        color: #fff;
        background-color: #f50202;
        border-color: #f50202
    }

    .rating {
        display: inline-flex;
        margin-top: -10px;
        flex-direction: row-reverse
    }

    .rating>input {
        display: none
    }

    .rating>label {
        position: relative;
        width: 28px;
        font-size: 35px;
        color: #ff0000;
        cursor: pointer
    }

    .rating>label::before {
        content: "\2605";
        position: absolute;
        opacity: 0
    }

    .rating>label:hover:before,
    .rating>label:hover~label:before {
        opacity: 1 !important
    }

    .rating>input:checked~label:before {
        opacity: 1
    }

    .rating:hover>input:checked~label:before {
        opacity: 0.4
    }
</style>

<body>
    <div class="container ">
        <h1>Explore Places</h1>
        <div class="container ">
            <div class="row">
                <div class="">
                    <?php foreach ($explore_post as $key => $value) { ?>
                        <img data-bs-toggle="modal" data-bs-target="#exampleModal<?= $value['id_postingan'] ?>" class="mt-3 me-2 explore-gallery" src="<?= base_url('foto_post/' . $value['foto_post']) ?>" width="250px" height="250px" alt="" />
                    <?php } ?>

                </div>
            </div>

        </div>

        <!-- Modal -->
        <?php foreach ($explore_post as $key => $value) { ?>
            <div class="modal fade" id="exampleModal<?= $value['id_postingan']; ?>">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <img class="ms-3" src="<?= base_url('foto_post/' . $value['foto_post']) ?>" width="300px" height="500px" alt="" />
                                    </div>
                                    <div class="col-lg-6">
                                        <h5><a href="<?= base_url('explore') ?>" style="text-decoration: none; color:black"><?= $value['nama_user']; ?></a></h5>
                                        <hr>
                                        <h5><?= $value['judul_post']; ?></h5>
                                        <p><?= $value['desc_post']; ?></p>

                                        <div class="comment-box text-center">
                                            <h4>Add a comment</h4>
                                            <div class="rating"> <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label> <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label> <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label> <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label> <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label> </div>
                                            <div class="comment-area"> <textarea class="form-control" placeholder="what is your view?" rows="4"></textarea> </div>
                                            <div class="text-center mt-4"> <button class="btn btn-success send px-5">Send message <i class="fa fa-long-arrow-right ml-1"></i></button> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
    </div>
<?php } ?>

</div>

</body>