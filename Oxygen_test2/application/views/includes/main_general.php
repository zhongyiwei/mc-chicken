<div id="page">
    <div id="content">
        <?php
        $this->db->select('*');
        $this->db->from('article');
        $this->db->order_by("article_id", "desc");
        $record = $this->db->get();
        if ($record) {
            foreach ($record->result()as $row_article) {
        ?>
                <div class="post">
                    <h2 class="title"><?php echo $row_article->title; ?></h2>
                    <div class="entry">
                        <p><?php echo $row_article->article; ?></p>
                        
                            <p class="links">Date Posted: <?php echo $row_article->date; ?> &nbsp;&nbsp;&nbsp;</p>
                        
                    </div>
                </div>
        <?php }
        } ?>

    </div>
    <!-- end #content -->