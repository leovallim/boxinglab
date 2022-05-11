<?php 
$content = $args['block_table'];
// var_dump($content['block_init_video']);
if($content['block_tables_items']):
?>
<?= ht_section(array('tables wrapper', ht_section_class($args['block_class'])), $args['block_id']); ?>
    <div class="container">
        <?php if(!empty($content['block_tables_title'])): ?><h1 class="title title--center"><?= $content['block_tables_title'] ?></h1><?php endif; ?>

        <?php foreach($content['block_tables_items'] as $table): ?>
            <div class="table__wrapper">
                <?php if($table['block_table_item_title']): ?><h2 class="title title--center"><?= $table['block_table_item_title'] ?></h2><?php endif; ?>
                <?php if(!empty($table['block_table_item_table'])): ?>
                    <div class="table__container">
                        <table class="table">
                            <?php if($table['block_table_item_table']['header']): ?>
                                
                                <thead>
                                    <tr>
                                    <?php foreach($table['block_table_item_table']['header'] as $thead): ?>
                                        <th><?= $thead['c']; ?></th>
                                    <?php endforeach; ?>
                                    </tr>
                                </thead>
                            
                            <?php endif; ?>
                            <?php if($table['block_table_item_table']['body']): ?>
                                
                                <tbody>
                                    <?php foreach($table['block_table_item_table']['body'] as $tr): ?>
                                        <tr>
                                            <?php foreach($tr as $td): ?>
                                                <td><?= $td['c'] ?></td>    
                                            <?php endforeach; ?>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            
                            <?php endif; ?>
                        </table>
                    </div>
                
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<?php endif; ?>