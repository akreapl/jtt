<div class="page-container py-5">
    <div class="container">
        <div class="row pb-5 mb-3 d-flex justify-content-center" style="text-align:justify;">
            <div class="col-12">

                <?php
                $id = 1224;
                $post = get_post($id);
                $content = apply_filters('the_content', $post->post_content);
                echo $content;
                ?>
            </div>
        </div>
    </div>
</div>