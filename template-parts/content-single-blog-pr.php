<?php if ( have_rows( 'rider' ) ) : ?>
    <?php $counter = count( get_field( 'rider' ) ); ?>
    <!-- power rankings -->
    
    <div class="power-rankings">
        <?php
        while ( have_rows( 'rider' ) ) :
            the_row();

            // vars
            $name = get_sub_field( 'name' );
            $content = get_sub_field( 'details' );
            $image = get_sub_field( 'image' );
            $last_week = get_sub_field( 'last_week' );
            $lw_icon = '';
            
            if ('n/a' === $last_week) :
                $lw_icon = '';
            else :
                if ($counter == $last_week) :
                    $lw_icon = '<i class="fa fa-arrows-h" aria-hidden="true"></i>';
                elseif ($counter > $last_week) :
                    $lw_icon = '<i class="fa fa-long-arrow-down" aria-hidden="true"></i>';
                elseif ($counter < $last_week) :
                    $lw_icon = '<i class="fa fa-long-arrow-up" aria-hidden="true"></i>';
                
                endif; 
            endif;
            ?>
    
            <div class="row rider">
                
                <div class="image-wrap col-12 col-sm-3">
                    <?php if ( $image ) : ?>
                        <img src="<?php echo $image['sizes']['blog-power-ranking']; ?>" alt="<?php echo empty( $image['alt'] ) ? $image['name'] : $image['alt']; ?>" />
                    <?php endif; ?>
                </div>
                                                    
                <div class="col-12 col-sm-9">
                    <div class="rider-rank">
                        <?php echo $counter; ?>. 
                        <span class="rider-name"><?php echo $name; ?></span>
                    </div>
                
                    <div class="rider-last-week-rank">
                        Last week: <?php echo $last_week; ?> <?php echo $lw_icon; ?>
                    </div>
                
                    <?php echo $content; ?>
                </div>
            </div>
            
            <?php $counter--; ?>
    
        <?php endwhile; ?>

    </div>

<?php endif; ?>
