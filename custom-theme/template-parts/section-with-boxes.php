<?php
$background_color = get_field('background_color') ?? 'dark-blue';
$background_color_class = 'background--' . $background_color;
$text_color_class = 'boxes__content--' . $background_color;
$header_main = get_field('header_main');
$text_main = get_field('text_main');
$subheader = get_field('subheader');
$boxes = get_field('boxes');
$section_separator = get_field('section_separator') ?? 'none';
$section_separator_class = 'separator--' . $section_separator;
?>
<section class="<?php echo $background_color_class;?> <?php echo $section_separator_class;?> ">
<div class="section">
        <div class = "section__content <?php echo $text_color_class; ?>">
            <h1> <?php echo $header_main; ?> </h1>
            <p><?php echo $text_main;?> </p>
            <?php
            if ($subheader) {?>
                <h2> <?php echo $subheader; ?> </h2>
            <?php
            } ?>
        </div>
        <?php
        if ($boxes) { ?>
            <div class="section__boxes">
                <?php
                foreach ($boxes as $box) {
                    $box_header = $box['header'];
                    $box_text = $box['text'];
                    $box_icon = $box['icon'];
                    ?>
                    <div class = "section__box">
                        <h3><?php echo $box_header;?></h3>
                        <p><?php echo $box_text; ?></p>
                        <?php
                        if ($box_icon) {
                            ?>
                            <div class ="section__box--icon">
                                <img src="<?php echo $box_icon['url']; ?>" alt="<?php echo $box_icon['alt']; ?>">
                            </div>
                        <?php }
                         ?>
                    </div>
                    <?php
                } ?>
            </div>
        <?php } ?>
    </div>
        <?php if ($section_separator == 'pink-dot') { ?>
            <div class ="section__pink-dot">
                <img src ="<?php echo get_stylesheet_directory_uri() . '/assets/dot.png'?>"
            </div>
        <?php } ?>
</section>

