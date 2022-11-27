<article>
        <?php
        foreach ($handbook_this as $hand) {;
        }
        ?>
        <div class="row m-2">
                <h2 class="text-danger text-center m-1"><?php echo $hand['title'] ?> </h2>
                <div class="col-8 justify-content-center mx-auto">
                        <?php echo '<img src="upload/' . $hand["img"] . '" alt="" class="mx-auto d-block img-fluid">' ?>
                        <p><?php echo $hand['content'] ?></p>

                </div>


        </div>
</article>