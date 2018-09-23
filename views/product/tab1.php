
    <div class="itemcontiner">
        <?php
        $naghd=$data['naghd'];
        foreach ($naghd as $value) {
            ?>
            <div class="item">
                <h4>
                    <i></i>
                    <span>
                        <?= $value['title']; ?>
                    </span>
                </h4>
                <div class="description">
                    <?= $value['discription']; ?>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
    <script>
        $('.tab_childe .item').click(function () {
            $('h4 i', this).toggleClass('active');
            $('.description', this).slideToggle(150);
        });
    </script>