

<?php
/*    function greet ($name, $color) {
        echo "<p> Hello, my name is $name and my favorite color is $color. </p>";
    }

    greet('John', 'blue');
    greet('Lane', 'yellow');
    $names = array('Brad', 'Jane', 'Paul', 'Tony');
    $count = 0;
    while ($count < count($names)) {
        echo "<li>Hi, my name is $names[$count]</li>";
        $count ++;
    }
*/
get_header();
while (have_posts()) {
    the_post(); ?>

    <h2>
        <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
        </a>
    </h2>
    <?php the_content(); ?>
    <hr>
    <?php
}
get_footer();
?>

